<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `dperson` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$contactno=$row['contactno'];
$username=$row['username'];
$role=$row['role'];
$licenseid=$row['licenseid'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $licenseid=$_POST['licenseid'];

    

    $sql="update `dperson` set id=$id, name='$name', 
    email='$email', contactno=$contactno, username='$username',role='$role',licenseid='$licenseid'
    where id=$id";   //without where clause value will not be updated.
    $result=mysqli_query($con,$sql); //add single quotes to varchar ones
    if($result)
    {
        //echo "Data updated sucessfully";
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
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        background-image: url("../LOGO.jpg");
    }

    h1 {
        margin-top: 20px;
        text-align: center;
    }

    .a {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
    }

    button:hover {
        background-color: #45a049;
    }
</style>


   
</head>

<body>
<center><h1 style="margin-top:20px;">Update User</h1></center>
    <div >
        <form method="post">

            <div class="a">
                <label>Name</label>
                <input type="text" placeholder="Enter Name" name="name" autocomplete="off"
                    value=<?php echo $name;?>>
            </div>

            <div class="a">
                <label>E-mail</label>
                <input type="email" placeholder="Enter Email" name="email" autocomplete="off"
                    value=<?php echo $email;?>>
            </div>

            <div class="a">
                <label>contactno Number</label>
                <input type="text" placeholder="Enter contactno" name="contactno" autocomplete="off"
                    value=<?php echo $contactno;?>>
            </div>

            <div class="a">
                <label>User Name</label>
                <input type="text" placeholder="Enter Username" name="username" autocomplete="off"
                    value=<?php echo $username;?>>
            </div>



            <div class="a">
                <label for="role">User Role:</label>
                <br />
                <select name="role" id="role" style="">
                    <option value="" default>Choose a role</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Assistant Pharmacy">Assistant Pharmacist</option>
                    <option value="Delivery Person">Delivery Person</option>
                </select>
            </div>

            <div class="a">
                <label>Licence Id</label>
                <input type="text" placeholder="Enter Licence Id" name="licenseid" autocomplete="off"
                    value=<?php echo $licenseid;?>>
            </div>



            <button type="submit" name="submit" style="background-color: #D2B4DE;">Update</button>
        </form>

    </div>



</body>

</html>