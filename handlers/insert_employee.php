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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nrc = $_POST['nrc'];
    $r_address = $_POST['r-address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $dept_id = $_POST['dept-id'];


    $sql = "INSERT INTO employee (fname,lname,nrc,r_address,phone,email,dept_id)
     VALUES ('$fname','$lname','$nrc', '$r_address', '$phone', '$email', 'designation', '$dept_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "sucess";

    }
    else{
        echo "system fail".mysqli_error($conn);
    }


}
