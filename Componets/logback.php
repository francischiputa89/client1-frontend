<?php
// Initialize the session
session_start();

// Unset all of the session variables


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Loged Out</title>
    <style>
        .container-fluid{
            display: flex;
            flex-direction: row;
        }
        .brand{
            margin-top: 50px;
            margin-left: 30px;
        }
        #hero{
            height:200px;
            width: 200px;
            margin-left: 40%;
        }
        .log{
            margin-left: 40%;
        }
    </style>
</head>
    <body>
            <div class="container">
                <div class="container-fluid my-5">
                    <img src="../Assets/Images/ekas-logo 2.png" alt="logo">
                    <div class="brand"><h2>Ekas Business Services</h2></div>
                </div>

                <div class="container">
                <img id="hero" src="../Assets/Images/logout-ico.jpg" alt="logo">
                <div class="log my-3">
                    <span><h4>You Have Loged out</h4></span>
                    <a style="text-decoration: none;" href="../handlers/login.php"><button class="btn btn-primary">Log Back In</button></a>

                </div>
               

                </div>

            </div>
    






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
