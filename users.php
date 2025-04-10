<?php
ob_start(); // Start output buffering

$page = 'users';

include 'header.php';
include 'navbar.php';

checkAuth();
checkRole($_SESSION['role_id']);

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ambulance_id = $_POST['ambulance_id'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];

    try {
        $stmt = $pdo->prepare('INSERT INTO dispatchers (ambulance_id, name, phone_number) VALUES (?, ?, ?)');
        $stmt->execute([$ambulance_id, $name, $phone_number]);
        $message = "Dispatcher added successfully!";
    } catch (Exception $e) {
        $message = "Failed to add dispatcher: " . $e->getMessage();
    }
}
?>

<div class="container my-5">
    <h2 class="mb-4">Add New Dispatcher</h2>
    <?php if ($message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <div class="row">
            <div class="col-md-4">
                <a href="users.php" class="btn btn-success w-100 mb-3">Manage Users</a>
            </div>
            <div class="col-md-4">
                <a href="manage_ambulances.php" class="btn btn-primary w-100 mb-3">Manage Ambulances</a>
            </div>
            <div class="col-md-4">
                <a href="manage_requests.php" class="btn btn-primary w-100 mb-3">Manage Requests</a>
            </div>
        </div>

    <form method="post" class="bg-light p-4 rounded shadow">
        <div class="form-group mb-3">
            <label for="ambulance_id">Ambulance</label>
            <select class="form-control" id="ambulance_id" name="ambulance_id" required style="color: black;">
                <?php
                $stmt = $pdo->query('SELECT id, plate_number FROM ambulances ORDER BY plate_number');
                while ($row = $stmt->fetch()) {
                    echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['plate_number']) . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-4">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Add Dispatcher</button>
    </form>

    <h2 class="mt-5">Dispatchers List</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Ambulance</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query('SELECT dispatchers.id, ambulances.plate_number AS plate_number, dispatchers.name, dispatchers.phone_number FROM dispatchers INNER JOIN ambulances ON dispatchers.ambulance_id = ambulances.id ORDER BY dispatchers.id');
                while ($row = $stmt->fetch()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['plate_number']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['phone_number']) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include 'footer.php';
ob_end_flush();
?>