<?php

include 'Ddbcon.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drug</title>
    <link rel="stylesheet" href="drug1.css">
</head>

<body>

    <!-- Head Part -->
    <header class="header">
        <div id="logo">

            <h4>HealthDoc<br>Pharmacy</h4>
        </div>

        <nav class="navbar">
            <a href="pharinterface.php" class="highlight">Home</a>
            <a href="odisplay.php">ORDERS</a>
            <a href="corder.php">CONFIRM ORDERS</a>
            <a href="ddisplay.php">DRUGS</a>

        </nav>

        <nav class="navbar">
            <a href="#" class="highlight">LOG OUT</a>
        </nav>
    </header> <!-- header end -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <button class="my-5"><a href="Drugs.php" class="text-light"> Add drugs</a></button>
        <br>
        <br>

        <table class="tablea">
            <thead>
                <tr>
                    <th style="width:5%;">did</th>
                    <th style="width:5%;">dname</th>
                    <th style="width:6%;">dbrand</th>
                    <th style="width:5%;">quantity</th>
                    <th style="width:5%;">price</th>
                    <th style="width:5%;">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

$sql="Select * from `medicine`";
$result=mysqli_query($con,$sql);
if($result){
   
    while($row=mysqli_fetch_assoc($result)){
        $did=$row['did'];
        $dname=$row['dname'];
        $dbrand=$row['dbrand'];
        $quantity=$row['quantity'];
        $price=$row['price'];
        echo'<tr>

        <td scope="row">'.$did.'</td>
        <td>'.$dname.'</td>
        <td>'.$dbrand.'</td>
        <td>'.$quantity.'</td>
        <td>'.$price.'</td>

        <td>
        <button class="btnbtn-primary"><a href="dupdate.php?updateid='.$did.'"class="text-light">update</a></button>
        <button class="btbtn-danger"><a href="ddelete.php?deleteid='.$did.'"class="text-light">delete</a></button>
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