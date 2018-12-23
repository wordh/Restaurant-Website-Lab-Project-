<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$table = "arabianfood";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $table);

	//check connection
	if(!$conn)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}

	echo "Connected Successfully!";
?>