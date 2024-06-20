<?php
include 'Ddbcon.php';
if(isset($_GET['deleteid'])){
      $did=$_GET['deleteid'];

      $sql="delete from `medicine` where did=$did";
      $result=mysqli_query($con,$sql);
      if($result){

       header('location:ddisplay.php');
        
      }
      else{
        die(mysqli_error($con));
      }
}

?>