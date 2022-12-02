<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add a new client</title>
    <style>
        body{
            background-color: rgba(26, 24, 24, 0.842);
            color: white;
        }
        .form-wraper{
           
            width: 730px;
            justify-content: center;

        }
        input,label{
            margin-left: 50%;

        }
        .btn-l{
            margin-left: 45%;
            
        }
        .btn-r{
            margin-left: 6px;
        }
        .calc{
            margin-top: 3rem;
            margin-left: 49%;
            
        }
        img{
            margin-left: 65%;
        }
        h2{
            margin-left: 60%;
            margin-top: 12px;
            color:white;
        }
        h4{
            margin-left: 50%;
            margin-top: 12px;
            color: white;
        }
        

    </style>
</head>
<body>
    <div class="container">

        <div class="form-wraper">
            <img src="../Assets/Images/ekas-logo 2.png" alt="logo"> <span><h2>Payslip Analysis</h2></span>
            
            <form action="#" method="POST" class="row g-3 my-3">

                    <div class="col-md-9">
                      <label class="form-label">Amount</label>
                      <input type="number" name="amount" class="form-control" placeholder="Loan Amount"  required autocomplete="off">
                    </div>
                    <div class="col-md-9">
                      <label  class="form-label">Rate</label>
                      <input type="number" name="lname" class="form-control" placeholder="Rate %"  required autocomplete="off">
                    </div> <br>
                    

                    <div class="col-9">
                      <label class="form-label">Months</label>
                      <input type="number" name="months" class="form-control" id="nrc" placeholder="Number of months to pay" required autocomplete="none">
                      <button class="btn btn-primary text-light calc col-md-12">Calculate</button>
                    </div> <br>

                   



            </form>
            <form action="" method="POST">
                    <h4> calculated Results</h4>
                    <div class="col-9">
                      <label class="form-label">Monthly-Repayment</label>
                      <input type="text" name="m-repay" class="form-control" id="r-adress" readonly>
                    </div> <br>
                    <div class="col-9">
                        <label class="form-label">Basic Pay</label>
                        <input type="text" name="b-pay" class="form-control" id="phone" autocomplete="off">
                      </div> <br>

                      <div class="col-9">
                        <label class="form-label">Housing Allowance</label>
                        <input type="text" name="h-allow" class="form-control" id="inputAddress" autocomplete="off">
                      </div> <br>

                      <div class="col-9">
                        <label class="form-label">Rural Hardship</label>
                        <input type="text" name="rural" class="form-control" id="inputAddress" readonly>
                      </div> <br>


                      <div class="col-9">
                        <label class="form-label">Any Other Allowance</label>
                        <input type="text" name="any-allow-1" class="form-control" id="inputAddress" autocomplete="off">
                      </div> <br>

                      <div class="col-9">
                        <label class="form-label">Any Other Allowance</label>
                        <input type="text" name="any-allow-2" class="form-control" id="inputAddress" autocomplete="off">
                      </div> <br>


                      <button name="submit" class="btn btn-block btn-success col-md-3 btn-l">Submit</button>  <a style="text-decoration:none" href="./admin-dashboard.php" class="text-light"><button type="button" class="btn btn-block btn-danger col-md-3 btn-r">Cancel</button></a> 

                      
                   

                </form>

            
        </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>