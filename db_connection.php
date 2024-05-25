<!-- db_connection.php -->
<?php
$servername = "localhost";
$username = "examphp"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "phonebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
