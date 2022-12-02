<?php
    include"./nav-bar.php";
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
    <link rel="stylesheet" href="../Assets/Css/pannel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Settings</title>

    <style>
        #active{
        color: white;
        border-radius: 1%;
        border-bottom: solid rgba(255, 253, 253, 0.733);
        margin-left: 30px;
            }

    </style>
    
</head>
<body>
    <div class="main">
        <div class="container-fluid pannel">
            <a  style="text-decoration: none;" href="admin-dashboard.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/dashboard_FILL1_wght700_GRAD0_opsz48.svg" alt="dashboard"></span><h6>Dashboard</h6></div></a> 
            <a  style="text-decoration: none;" href="clients.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/groups_FILL1_wght700_GRAD0_opsz48.svg" alt="clients"></span><h6>Clients</h6></div></a> 
            <a  style="text-decoration: none;" href="loans.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/payments_FILL1_wght700_GRAD0_opsz48.svg" alt="loans"></span><h6>Loans</h6></div></a>
            <a  style="text-decoration: none;" href="add-user.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/person_add_FILL1_wght700_GRAD0_opsz48.svg" alt="add-user"></span><h6>Add User</h6></div></a> 
            <a  style="text-decoration: none;" href="office.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/apartment_FILL1_wght700_GRAD0_opsz48.svg" alt="office"></span><h6>Office</h6></div></a> 
            <a  style="text-decoration: none;" href="manage.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/manage_accounts_FILL1_wght700_GRAD0_opsz48.svg" alt="manage"></span><h6>Manage</h6></div></a> 
            <a   style="text-decoration: none;"href="reports.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/monitoring_FILL1_wght700_GRAD0_opsz48.svg" alt="reports"></span><h6>Reports</h6></div></a> 
            <a id="active" style="text-decoration: none;" href="settings.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/settings_FILL1_wght700_GRAD0_opsz48.svg" alt="settings"></span><h6>Settings</h6></div></a> 
            <a  style="text-decoration: none;" href="logout.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/logout_FILL1_wght700_GRAD0_opsz48.svg" alt="logout"></span><h6>Logout</h6></div></a>

        </div>
        <div class="grid">
            <div class="top">
                <a style="text-decoration: none;" href="./add-client-form.html">

                    <div class="cards">
                        <h1 class="titles">User Settings</h1>
                        <span> <img class="svg" src="../Assets/Images/manage_accounts_FILL1_wght700_GRAD0_opsz48.svg"> </span>

                    </div>

                </a>
                   

                   <a style="text-decoration: none;" href=""> 

                        <div class="cards">
                            <h1 class="titles">Account Settings</h1>
                            <span><img class="svg" src="../Assets/Images/settings_alert_FILL0_wght400_GRAD0_opsz48.svg" alt="loan-dues"></span>

                        </div>
                </a>
                    

            </div>


            <div class="bottom">
                    <a style="text-decoration: none;" href="">
                        <div class="cards">
                                <h1 class="titles">About</h1>
                                <span><img class="svg" src="../Assets/Images/group_work_FILL0_wght400_GRAD0_opsz48.svg"></span>

                        </div>
                    </a>

                    <a style="text-decoration: none;" href="">
                        <div class="cards">

                            <h1 class="titles">Help</h1>
                            <span><img class="svg" src="../Assets/Images/live_help_FILL0_wght400_GRAD0_opsz48.svg" alt="payroll"></span>

                        </div>

                    </a>
                    

            </div>

        </div>


    </div>
    <?php
         include"./footer.php";

     ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>