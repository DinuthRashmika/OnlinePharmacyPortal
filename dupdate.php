<?php
include 'Ddbcon.php';
$did=$_GET['updateid'];
$sql="select * from  `medicine` where did=$did";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$did=$row['did'];
$dname=$row['dname'];
$dbrand=$row['dbrand'];
$quantity=$row['quantity'];
$price=$row['price'];


if(isset($_POST['submit']))
{
    $dname=$_POST['dname'];
    $dbrand=$_POST['dbrand'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];


    $sql="update `medicine` set did=$did,dname='$dname',dbrand='$dbrand',quantity='$quantity',price='$price'where did=$did";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data updated successfully";
       header('location:ddisplay.php');
    }
    else{

        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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




    <center>
        <div class="container">
            <p>

            <h2>Medical Form</h2>




            <form method="post">

                <div class="mb-3">
                    <label>Drug Dname</label>
                    <input type="text" class="form-control" placeholder="Enter drug name" name="dname"
                        autocomplete="off" value=<?php
    echo $dname;?>>
                </div>
                <div class="mb-3">
                    <label>Drug Brand</label>
                    <input type="text" class="form-control" placeholder="Enter Drug brand" name="dbrand"
                        autocomplete="off" value=<?php
    echo $dbrand;?>>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter the quantity" name="quantity"
                        autocomplete="off" value=<?php
    echo $quantity;?>>
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter the price" name="price"
                        autocomplete="off" value=<?php
    echo $price;?>>
                </div>


                <button id="charaka" type="submit" class="btn btn-primary" name="submit">update</button>
            </form>

            .
            </p>
        </div>
    </center>


    <script>
    document.getElementById("charaka").onclick = function() {
        alert("Updated Successfully");

    }
    </script>

</body>

</html>