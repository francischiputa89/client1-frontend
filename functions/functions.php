<?php


//List of all functions for the system.

//Pagination function
function pagination()
{
      include "./conn.php";
     //Getting the url page number and puting rows in pages
     $limit = 4;
     $page = isset($_GET['page']) ? $_GET['page'] : 1;
     $start = ($page - 1) * $limit;

      //counting records into the database
      $query = "SELECT count(id) AS id FROM applications LIMIT $start, $limit";
      $count = mysqli_query($conn, $query);
      $appli_count = mysqli_fetch_assoc($count);
      $total = $appli_count[0]['id'];
      $pages = ceil($total / $limit);
      $next = $page + 1;
      $previous = $page - 1;
}