<?php

	$user = $_SESSION['name'];
	$pass = $_SESSION['pass'];

	if ($user == "admin" && $pass == "ppmedien#2012")
	{
		
	}

	else{
		header("Location: $BASE_PATH");
	}
?>