<?php
ob_start(); // Start output buffering

$page = 'home';

include 'header.php';
include 'navbar.php';

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
}

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role_id'] = $user['role_id'];
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $error_message = "Invalid credentials!";
    }
}
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <div class="w-50 p-4 bg-light rounded shadow">
        <h2 class="text-center mb-4">Login</h2>
        <?php if ($error_message): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="login.php">
            <div class="form-group mb-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group mb-4">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
<?php
include 'footer.php';
 ob_end_flush();
?>