<?php
	include  '../config.php';

	session_start();

	$user = $_POST['tbx_user'];
	$pass = $_POST['tbx_pass'];

	if ($user == "admin" && $pass == "ppmedien#2012")
	{
		$_SESSION['name'] = $user;
		$_SESSION['pass'] = $pass;

		header("Location: $BASE_PATH/admin/backend/admin.php?id=adminHome");
	}

	else{
		echo "Login Fehlgeschlagen";
	}
?>