
<?php
session_start();
$id=$_SESSION["id"];

$post=$_GET["post"];

// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE posts SET post='$post' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: profile.php");
	die();
} else {
    echo "Error: me4 naf3a ";
}

$conn->close();
?>