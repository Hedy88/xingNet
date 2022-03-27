<?php
session_start();
include './config/config.php';
include './config/db_auth.php';

$username = $_SESSION['username'];
$post_status = htmlspecialchars($_POST['changestatus']);
$sql = "UPDATE profiles SET status = '$post_status' WHERE username = '$username'"; 
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: ../profile_editor.php?success=Profile Updated');
} else {
    header('Location: ../profile_editor.php?error=Profile not updated');
}

?>