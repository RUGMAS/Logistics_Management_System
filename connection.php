<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "logdb";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn) {
 
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>