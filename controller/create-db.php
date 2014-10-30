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
    //will be executed when we have a database that exists
	else {
		echo "Database already exists";
	}

	$query = $connection->("CREATE TABLE posts ("
		//the id is an interger
		. "id int(11) NOT NULL AUTO_INCREMENT, "
		//title of my post
		. "TITLE VARCHAR(255) NOT NULL,"
		//the text that will be in our post
		. "post text NOT NULL,"
		//the way tables are connected to eachother
		. "PRIMARY KEY (id)");
	    //NOTHING SHOULD BE NULL

$connection->close();