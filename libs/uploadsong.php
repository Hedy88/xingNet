<?php
session_start();
include './config/config.php';
include './config/db_auth.php';

$filedir = $_SERVER['DOCUMENT_ROOT'] . '/songs/';
$username = $_SESSION['username'];

if (isset($_POST['submit']))
{
	$filename = $_FILES["songupload"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["songupload"]["size"];
	$allowed_file_types = array('.mp3');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 524288000))
	{	
		// Rename file
		$newfilename = md5($file_basename) . $file_ext;
		if (file_exists("upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["songupload"]["tmp_name"], $filedir . $newfilename);
            $sql = "UPDATE profiles SET song  = '$newfilename' WHERE username = '$username'";
            mysqli_query($conn, $sql);
			header("Location: ../profile_editor.php");	
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 524288000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}

?>