<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $pass= md5($_POST['password']);
    $cpass= md5($_POST['confirmpassword']);
    $user_type=$_POST['user_type'];


    $select="SELECT * FROM user_form WHERE email=' $email'  &&  password='$pass'";

    $result =mysqli_query($conn,$select);

    if(mysqli_num_rows($result)> 0){
       $error[]='user already exsist!';
       

    }else {

        if( $pass != $cpass){
            $error[]='password not matched!';
        }else{
            $insert ="INSERT INTO user_form (name,email,address,password,user_type) VALUES ('$name',' $email',' $address',' $pass',
            '$user_type')";
            mysqli_query($conn,$insert);
            header('location:login.php');

        }


    }
};



?>

<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="../css/sign-login.css">

        <title> Sign Up</title>
        <script src="../js/signup.js"></script>

    
    </head>
    <body>
        <!--signup start -->
        <div id="error"></div>
        
        <div class="bottom">
        <div class="Signuparea">
            <h1>Sign Up</h1>
            <form onsubmit="return validate()" action="" method="post">
              <?php

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>



    
                <label>Name</label>
                <input id="name" type="text" placeholder="Enter Name" name="name">
                <label>Email</label>
                <input id="email" type="email" placeholder="Enter Email" name="email">
                <label>Address</label>
                <input id="address"type="text" placeholder="Enter Address" name="address">
                <label>Password </label>
                <input id="pass"type="password" placeholder="Enter a Password" name="password">
                <label>Confirm Password </label>
                <input id="pass2"type="password" placeholder="Confirm your Password" name="confirmpassword"><br><br>
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <br><br>
                <input type="submit" name="submit" class="btn"value="Submit">

            </form>
            <p class="link">If you have an account <a href="login.php">Login</a></p>

        </div>
        </div>
        <!--sign up end-->
        
        

    </body>
</html>