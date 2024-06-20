
<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="pharmacy";


$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
    die("connect error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['email'];
    $pass=$_POST['password'];



    $sql="SELECT * FROM customer_reg WHERE email='$name' &&  password='$pass'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);


    if($row["user_type"]=="user")
    {

      $_SESSION['email']=$name;

      $_SESSION['user_type']="user";

      header("location:interface.php"); 

    }

    elseif($row["user_type"]=="admin")
    {

      
      $_SESSION['email']=$name;

      $_SESSION['user_type']="admin";

      header("location:interface.php"); 

    }

    else
    {
       session_start();
        $message= "email or password do not match";

        $_SESSION['loginMessage']=$message;

        header("location:interface.php");
    }



}

?>