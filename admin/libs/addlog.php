<?php
function AddLog($log_note, $ip, $conn) {
	$query = $conn->prepare("INSERT INTO site_logs (log_note, ip) VALUES (?,?)");
	$query->bind_param("ss", $log_note, $ip); 
	$query->execute();
	return true;
}
?>