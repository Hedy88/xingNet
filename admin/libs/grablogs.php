<?php
function GrabLogs($logs, $conn) {
	global $logs;
	$query = $conn->prepare("SELECT * FROM site_logs");
	$query->execute();
	$logs = $query->get_result();
	return $logs;
}
?>