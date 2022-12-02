<?php
include "./dbcon.php";

if (isset($_POST['submit'])) {
    $client_id = $_POST['client-id'];
    $loan_type = $_POST['loan-type'];
    $loan_amount = $_POST['loan-amount'];
    $total_amount = $_POST['total-amount'];
    $balance = $_POST['total-amount'];
    $start_day = $_POST['start-date'];
    $end_date = $_POST['end-date'];
    $loan_status = $_POST['loan-status'];
    $monthly_payment = $_POST['monthly-payment'];
    


    $sql = "INSERT INTO loans (client_id,loan_type,loan_amount,total_amount,balance,start_day,end_date,loan_status,monthly_payment)
     VALUES ('$client_id','$loan_type','$loan_amount', '$total_amount', '$balance', '$start_day', '$end_date', '$loan_status', '$monthly_payment')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "sucess";

    }
    else {
        echo "system fail".mysqli_error($conn);
    }


}







?>