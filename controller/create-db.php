<?php
require_once(__DIR__ . "/../model/config.php");

	$query = $connection->query("CREATE TABLE posts ("
		//the id is an interger
		. "id int(11) NOT NULL AUTO_INCREMENT, "
		//title of my post
		. "TITLE VARCHAR(255) NOT NULL,"
		//the text that will be in our post
		. "post text NOT NULL,"
		//the way tables are connected to eachother
		. "PRIMARY KEY (id) )");
	    //NOTHING SHOULD BE NULL
    
    //says if our table was succcessfully created or not
	if($query) {
		//what it says if it was successfull
		echo "successfully created table: posts";
	}
	else {
		echo "<p>$connection->error</p>";
	}