<?php
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
    <link rel="stylesheet" href="../Assets/Css/nav.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title></title>
</head>
<body>
    <div class="nav-bar">

        <!--============Nva container and logo image========-->
        <div class="flex-nav">
            <img id="logo" src="../Assets/Images/ekas-logo 2.png" alt="ekas-logo">

            <!--==========Brand Name=========-->

            <h4> <span class="logo-color">E</span class="logo-color">KAS <span class="logo-color">B</span>USINESS <span class="logo-color">S</span>ERVICES</h4>

            <!--==========Search Bar=============-->
            
                <input id="search" type="text" placeholder="search" <span><img id="magnifying" src="../Assets/Images/search_FILL0_wght400_GRAD0_opsz48.svg"></span>
                
                

                <span> <img id="notification" src="../Assets/Images/notifications_FILL0_wght400_GRAD0_opsz48.svg"</span>

                <div class="profile">
                    <img id="profile" src="../Assets/Images/person_FILL0_wght400_GRAD0_opsz48.svg">
                    <span id="username"><?php echo $username;?></span>
            

                </div>
                


            

        </div>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>