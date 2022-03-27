<?php
include './config/config.php';
include './config/db_auth.php';
session_start();

if (isset($_POST['message'])) {
    date_default_timezone_set('UTC');
    $post = htmlspecialchars($_POST['message']);
    $username = htmlspecialchars($_SESSION['username']);
    $date = date('Y-m-d H:i:s');
    $id = rand(1, 100000);

    $sql2 = "INSERT INTO posts (poster, post, date_created, id) VALUES('$username', '$post', '$date', '$id')";
    $result = mysqli_query($conn,$sql2);
    if ($result) {
        header('Location: ../index.php?success=Post has been created successfully');
    } else {
        header('Location: ../index.php?error=Post has not been created successfully');
    }
}

?>