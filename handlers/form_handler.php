<?php

include "./dbcon.php";

//Get the inputs variables

if (isset($_POST['submit'])) {
$collateral = $_POST['collateral'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$alt_phone = $_POST['alt-phone'];
$city = $_POST['city'];
$loan_amount = $_POST['amount'];
$total_amount = $_POST['total-amount'];

//sanitzing the input filds

function sanitaze($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //Inserting data into the database

$sql = "INSERT INTO applications(collateral,fullname,phone,alt_phone,city,loan_amount,total_amount)
        VALUES('$collateral', '$fullname', '$phone', '$alt_phone', '$city' ,'$loan_amount', '$total_amount')";

//Excuting the query

$result = mysqli_query($conn, $sql);

//Checking if the query did run

if ($result) {

    //Redirecting to the sucessfully  applied page

    header("Location: ../success.html");

}else {
    echo "Failed to apply".mysqli_error($conn);
}


}

