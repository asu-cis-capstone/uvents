<?php

	//local-connect.php
	
	// MySQL connection variables for LOCAL machine
	$host	= 'localhost';
	$user	= 'root';
	$pw		= '';
	$db		= 'uvents';

	//Connect to the MySQL Server
	$dbc	= mysqli_connect($host, $user, $pw, $db) or die('Unable to connect (LOCAL)');
?>