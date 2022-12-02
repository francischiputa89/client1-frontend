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
            margin-left: 49%;
            
        }
        .btn-r{
            margin-left: 1px;
        }
        img{
            margin-left: 65%;
        }
        h2{
            margin-left: 50%;
            margin-top: 12px;
            color: rgba(255, 68, 0, 0.925);
        }


    </style>
</head>
<body>
    <div class="container">

        <div class="form-wraper">
            <img src="../Assets/Images/ekas-logo 2.png" alt="logo"> <span><h2>Ekas Business Services</h2></span>
            
            <form action="../handlers/insert_clients.php" method="POST" class="row g-3 my-5">

                    <div class="col-md-9">
                      <label class="form-label">First Name</label>
                      <input type="text" name="fname" class="form-control" placeholder="e.g Kangwa" id="fname" required autocomplete="none">
                    </div>
                    <div class="col-md-9">
                      <label  class="form-label">Last Name</label>
                      <input type="text" name="lname" class="form-control" placeholder="e.g Chiputa" id="lname" required autocomplete="none">
                    </div> <br>
                    <div class="col-9">
                      <label class="form-label">NRC Number</label>
                      <input type="text" name="nrc" class="form-control" id="nrc" placeholder="National Registration Number" required autocomplete="none">
                    </div> <br>
                    <div class="col-9">
                      <label class="form-label">Residential Address</label>
                      <input type="text" name="r-address" class="form-control" id="r-adress" placeholder="Address" required autocomplete="none">
                    </div>
                    <div class="col-9">
                        <label class="form-label">phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required autocomplete="none">
                      </div> <br>

                      <div class="col-9">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="inputAddress" placeholder="e.g kangwa@mail.com" required autocomplete="none">
                      </div> <br>

                      <div class="col-9">
                        <label for="inputAddress" class="form-label">Sex</label>
                        <input type="text" name="sex" class="form-control" id="inputAddress" placeholder="Male / Female" required autocomplete="none">
                        <br>
                        <button name="submit" class="btn btn-block btn-success col-md-3 btn-l">Submit</button> <a style="text-decoration:none" href="./clients.php" class="text-light"><button type="button" class="btn btn-block btn-danger col-md-3 btn-r">Cancel</button></a>
                      </div> 

                        

                      
                   

                </form>

            
        </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>