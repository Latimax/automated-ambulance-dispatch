<?php
ob_start(); // Start output buffering

$page = 'requests';

include 'header.php';
include 'navbar.php';

$message = '';

$user_id = "";

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $caller_name = $_POST['caller_name'];
    $phone_number = $_POST['phone_number'];
    $details = $_POST['details'];
    $address = $_POST['address'];
    $school_area_id = $_POST['school_area_id'];

    // Start a transaction
    $pdo->beginTransaction();

    try {
        // Check for an available ambulance in the requested school area
        $stmt = $pdo->prepare('SELECT id FROM ambulances WHERE school_area_id = ? AND availability = TRUE LIMIT 1');
        $stmt->execute([$school_area_id]);
        $ambulance = $stmt->fetch();

        if ($ambulance) {
            // Assign the available ambulance
            $ambulance_id = $ambulance['id'];
            $status = 'Assigned';

            // Update ambulance availability
            $updateStmt = $pdo->prepare('UPDATE ambulances SET availability = FALSE WHERE id = ?');
            $updateStmt->execute([$ambulance_id]);
        } else {
            // No available ambulance, set status to pending
            $ambulance_id = NULL;
            $status = 'Pending';
        }

        // Insert the request
        $stmt = $pdo->prepare('INSERT INTO requests (caller_name, phone_number, details, address, status, school_area_id, ambulance_id) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$caller_name, $phone_number, $details, $address, $status, $school_area_id, $ambulance_id]);

        // Commit the transaction
        $pdo->commit();
        $message = "Request submitted successfully!";

        header('location: notify.php?message='.$message);
        exit;
    } catch (Exception $e) {
        // Rollback the transaction if something failed
        $pdo->rollBack();
        $message = "Failed: " . $e->getMessage();
    }
}
?>

<div class="container my-5">
    <h2 class="mb-4">Place a Request</h2>
    <?php if ($message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <form method="post" class="bg-light p-4 rounded shadow">
        <div class="form-group mb-3">
            <label for="caller_name">Caller Name</label>
            <input type="text" class="form-control" id="caller_name" name="caller_name" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-group mb-3">
            <label for="details">Details</label>
            <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group mb-4">
            <label for="school_area_id">School Area</label>
            <select class="form-control" id="school_area_id" name="school_area_id" required>
                <?php
                $stmt = $pdo->query('SELECT id, name FROM school_areas ORDER BY name');
                while ($row = $stmt->fetch()) {
                    echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['name']) . '</option>';
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>

    <?php if($user_id == 1){ ?>
    <h2 class="mt-5">Logged Requests</h2>
    <table class="table table-striped table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Caller Name</th>
                <th>Phone Number</th>
                <th>Details</th>
                <th>Address</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Ambulance ID</th>
                <th>School Area</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query('SELECT requests.*, school_areas.name AS school_area_name FROM requests INNER JOIN school_areas ON requests.school_area_id = school_areas.id ORDER BY created_at DESC');
            while ($row = $stmt->fetch()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['caller_name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['phone_number']) . '</td>';
                echo '<td>' . htmlspecialchars($row['details']) . '</td>';
                echo '<td>' . htmlspecialchars($row['address']) . '</td>';
                echo '<td>' . htmlspecialchars($row['status']) . '</td>';
                echo '<td>' . htmlspecialchars($row['created_at']) . '</td>';
                echo '<td>' . htmlspecialchars($row['ambulance_id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['school_area_name']) . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <?php } ?>
</div>

<?php include 'footer.php';
ob_end_flush();
?>