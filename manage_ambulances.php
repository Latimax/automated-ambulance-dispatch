<?php
ob_start(); // Start output buffering

$page = 'manage_ambulances';

include 'header.php';
include 'navbar.php';


checkAuth();
checkRole($_SESSION['role_id']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ambulance_id = $_POST['ambulance_id'];
    $availability = $_POST['availability'];

    $stmt = $pdo->prepare('UPDATE ambulances SET availability = ? WHERE id = ?');
    $stmt->execute([$availability, $ambulance_id]);
}
?>

<div class="container p-4">
    <h2 class="mb-4">Manage Ambulances</h2>
    <div class="row">
            <div class="col-md-4">
                <a href="users.php" class="btn btn-primary w-100 mb-3">Manage Users</a>
            </div>
            <div class="col-md-4">
                <a href="manage_ambulances.php" class="btn btn-success w-100 mb-3">Manage Ambulances</a>
            </div>
            <div class="col-md-4">
                <a href="manage_requests.php" class="btn btn-primary w-100 mb-3">Manage Requests</a>
            </div>
        </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>School Area</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query('SELECT ambulances.id, ambulances.availability, school_areas.name AS school_area_name FROM ambulances INNER JOIN school_areas ON ambulances.school_area_id = school_areas.id ORDER BY ambulances.id');
                while ($row = $stmt->fetch()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['school_area_name']) . '</td>';
                    echo '<td>' . ($row['availability'] ? '<span class="badge bg-success">Available</span>' : '<span class="badge bg-danger">Not Available</span>') . '</td>';
                    echo '<td>
                        <form method="post" class="d-flex align-items-center">
                            <input type="hidden" name="ambulance_id" value="' . htmlspecialchars($row['id']) . '">
                            <select name="availability" class="form-control me-2">
                                <option value="1"' . ($row['availability'] ? ' selected' : '') . '>Available</option>
                                <option value="0"' . (!$row['availability'] ? ' selected' : '') . '>Not Available</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>