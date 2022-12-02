<?php
include "./dbcon.php";

$sql = "SELECT * FROM clients";

$result = mysqli_query($conn, $sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $client_id = $row['client_id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $nrc = $row['nrc'];
        $r_address = $row['r_address'];
        $phone = $row['phone'];
        $email = $row['email'];
        $sex = $row['sex'];

        echo '
                <tr>
                    <th scope="row">'.$client_id.'</th>
                    <td>'.$fname.'</td>
                    <td>'.$lname.'</td>
                    <td>'.$nrc.'</td>
                    <td>'.$r_address.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                    <td>'.$sex.'</td>
                    
                </tr>
                    
                    
                    '; 
   }
}else{
    echo "system fail".mysqli_error();
}
