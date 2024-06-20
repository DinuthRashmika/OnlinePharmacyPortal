<?php


include'connectdinuth.php';


?>

<!DOCTYPE HTML>

<html>

<head>

    <meta charset="UTP-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>HealthDoc</title>

    <Style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-image: url("LOGO.jpg");
    }

    .fistbar {
        background-color: #AF7AC5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .logo {
        font-size: 75px;
        text-decoration: none;
        color: rgb(0, 0, 0);
        float: left;
    }

    .firstp {
        text-align: center;
        font-size: 40px;
        color: black;
        padding-top: 20px;
    }

    .secodnp {
        text-align: center;
        font-size: 40px;
        color: black;
        padding-top: 10px;
    }

    .tablea {
        width: 100%;
    }

    .tablea,
    tr,
    th,
    td {
        border: 1px solid black;
    }

    .orderdetails {
        background-color: beige;
        margin: 40px;
    }

    .tableas {
        width: 100%;
    }

    .tableas,
    tr,
    th,
    td {
        border: 1px solid black;
    }

    .medicinedetails {
        background-color: beige;
        margin: 40px;
    }

    .left {
        display: flex;
        gap: 1000px;
    }

    .bttes {
        margin-top: 25px;
        float: right;
        height: 30px;
        width: 70px;
        font-size: 15px;
        border-radius: 20px;
        border: 0px;
        background-color: #2ECC71;

    }

    .bttes a {
        text-decoration: none;

    }
    </Style>
</head>

<body>

    <section class="fistbar">
        <div class="left">
            <a href="assistantpharmscist.php" class="logo">HealthDoc</a>
            <div class="butes">
                <button class="bttes" style="background-color: #D2B4DE;"><a href="login.php">Log out</a></button>
            </div>
        </div>


    </section>



    <h1 class="firstp">Available Orders</h1>
    <section class="orderdetails">

        <table class="tablea">
            <tr>
                <th style="width:5%;">Order ID</th>
                <th style="width:5%;">Customer ID</th>
                <th style="width:15%;" ;>Customer Name</th>
                <th style="width:40%;">Address</th>
                <th style="width:10%;">Phone Number</th>
                <th style="width:10%;">Medicine</th>
                <th style="width:30%;" class="oper">Operations</th>
            </tr>
            <?php

$sql ="Select * from orderdetails";
$result=mysqli_query($con,$sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){
   $oid=$row['Order_ID'];
   $cid=$row['Customer_ID'];
   $cname=$row['Customer_Name'];
   $address=$row['Address'];
   $pnumber=$row['Phone_Number'];
   $medicine=$row['Medicine'];

   echo '<tr>
   <td>'.$oid.'</td>
   <td>'. $cid.'</td>
   <td>'.$cname.'</td>
   <td>'. $address.'</td>
   <td>'.$pnumber.'</td>
   <td>'.$medicine.'</td>
   <td >
   <button style="background-color:#2ECC71;background-color: #D2B4DE;border:0px;border-radius:20px;margin-left:10px;height:15px;width:75px;"><a style="color:black;text-decoration:none;" href="calculateprice.php?orderid='.$oid.'">Totle Prices</a></button>
   <button id="dele"  style="background-color:#2ECC71;background-color: #D2B4DE;border:0px;border-radius:20px;margin-left:10px;height:15px;width:75px;"><a style="color:black;text-decoration:none;" href="deletedinuth.php?deleteid='.$oid.'">Delete</a></button>
   </td>
   </tr>';
}
}



?>


        </table>


    </section>
    <h1 class="secodnp">Available Medicine</h1>
    <section class="medicinedetails">
        <table class="tableas">
            <tr>
                <th>Medication ID</th>
                <th>Medication Name</th>
                <th>Exapiry Date</th>
                <th>Stock Quantity</th>
                <th>Dose</th>
                <th>Price</th>
                <th>Operations</th>

            </tr>
            <?php

$sql ="Select * from medicine2";
$result=mysqli_query($con,$sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){
   $id=$row['M_ID'];
   $name=$row['M_Name'];
   $expirydate=$row['Expiry_date'];
   $stockquantity=$row['Stock_Quantity'];
   $dose=$row['Dose'];
   $price=$row['Price'];

   echo '<tr>
   <td>'.$id.'</td>
   <td>'.$name.'</td>
   <td>'.$expirydate.'</td>
   <td>'.$stockquantity.'</td>
   <td>'.$dose.'</td>
   <td>'.$price.'</td>
   <td>
   <button style="background-color:#2ECC71;background-color: #D2B4DE;border:0px;border-radius:20px;margin-left:10px;height:15px;width:75px;"><a style="color:black;text-decoration:none;" href="updatedinuth.php?updateqty='.$id.'">Update</a></button>
   </td>
   </tr>';
}
}



?>
        </table>


    </section>



    <script>
    document.getElementById("dele").onclick = function() {
        alert("Deleted Successfully");
    }
    </script>

</body>


</html>