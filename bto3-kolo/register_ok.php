
<?php
session_start();
$_SESSION["uname"]=$_GET["uname"];
// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_GET["uname"];
$pass=$_GET["upass"];
$email=$_GET["uemail"];
$sql = "INSERT INTO users(Name, Password, Email) VALUES ('$name','$pass','$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: newsFeed.php");
	die();
} else {
    echo "Error: me4 naf3a ";
}

$conn->close();
?>
