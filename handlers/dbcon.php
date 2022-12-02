<?php
// setting up connection variables
$servername = "sql7.freemysqlhosting.net";
$username = "sql7582323";
$password = "hhfpwT6Z6h";
$dbname = "sql7582323";
$port   = "3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection

/*
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

*/