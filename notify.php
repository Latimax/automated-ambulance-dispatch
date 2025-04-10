
<?php
ob_start(); // Start output buffering

$page = 'requests';

include 'header.php';
include 'navbar.php';

$message = '';
if(array_key_exists('message', $_GET)){
    $message = $_GET['message'];
} else {
    header('location: index.php');
    exit;
}

?>

<div class="container my-5">
   <?php if ($message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Back Home Button -->
    <a href="index.php" class="btn btn-primary mt-3">Back Home</a>

</div>

<?php include 'footer.php';
ob_end_flush(); ?>
