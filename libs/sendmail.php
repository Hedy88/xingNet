<?php
include './config/config.php';
include './config/db_auth.php';
session_start();

if (isset($_POST['message'])) {
    date_default_timezone_set('UTC');
    $post = htmlspecialchars($_POST['message']);
    $username = htmlspecialchars($_SESSION['username']);
    $to_username = htmlspecialchars($_POST['to_username']);
    $date = date('Y-m-d H:i:s');

    $sql2 = "INSERT INTO inbox (from_username, to_username, msg, date_created) VALUES ('$username', '$to_username', '$post', '$date')";
    $result = mysqli_query($conn,$sql2);
    if ($result) {
        header('Location: ../index.php?success=Post has been created successfully');
    } else {
        header('Location: ../index.php?error=Post has not been created successfully');
    }
}

?>