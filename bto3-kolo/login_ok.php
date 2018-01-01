<?php
session_start();
$_SESSION["uname"]=$_GET["uname"];
$name=$_GET["uname"];
$pass=$_GET["pass"];
 
// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT Name FROM users WHERE Name='$name' AND Password='$pass'";
$log=$conn->query($sql);
$rows=mysqli_num_rows($log);

if ( $rows ==true ) {
	
    header("Location: newsFeed.php");
	die();
} else {
    echo "Error: me4 naf3a ";
}

$conn->close();
 
?>