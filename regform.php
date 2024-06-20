<!DOCTYPE html>
<html>
<head>
  <title>Customer Registration</title>
  <style type="text/css">
    .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  
}

.btn {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background-color: #76448A;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn:hover {
  background-color: #45a049;
}

body{
  background-image:url("back.jpg");
  background-repeat: none;
}

  </style>
</head>
<body>
  <div class="container">
    <h1>Customer Registration</h1>

    <form action="regform.php" method="post" id="registration-form">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Contact Number:</label>
        <input type="text" id="num" name="number" maxlength="10" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" minlength="8" maxlength="12" required>
      </div>

      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" minlength="8" maxlength="12" required>
      </div>
       <div class="form-group">
        <label>Date of Birth(YYYY-MM-DD):</label>
        <div class="dob-group">
          <input type="text" id="dob" name="dob" required>
        </div>
        <br><br>
        <div class="address">
          <label for="address">Address :</label>
          <textarea name="address" cols="60" rows="5" placeholder="Enter text here..."></textarea>
          <br><br>
      </div>
      <center><input type="submit" value="Register" class="btn" name="register"></center>
    </form>
  </div>

  <script src="registration.js"></script>
</body>
</html>

<?php
  require 'connection.php';

  if(isset($_POST['register'])){
    $name=$_POST['name'];
    $contact=$_POST['number'];
    $psw=$_POST['password'];
    $cpsw=$_POST['confirm-password'];
    $DOB=$_POST['dob'];
    $add=$_POST['address'];

    $query= "INSERT INTO customer_reg VALUES ('','$name','$contact','$psw','$cpsw','$DOB','$add')";
    //mysqli_query($conn, $query);

    if(mysqli_query($conn, $query) === true) {
      die( "<script> alert('Information inserted successfully')</script>");
      header("Location: home.php");
    }
    else{
      echo "error";
    }
    }
?>
