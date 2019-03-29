<?php

$servername = 'localhost';
$username = "root";
$password = '';
$database = 'z_armski';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Error");
}
