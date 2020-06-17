<?php
//SMYSQLi Connection Establishing (dbConnect.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shareameal"; // Database Name
// Create connection
$db = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>