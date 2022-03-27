<?php
session_start();
include './config/config.php';
include './config/db_auth.php';

$username = $_SESSION['username'];
$post_css = htmlspecialchars($_POST['css']);
$sql = "UPDATE profiles SET custom_css = '$post_css' WHERE username = '$username'"; 
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: ../profile_editor.php?success=Profile Updated');
} else {
    header('Location: ../profile_editor.php?error=Profile not updated');
}

?>