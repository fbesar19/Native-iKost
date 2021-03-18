<?php
	session_start();
	$username = $_POST['uname'];
	$pass = $_POST['psw'];
		$_SESSION['username'] = "$username";
		$_SESSION['password'] = "$pass";
?>

<meta http-equiv="refresh" content="1;url=log.php">
