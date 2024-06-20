<?php
include 'Ddbcon.php';
if(isset($_POST['submit']))
{
    $dname=$_POST['dname'];
    $dbrand=$_POST['dbrand'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];


    $sql="insert into `medicine` (dname,dbrand,quantity,price)
    values('$dname','$dbrand','$quantity','$price')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted successfully";
        header('location:ddisplay.php');
    }
    else{

        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html>

<head>
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
            <a href="home.php" class="highlight">LOG OUT</a>
        </nav>
    </header> <!-- header end -->

    <br>
    <br>
    <br>
    <br>

    <center>
        <div.a class="form">
            <p>

            <h2>Medical Form</h2>




            <form method="post">

                <div class="mb-3">
                    <label>Drug Dname</label>
                    <input type="text" class="form-control" placeholder="Enter drug name" name="dname"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Drug Brand</label>
                    <input type="text" class="form-control" placeholder="Enter Drug brand" name="dbrand"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter the quantity" name="quantity"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter the price" name="price"
                        autocomplete="off">
                </div>


                <button id="rasa" type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

            </div>
    </center>
    <script>
    document.getElementById("rasa").onclick = function() {
        alert("Submited Successfully");

    }
    </script>
</body>

</html>