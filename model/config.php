<?php
require_once(__DIR__ . "/database.php");
$path = "/blog/";

$host = "localhost";
$username = "root";
$database = "blog_db";
$password = "root";
//gonna help me query on the database
$connection = new Database($host, $username, $password, $database);