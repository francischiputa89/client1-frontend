<?php

session_start();
     
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    include "../queries/count_client.php";
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
    <title>dashboard</title>
</head>
<body>
    <div class="main">
        <div class="container-fluid pannel">
            <a id="dashboard-active" href="admin-dashboard.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/dashboard_FILL1_wght700_GRAD0_opsz48.svg" alt="dashboard"></span><h6>Dashboard</h6></div></a> 
            <a href="clients.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/groups_FILL1_wght700_GRAD0_opsz48.svg" alt="clients"></span><h6>Clients</h6></div></a> 
            <a href="loans.php"><div class="options"> <span><img class="options-icons" src="../Assets/Images/payments_FILL1_wght700_GRAD0_opsz48.svg" alt="loans"></span><h6>Loans</h6></div></a>
            <a href="add-user.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/person_add_FILL1_wght700_GRAD0_opsz48.svg" alt="add-user"></span><h6>Add User</h6></div></a> 
            <a href="office.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/apartment_FILL1_wght700_GRAD0_opsz48.svg" alt="office"></span><h6>Office</h6></div></a> 
            <a href="manage.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/manage_accounts_FILL1_wght700_GRAD0_opsz48.svg" alt="manage"></span><h6>Manage</h6></div></a> 
            <a href="reports.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/monitoring_FILL1_wght700_GRAD0_opsz48.svg" alt="reports"></span><h6>Reports</h6></div></a> 
            <a href="settings.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/settings_FILL1_wght700_GRAD0_opsz48.svg" alt="settings"></span><h6>Settings</h6></div></a> 
            <a href="logout.php"><div  class="options"> <span><img class="options-icons" src="../Assets/Images/logout_FILL1_wght700_GRAD0_opsz48.svg" alt="logout"></span><h6>Logout</h6></div></a>

        </div>
        <div class="grid">
            <div class="top">
                    <a href="./all_clients.php">
                        <div class="cards">
                            <h1 class="titles"><?php echo $count;?> Clients</h1>
                            <span> <img class="svg" src="../Assets/Images/groups_FILL1_wght700_GRAD0_opsz48.svg" alt="all-clients"> </span>

                        </div>
                    </a>

                    <div class="cards">
                        <h1 class="titles">Loan Dues</h1>
                        <span><img class="svg" src="../Assets/Images/calendar_month_FILL1_wght700_GRAD0_opsz48.svg" alt="loan-dues"></span>

                    </div>
                    

            </div>


            <div class="bottom">
                    <a style="text-decoration: none;" href="./calcu_form.php">
                        <div class="cards">
                            <h1 class="titles">Loan Calculator</h1>
                            <span><img class="svg" src="../Assets/Images/table_view_FILL1_wght700_GRAD0_opsz48.svg" alt="loan-dues"></span>

                        </div>

                    </a>

                   <a style="text-decoration: none;" href="./paysli_analysis.php">

                        <div class="cards">
                            <h1 class="titles">Payslip Analysis</h1>
                            <span><img class="svg" src="../Assets/Images/payments_FILL1_wght700_GRAD0_opsz48.svg" alt="loan-dues"></span>

                        </div>
                   </a>
                    

            </div>

            
            


        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>