<?php 
session_start();
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';
include './addlog.php';

$post_username = $_POST['banuser'];
$sql = "UPDATE users SET isBanned=1 WHERE username = '$post_username'";
$result = mysqli_query($conn, $sql);

if(!$result) {
    header("Location: ../admin/index.php?error=User '" . $post_username . "' has not been banned");
    die();
} else {
    $user_log = $_SESSION['username'];
	$ip = $_SERVER['REMOTE_ADDR'];  
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
			$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}
    AddLog("<b>$user_log</b> has banned @$post_username", $ip, $conn);
    header("Location: ../users.php");

}
?>