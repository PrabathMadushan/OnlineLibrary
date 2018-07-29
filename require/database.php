<?php

$servername = "localhost";
$name = "root";
$password = "";
$port = "3306";
$database = "onlinelibrary";
// Create connection
$conn = mysqli_connect($servername, $name, $password, $database, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



