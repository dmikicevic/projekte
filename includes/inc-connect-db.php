<?php
	$error = error_reporting(E_ALL);

	include '../config.php';

	$db_link = mysql_connect ($host_address, $username, $password);
 
	if ( $db_link )
	{
	    echo 'Verbindung erfolgreich: ';
	    echo $db_link;
	}
	else
	{
		$nachricht = "Error Datenbank Lern Projekt: ". 

		$error;

	    mail($admin_mail, 'Projekt Datenbank abgestürtzt!', $nachricht);

	    die('keine Verbindung möglich: ' . mysql_error());
	}
	mysql_close($db_link );
?>
