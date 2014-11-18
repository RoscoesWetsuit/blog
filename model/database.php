<?php
//we make an instance of a class to create an object
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $Database;
	//its public because we need it to be accessed wherever in any file
	//msqli needs a constuctor function, so now wee
	public function __construct($host, $usernamer, $password, $database) {
		$this->host= $host;
		$this->username = $usernme;
		$this->password = $password;
		$this->database = $database;
	}

	//opening a connection to the database
	public function openConnection() {

	}

	//closing a connection to the database
	public function closeConection() {


	}
	//creates a query
	public function query($string) {

	}
}