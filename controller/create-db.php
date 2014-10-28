<?php
require_once(__DIR__ . "/../model/database.php");

$connection =new mysqli($host, $username, $password);


	if($connection->connect_error) {
	//checks whether or not if there was an error
	//connection to the database
	die("error: " . $connection->connect_error);
	
	}
	//selects the database i have in database.php
	$exists = $connection->select_db($database);
                           //this is a function, 
	                       //tries to access a database that exists on my mysqli server

	if(!$exists) {
		//a command.
		$query = $connection->query("CREATE DATABASE $database");
        //outputs message
		if($query) {
			echo "successfully created database" . $database;
		}
	}
	
	else {
	echo "success: " . $connection->host_info;
}
$connection->close();