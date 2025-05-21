<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Default username for local server
$password = "";     // Default password (leave blank for XAMPP/WAMP)
$database = "blood_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>