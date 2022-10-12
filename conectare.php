<?php
$hostname = "localhost";
$username = "root";
$password = "adelinamocan";
$bd="cake";


// Create connection
$conexiune = new mysqli($hostname, $username, $password, $bd);

// Check connection
if ($conexiune->connect_error) {
  die("Connection failed: " . $conexiune->connect_error);
}


?>