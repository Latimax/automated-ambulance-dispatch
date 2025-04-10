<?php
ob_start(); // Start output buffering

$page = 'manage_ambulances';

include 'header.php';
include 'navbar.php';

checkAuth();
checkRole($_SESSION['role_id']);

$user_id = $_SESSION['user_id'];
$role_id = $_SESSION['role_id'];

header('Location: manage_ambulances.php');
?>

<div class="container p-4">
    <?php if ($role_id == 1): ?>
        <h3>Welcome Admin!</h3>
        <div class="row">
            <div class="col-md-4">
                <a href="users.php" class="btn btn-primary w-100 mb-3">Manage Users</a>
            </div>
            <div class="col-md-4">
                <a href="manage_ambulances.php" class="btn btn-primary w-100 mb-3">Manage Ambulances</a>
            </div>
            <div class="col-md-4">
                <a href="manage_requests.php" class="btn btn-primary w-100 mb-3">Manage Requests</a>
            </div>
        </div>
    <?php elseif ($role_id == 2): ?>
        <h3>Welcome Dispatcher</h3>
        <div class="alert alert-info">You have 5 pending requests.</div>
        <a href="dispatch_tools.php" class="btn btn-secondary w-100 mb-3">Access Dispatch Tools</a>
    <?php elseif ($role_id == 3): ?>
        <h3>Welcome Caller</h3>
        <a href="new_request.php" class="btn btn-success w-100 mb-3">Place New Request</a>
        <a href="request_history.php" class="btn btn-secondary w-100 mb-3">View Request History</a>
    <?php elseif ($role_id == 4): ?>
        <h3>Welcome Ambulance</h3>
        <div class="alert alert-info">You have 2 assigned requests.</div>
        <a href="update_status.php" class="btn btn-secondary w-100 mb-3">Update Status</a>
    <?php endif; ?>
</div>

<?php
include 'footer.php';
?>