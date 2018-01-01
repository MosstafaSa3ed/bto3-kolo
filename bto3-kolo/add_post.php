<?php

session_start();
$uname=$_SESSION["uname"];
// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$post=$_GET["post"];

$sql = "INSERT INTO posts( post, uname) VALUES ('$post','$uname')";

if ($conn->query($sql) === TRUE) {
    header("Location: newsFeed.php");
	die();
} else {
    echo "Error: me4 naf3a ";
}

$conn->close();


?>