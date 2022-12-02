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
    $fname = $_POST['fnamae'];
    $lname = $_POST['lname'];
    $nrc = $_POST['nrc'];
    $r_address = $_POST['r-address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];


    $sql = "INSERT INTO clients (fname,lname,nrc,r_address,phone,email,sex	
    ) VALUES ('$fname','$lname','$nrc', '$r_address', '$phone', '$email', '$sex')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "sucess";

    }
    else{
        echo "system fail".mysqli_error($conn);
    }


}







?>