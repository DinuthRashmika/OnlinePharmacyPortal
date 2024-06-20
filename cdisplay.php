<?php
include 'connect.php';?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>







    <div class="container">
        <button class="my-5"><a href="corder.php" class="text-light"> create confirm order</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order_ID</th>
                    <th scope="col">Customer_ID</th>
                    <th scope="col">Customer_Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone_Number</th>
                    <th scope="col">Medicine</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

$sql="Select * from `confirmorder`";
$result=mysqli_query($con,$sql);
if($result){
   
    while($row=mysqli_fetch_assoc($result)){
        $Order_ID=$row['Order_ID'];
        $Customer_ID=$row['Customer_ID'];
        $Customer_Name=$row['Customer_Name'];
        $Address=$row['Address'];
        $Phone_Number=$row['Phone_Number'];
        $Medicine=$row['Medicine'];
        echo'<tr>

        <td scope="row">'.$Order_ID.'</td>
        <td>'.$Customer_ID.'</td>
        <td>'.$Customer_Name.'</td>
        <td>'.$Address.'</td>
        <td>'.$Phone_Number.'</td>
        <td>'.$Medicine.'</td>
        


        <td>
        
        <button class="btn btn-danger"><a href="cdelete.php?deleteid='.$Order_ID.'"class="text-light">delete</a></button>
        </td>
      </tr>';
    }
}

?>

            </tbody>
        </table>


    </div>
</body>

</html>