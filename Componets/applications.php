<?php

    session_start();
     
    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
    <title>Collateral clients</title>
    <style>


    </style>
</head>
<body>
    <div class="table-responsive-sm overflow-y: hidden">

    <h2 class="my-5 ml-4 pl-4"> Collateral Based Online Applications</h2>

    <div class="container-fluid">
      <a class="text-light" style="text-decoration: none;" href="./loans.php"><button class="btn btn-block btn-dark text-light my-3">Dashboard</button></a>
    </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Collateral</th>
                <th scope="col">Full Names</th>
                <th scope="col">Phone</th>
                <th scope="col">Alternative Phone</th>
                <th scope="col">City</th>
                <th scope="col">Loan Amount</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Application Date/Time</th>
               
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

                $sql = "SELECT * FROM applications LIMIT $start, $limit";
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
                        $collateral = $row['collateral'];
                        $fullname = $row['fullname'];
                        $phone = $row['phone'];
                        $alt_phone = $row['alt_phone'];
                        $city = $row['city'];
                        $loan_amount = $row['loan_amount'];
                        $total_amount = $row['total_amount'];
                        $applicatio_date = $row['applicatio_date'];
                       
                
                        echo '
                                <tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$collateral.'</td>
                                    <td>'.$fullname.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$alt_phone.'</td>
                                    <td>'.$city.'</td>
                                    <td>'.$loan_amount.'</td>
                                    <td>'.$total_amount.'</td>
                                    <td>'.$applicatio_date.'</td>
                                    <td><button class="btn btn-danger text-light">Delete </button> </td>
                                    
                                    
                                </tr>
                                    
                                    
                                    '; 
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
                    <a class="page-link" href="applications.php?page=<?=$previous;?>">Previous</a>
                    </li>
                    <?php for($i = 1;$i <= $page;$i++):?>
                    <li class="page-item" aria-current="page">
                      <a class="page-link" href="applications.php?page=<?=$i;?>"> <?= $i;?> </a>
                    </li>
                    <?php endfor;?>
                  
                      <a class="page-link" href="applications.php?page=<?=$next;?>">Next</a>
                    </li>
                  </ul>
              </nav>

     

          

       
    </div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>  
<script>
$(function(){
$("#pagination-demo").twbsPagination({
totalPages:16,
visiblePages:2,
next:"Next",
prev:"Prev",
onPageClick:function(event,page){

//fetch content and render here

$("#page-content").text("Page?+page)+?contenthere");
}
});
});
</script>
</body>
</html>