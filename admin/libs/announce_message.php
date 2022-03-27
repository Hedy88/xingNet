<?php 
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

$announce_text = htmlspecialchars($_POST['message']);
$announce_bgcolor = htmlspecialchars($_POST['background_color']);
$announce_textcolor = htmlspecialchars($_POST['message_color']);

$query = $conn->prepare("UPDATE site_banner SET msg = ?, textcolor = ?, bannercolor = ?");
$query->bind_param("sss", $announce_text, $announce_textcolor, $announce_bgcolor); 
$query->execute();

header('Location: ../../announce_message.php');
?>