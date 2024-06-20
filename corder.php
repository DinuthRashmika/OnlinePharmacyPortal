<?php
include 'connect.php';


if(isset($_POST['submit']))
{
    $Customer_iD=$_POST['Customer_ID'];
    $Customer_name=$_POST['Customer_Name'];
    $Addres=$_POST['Address'];
    $Phone_number=$_POST['Phone_Number'];
    $Medicinee=$_POST['Medicine'];


    $sql="insert into `orderdetails`(Order_ID,Customer_ID,Customer_Name,Address,Phone_Number,Medicine)
    values('','$Customer_iD','$Customer_name','$Addres','$Phone_number','$Medicinee')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
       header('location:odisplay.php');
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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="drug1.css">
</head>

<body>



    <div class="container">
        <p>

        <h2>Confirm Orders</h2>

        <form method="post">

            <div class="mb-3">
                <label>Customer ID</label>
                <input type="text" class="form-control" placeholder="Enter customer id" name="Customer_ID"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" placeholder="Enter customer name" name="Customer_Name"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Customer Address</label>

                <textarea class="form-control" placeholder=" Enter customer address" name=" Address" autocomplete="off"
                    id="floatingTextarea2" style="height: 100px"></textarea>
                <!-- <label for="floatingTextarea2">Order drugs</label> -->

                <!-- <input type="text" class="form-control" 
    placeholder="Enter customer address"
    name="Address"autocomplete="off">  -->
            </div>
            <div class="mb-3">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter contact number" name="Phone_Number"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder=" Enter order drugs" name="Medicine" autocomplete="off"
                    id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Order drugs</label>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


</body>

</html>