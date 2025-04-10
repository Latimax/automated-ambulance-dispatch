<?php
ob_start(); // Start output buffering

$page = 'manage_requests';

include 'header.php';
include 'navbar.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = $_POST['request_id'];
    $new_status = $_POST['status'];
    $new_ambulance_id = $_POST['ambulance_id'];

    // Start a transaction
    $pdo->beginTransaction();

    try {
        // Update request status and ambulance ID
        $stmt = $pdo->prepare('UPDATE requests SET status = ?, ambulance_id = ? WHERE id = ?');
        $stmt->execute([$new_status, $new_ambulance_id, $request_id]);

        // Update ambulance availability based on new status
        if ($new_status === 'Done') {
            $stmt = $pdo->prepare('UPDATE ambulances SET availability = TRUE WHERE id = ?');
            $stmt->execute([$new_ambulance_id]);
        } else {
            $stmt = $pdo->prepare('UPDATE ambulances SET availability = FALSE WHERE id = ?');
            $stmt->execute([$new_ambulance_id]);
        }

        // Commit the transaction
        $pdo->commit();
        $message = "Request updated successfully!";
    } catch (Exception $e) {
        // Rollback the transaction if something failed
        $pdo->rollBack();
        $message = "Failed: " . $e->getMessage();
    }
}
?>

<div class="container my-5">
    <h2 class="mb-4">Manage Requests</h2>
    <?php if ($message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <div class="row">
            <div class="col-md-4">
                <a href="users.php" class="btn btn-primary w-100 mb-3">Manage Users</a>
            </div>
            <div class="col-md-4">
                <a href="manage_ambulances.php" class="btn btn-primary w-100 mb-3">Manage Ambulances</a>
            </div>
            <div class="col-md-4">
                <a href="manage_requests.php" class="btn btn-success w-100 mb-3">Manage Requests</a>
            </div>
        </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Caller Name</th>
                    <th>Phone Number</th>
                    <th>Details</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>School Area</th>
                    <th>Ambulance ID</th>
                    <th>Created At</th>
                    <th>Action</th>
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
                    echo '<td>
                            <form method="post">
                                <input type="hidden" name="request_id" value="' . htmlspecialchars($row['id']) . '">
                                <select name="status" class="form-control px-2">
                                    <option value="Not assigned"' . ($row['status'] === 'Not assigned' ? ' selected' : '') . '>Not assigned</option>
                                    <option value="Assigned"' . ($row['status'] === 'Assigned' ? ' selected' : '') . '>Assigned</option>
                                    <option value="On hold"' . ($row['status'] === 'On hold' ? ' selected' : '') . '>On hold</option>
                                    <option value="Done"' . ($row['status'] === 'Done' ? ' selected' : '') . '>Done</option>
                                </select>
                          </td>';
                    echo '<td>' . htmlspecialchars($row['school_area_name']) . '</td>';
                    echo '<td>
                            <select name="ambulance_id" class="form-control">';
                    $ambulanceStmt = $pdo->query('SELECT id FROM ambulances');
                    while ($ambulance = $ambulanceStmt->fetch()) {
                        echo '<option value="' . htmlspecialchars($ambulance['id']) . '"' . ($row['ambulance_id'] == $ambulance['id'] ? ' selected' : '') . '>' . htmlspecialchars($ambulance['id']) . '</option>';
                    }
                    echo '</select>
                          </td>';
                    echo '<td>' . htmlspecialchars($row['created_at']) . '</td>';
                    echo '<td><button type="submit" class="btn btn-primary">Update</button></form></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>