<?php

include"../handlers/dbcon.php";

$sql = "SELECT COUNT(*) AS total FROM clients";
$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn, $sql)) {
    die('failed'.mysqli_error($conn));
}
while ($row = mysqli_fetch_assoc($result)) {
    $count = $row['total'];

    

}

 