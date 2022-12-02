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
      <h3 class="my-5">Users </h3>
      <div class="container-fluid my-3">
        <a href="./admin-dashboard.php" style="text-decoration: none;">
        <button class="btn btn-block btn-dark text-light">Dashboard</button>
      </a>
      </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#user ID</th>
                <th scope="col">Username</th>
                
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                
              <?php

                include "../handlers/dbcon.php";

                //limiting the number of rows from the database
                $limit = 10;

                //Getting the url page number and puting rows in pages
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                //Selecting all all from the user
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                //counting records into the database
                $query = "SELECT count(id) AS id FROM applications LIMIT $start, $limit";
                $count = mysqli_query($conn, $query);
                $appli_count = mysqli_fetch_assoc($count);
                $total = $appli_count[0]['id'];
                $pages = ceil($total / $limit);
                $next = $page + 1;
                $previous = $page - 1;
                
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $username = $row['username'];
                      
              
                      echo '
                              <tr>
                                  <th scope="row">'.$id.'</th>
                                  <td>'.$username.'</td>
                                  <td>
                                    <a href=""><button class="btn btn-success">Edit</button></a>
                                    <a href=""><button class="btn btn-danger">Delete</button></a>
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
          
                <!--Pagination-->
          <nav  aria-label="...">
                  <ul class="pagination justify-content-center my-2 py-2">
                  <li class="page-item" aria-current="page">
                    <a class="page-link" href="all_users.php?page=<?=$previous;?>">Previous</a>
                    </li>
                    <?php for($i = 1;$i <= $page;$i++):?>
                    <li class="page-item" aria-current="page">
                      <a class="page-link" href="applications.php?page=<?=$i;?>"> <?= $i;?> </a>
                    </li>
                    <?php endfor;?>
                  
                      <a class="page-link" href="all_users.php?page=<?=$next;?>">Next</a>
                    </li>
                  </ul>
              </nav>
       
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


