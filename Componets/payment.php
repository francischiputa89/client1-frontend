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
    <!--========cdns=====-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>All clients</title>
    <style>
        


    </style>
</head>
<body>
    <div class="container">
      <h3 class="my-5">All Clients </h3>
      <div class="container-fluid my-3">
        <a href="./admin-dashboard.php" style="text-decoration: none;">
        <button class="btn btn-block btn-dark text-light">Dashboard</button>
      </a>
      </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Loan_ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">NRC Number</th>
                <th scope="col">Loan</th>
                <th scope="col">Balance</th>
                <th scope="col">Loan Period</th>
               
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                
              <?php
                include "../handlers/dbcon.php";
                
                $sql = "SELECT * FROM loans WHERE loan_status = 'Active'";

                $result = mysqli_query($conn, $sql);
                
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $loan_id = $row['loan_id'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $nrc = $row['nrc'];
                      $r_address = $row['r_address'];
                      $phone = $row['phone'];
                      $email = $row['email'];
                      $sex = $row['sex'];
              
                      echo '
                              <tr>
                                  <th scope="row">'.$loan_id.'</th>
                                  <td>'.$fname.'</td>
                                  <td>'.$lname.'</td>
                                  <td>'.$nrc.'</td>
                                  <td>'.$r_address.'</td>
                                  <td>'.$phone.'</td>
                                  <td>'.$email.'</td>
                                  <td>'.$sex.'</td>
                                  <td> 
                                      <a class="mr-2" href="#"><i class="fa-light fa-eye"></i></a>
                                      <a class="mr-2" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                                      <a class="mr-2" href="#"><i class="fa-light fa-trash"></i></a>  
                                  </td>
                                  
                              </tr> ';
                   }
                }else {
                    echo "system fail".mysqli_error($conn);
                }
                



                ?>
                          
                     
                     
              </tr>
            </tbody>

            
          </table>
          
                <!--==============Pagenation========-->

              <nav  aria-label="...">
                  <ul class="pagination justify-content-center my-2 py-2">
                    <li class="page-item disabled">
                      <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
              </nav>
       
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>