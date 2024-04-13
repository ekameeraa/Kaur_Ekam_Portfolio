<?php
$host = 'localhost'; // Your database host (usually 'localhost')
$username = 'u802235977_ekam'; // Your database username
$password = 'Sidhu295'; // Your database password
$database = 'u802235977_ekam_portfolio'; // Your database name

// Create connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
 