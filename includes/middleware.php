<?php
session_start();
function checkAuth() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
}

function checkRole($role_id) {
    if ($_SESSION['role_id'] != $role_id) {
        echo "Access denied!";
        exit();
    }
}
