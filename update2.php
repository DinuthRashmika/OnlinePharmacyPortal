<!DOCTYPE html>

<html>

<head>
    <style>
    body {
        background-image: url("./images/bg1.jpeg");
    }

    .card {
        width: 50%;
        border: 1px solid #000000;
        border-radius: 10px;
        padding: 2px 2px;
        margin-top: 10px;
        margin-right: 20px;
        margin-left: 20px;
        justify-content: center;

    }


    input {
        border: 1px solid #000000;
        margin-top: 10px;
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        box-sizing: content-box;
        border-radius: 10px;

    }

    .bttest {

        display: inline-block;
        cursor: pointer;
        padding: 0 24px;
        border-radius: 50px;
        min-width: 200px;
        height: 40px;
        font-size: 18px;
        background-color: #FED70E;
        font-weight: 500;
        color: #239DAA;

    }
    </style>
</head>

<body>

    <!-- Footer -->
    <?php include "connect.php"?>

    <?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['id']))
    {
      $id = $_GET['id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM dPerson WHERE id = 1 ";
      $result= mysqli_query($con,$query);

      while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $contactno = $row['contactno'];

          $licenseid = $row['licenseid'];
          $username = $row['username'];
          $password = $row['password'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contactno = $_POST['contactno'];

      $licenseid = $_POST['licenseid'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE dPerson SET name = '{$name}' , email = '{$email}' , contactno = '{$contactno}',licenseid='{$licenseid}',username='{$username}',password='{$password}' WHERE id = 1";
      $update_user = mysqli_query($con, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>
    <div class="card">

        <form action="" method="post">
            <center>

                <div class="form-group">
                    <label for="name"><b>Name</b></label><br>
                    <input type="text" name="name" class="form-control" name value="<?php echo $name  ?>">
                </div>

                <div class="form-group">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" name="email" class="form-control" value="<?php echo $email  ?>">
                </div>

                <div class="form-group">
                    <label for="contactno"><b>Contact No</b></label><br>
                    <input type="text" name="contactno" class="form-control" value="<?php echo $contactno  ?>">
                </div>

                <div class="form-group">
                    <label for="licenseid"><b>License ID</b></label><br>
                    <input type="text" name="licenseid" class="form-control" value="<?php echo $licenseid  ?>">
                </div>

                <div class="form-group">
                    <label for="username"><b>Username</b></label><br>
                    <input type="text" name="username" class="form-control" value="<?php echo $username  ?>">
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b></label><br>
                    <input type="password" name="password" class="form-control" value="<?php echo $password  ?>">
                </div>


                <div class="form-group">
                    <input type="submit" name="update" class="bttest" value="update">
                </div>
            </center>
        </form>
    </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5"><br>
        <a href="deliver.php" class="btn btn-warning mt-5"> Back </a>
        </br>
        <div>
</body>

</html>