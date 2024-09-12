<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Dummy user login for simplicity (replace with database query)
$admin_username = 'admin';
$admin_password = 'password';

if ($username == $admin_username && $password == $admin_password) {
    $_SESSION['username'] = $username;
    header("Location: admin_dashboard.php");
} else {
    echo "Invalid login credentials.";
}
?>
