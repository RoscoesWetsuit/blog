<?php
require_once(__DIR__ . "/database.php");
//preserves information so that we dont have to create this information,
session_start();

$path = "/blog/";

$host = "localhost";
$username = "root";
$database = "blog_db";
$password = "root";
if(!isset($_SESSION["connection"])) {
	//gonna help me query on the database
	$connection = new Database($host, $username, $password, $database);
	$_SESSION["connection"] = $connection;
}