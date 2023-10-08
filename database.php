<?php
//database
	$serverName='localhost:3307';
	$userName='root';
	$password='admin';
	$databaseName='bhasa_kosh';
	$con = mysqli_connect($serverName,$userName,$password , $databaseName);
	if(!$con)
		die("ERROR: Couldn't connect to database");

?>