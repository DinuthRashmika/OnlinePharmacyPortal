<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
   
    <link rel="stylesheet" href="drug1.css">
</head>

<body>

    <div class="container">
      
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">C_ID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Medicine</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $sql="Select * from `Customer_detail`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //$row=mysqli_fetch_assoc($result);
        //echo $row['name'] ;
        while ($row=mysqli_fetch_assoc($result))
        {
            $Customer_ID=$row['C_ID'];
            $FirstName=$row['FirstName'];
            $LastName=$row['LastName'];
            $Phone=$row['Phone'];
            $Address=$row['Address'];
            $Medicine=$row['Medicine'];

            echo'<tr>
            <th scope="row">'.$Customer_ID.'</th>
            <td>'.$FirstName.'</td>
            <td>'.$LastName.'</td>
            <td>'.$Phone.'</td>
            <td>'.$Address.'</td>
            <td>'.$Medicine.'</td>
            <td>
       
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