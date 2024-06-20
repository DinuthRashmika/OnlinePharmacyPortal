<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $orderid=$_GET['deleteid'];

    $sql="delete from `finalordetails` where orderid=$orderid";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:deliver.php');
    }else{
        die(mysqli_error($con));
    }
}
?>