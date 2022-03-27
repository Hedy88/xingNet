<?php
session_start();
require_once './config/config.php';
include './config/db_auth.php';

$post_username = trim(htmlspecialchars($_POST["username"]));
$post_password = trim(htmlspecialchars($_POST["password"]));
$date = date('Y-m-d H:i:s');

$sql = "SELECT * FROM users WHERE username='".mysqli_real_escape_string($conn, $post_username)."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); 
    if (password_verify($post_password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php?error=Invalid password');
    }
} 