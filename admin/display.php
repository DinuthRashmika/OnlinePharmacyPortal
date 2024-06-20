<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        background-image: url("../LOGO.jpg");
    
    }

    h1 {
        margin-top: 20px;
    }

    div {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #D2B4DE;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    button a {
        color: white;
        text-decoration: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

</head>

<body>

<center><h1 style="margin-top:20px;">All Users</h1></center>

    <div>
        <button>
            <a href="user.php" style="text-decoration:none">Add user</a>
        </button>
        <button>
        <a href="../login.php" style="text-decoration:none">Log out</a>

        </button>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Licence ID</th>
                    <th scope="col">Operation</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
    $sql="Select * from `dperson`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //$row=mysqli_fetch_assoc($result);
        //echo $row['name'] ;
        while ($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $contactno=$row['contactno'];
            $username=$row['username'];
            $role=$row['role'];
            $licenseid=$row['licenseid'];

            
            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$contactno.'</td>
            <td>'.$username.'</td>
            <td>'.$role.'</td>
            <td>'.$licenseid.'</td>
     
            
            <td>
        <button><a href="update.php? updateid='.$id.'" style="text-decoration:none">Update</a></button>
        <button><a href="delete.php? deleteid='.$id.'" style="text-decoration:none">Delete</a></button>
    </td>
          </tr>';
        }
          
    } 
    ?>
    


            </tbody>
        </table>
    </div>

</body>

</html>