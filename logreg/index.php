<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

button {
  margin: 10px;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #f1f1f1;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #dcdcdc;
}
 body {
        background-image: url("../LOGO.jpg");
    }

    .container a {
        text-decoration:none;

    }
    button{
        background-color:#D2B4DE;
    }
    </style>
</head>

<body>
    <div class="container">
        <button><a href="../admin/display.php">Admin</a></button>
        <button><a href="../pharinterface.php">Pharmacist</a></button>
        <button><a href="../assistantpharmscist.php">Assistant Pharmacist</a></button>
        <button><a href="../deliver.php">Delivery Person</a></button>

       
    </div>
</body>

</html>