<?php
session_start();
require 'Ddbcon.php';

if(isset($_post['Submit']))
{
    // $medID = mysqli_real_escape_string($con,$_POST['medID']);
    $medName = mysqli_real_escape_string($con,$_POST['medName']);
    $medBrand = mysqli_real_escape_string($con,$_POST['medBrand']);
    $medQuantity = mysqli_real_escape_string($con,$_POST['medQuantity']);
    $medPrice = mysqli_real_escape_string($con,$_POST['medPrice']);


    $query = "INSERT INTO drug (medName,medBrand,medQuantity,medPrice) VALUES    
            ('$medName',' $medBrand',' $medQuantity',' $medPrice')";

    $quary_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = " drugs add successfuly";
        header("Location: ");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = " drugs not add successfuly";
        header("Location: ");
        exit(0);

    }

}
?>