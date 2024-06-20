<?php
include 'cconnect.php';
if(isset($_GET['deleteid'])){
    $Order_ID=$_GET['deleteid'];

    $sql="delete from `confirmorder` where Order_ID=$Order_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:cdisplay.php');
    }else{
        die(mysqli_error($con));
    }
}
?>