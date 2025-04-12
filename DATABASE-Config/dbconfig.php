<?php

// Establish a connection to the database
$servername = "localhost";
$username = "u890236982_servicehub";
$password = "Service-hub-018";
$dbname = "u890236982_servicehub";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>