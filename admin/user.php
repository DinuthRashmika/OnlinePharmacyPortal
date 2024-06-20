<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $licenseid=$_POST['licenseid'];


    $sql="insert into `dperson` (name,email,contactno,username,role,licenseid)
    values ('$name','$email','$contactno','$username','$role','$licenseid')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Data inserted sucessfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <style>
        body{
            background-image: url('');
        }
        .center {
  margin: auto;
  width: 50%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.form-container {
        width: 300px;
        margin: auto;
    }

    /* Style for form labels */
    label {
        display: block;
        margin-bottom: 5px;
    }

    /* Style for form input fields */
    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style for submit button */
    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Style for submit button when hovered */
    button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
   
</head>

<body>
    <center>
        <h1 style="margin-top:20px;">Add User</h1>
    </center>

    <div class="form">
        <form method="post">
    <div class="center">
            <div>
                <label>Name</label>
                <input type="text" placeholder="Enter Name" name="name" autocomplete="off">
            </div>

            <div>
                <label>E-mail</label>
                <input type="email" placeholder="Enter Email" name="email" autocomplete="off">
            </div>

            <div>
                <label>contactno Number</label>
                <input type="text" placeholder="Enter Contact No" name="contactno"
                    autocomplete="off">
            </div>

            <div>
                <label>username</label>
                <input type="text" placeholder="Enter Username" name="username"
                    autocomplete="off">
            </div>

            <div>
                <label for="role">User Role:</label>
                <br />
                <select name="role" id="role" style="">
                    <option value="" default>Choose a role</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Assistant Pharmacy">Assistant Pharmacist</option>
                    <option value="Delivery Person">Delivery Person</option>
                </select>
            </div>

            <div>
                <label>Licence ID</label>
                <input type="text" placeholder="Enter License Id" name="licenseid"
                    autocomplete="off">
            </div>



            <button type="submit" name="submit">Submit</button>

            <div>
        </form>

    </div>



</body>

</html>