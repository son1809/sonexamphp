<?php
$servername = "localhost";
$username = "examphp";
$password = "password";
$dbname = "phonebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
