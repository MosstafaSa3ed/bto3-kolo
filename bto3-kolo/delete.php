<?php
$id=$_GET["id"];
echo $id;
// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM posts WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: profile.php");
	die();
} else {
    echo "Error: me4 naf3a ";
}

$conn->close();
?>