<?php
// setting up connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Ekas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

/*

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

*/