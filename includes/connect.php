<?php
$host = 'localhost'; // Your database host (usually 'localhost')
$username = 'root'; // Your database username
$password = ''; // Your database password
$database = 'ek-contact_db'; // Your database name

// Create connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
 