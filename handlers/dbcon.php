<?php
// setting up connection variables

$servername = "containers-us-west-142.railway.app";
$username = "root";
$password = "aABWbpqM6J7izTO16hVR";
$dbname = "railway";
$port   = "6508";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection

/*
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

*/
