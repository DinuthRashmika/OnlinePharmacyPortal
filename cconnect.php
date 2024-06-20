<?php

$con=new mysqli('localhost','root','','pharmacist');

if(!$con){
    die(mysqli_error($con));
}

?>