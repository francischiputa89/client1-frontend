<?php

include "./dbcon.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if(isset($_POST['submit'])){
    $department = $_POST['department'];
    

    $sql = "INSERT INTO department (department)VALUES ('$department')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../Componets/all_depatments.php");

    }
    else{
        echo "system fail".mysqli_error($conn);
    }


}
