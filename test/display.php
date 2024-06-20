<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seach data and read data</title>
    <style>
    body {
        background-color: whitesmoke;
    }

    input {
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 05 px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;
    }
    </style>
</head>

<body>
    <center>
        <form action="" method="POST" style="background-color:lightblue">
            <input type="text" name="id" placeholder="Enter customer ID for search" /></br>
            <input type="submit" name="search" value="Search Data" />
        </form>


        <?php
if(isset(($_POST['search'])))
{
    $customerid = $_POST['id'];

    $query = "SELECT * from customer_reg where id='$customerid'";
    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>

        <form action="" method="POST">
            <input type="text" name="id" value="<?php echo $row['id'] ?>" readonly /><br>
            <input type="text" name="customername" value="<?php echo $row['customername'] ?>" /><br>
            <input type="text" name="contactno" value="<?php echo $row['contactno'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
        </form>

        <?php
        }

}
?>
    </center>


</body>

</html>