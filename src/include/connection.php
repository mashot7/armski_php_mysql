<?php
$servername = '127.0.0.1';
$username = "root";
$password = '';
$database = 'z_armski';

// Create connection
$conn = mysqli_connect($servername, $username,'', $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>