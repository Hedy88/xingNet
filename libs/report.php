<?php 
include './config/config.php';
include './config/db_auth.php';
session_start();

$username = $_SESSION['username'];
$post_reportuser = htmlspecialchars($_POST['user']);
$post_reportreason = htmlspecialchars($_POST['reason']);
$post_reportdesc = htmlspecialchars($_POST['description']);

$sql = "INSERT INTO reports (report_by, report_to, report_reason, report_desc) VALUES ('$username', '$post_reportuser', '$post_reportreason', '$post_reportdesc')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: ../index.php');
} 
?>