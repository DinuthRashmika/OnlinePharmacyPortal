<?php
include 'connect.php';
?>
<!DOCTYPE html>

<html>

<head>
    <title>Healthdoc</title>
    <link rel="stylesheet" href="deliver.css">
    <script src="https://kit.fontawesome.com/4cbcac6849.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        background-image: url("./images/bg1.jpeg");
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column1 {
        float: left;
        width: 50%;
        padding: 10px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row1:after {
        content: "";
        display: table;
        clear: both;
    }


    table {
        width: 80%;
        border-radius: 10px;
        margin-left: 50px;
    }

    .card {

        width: 100%;
        background-color: rgba(115, 147, 179, 0);
        height: 400px;
        border-radius: 10px;

    }

    .deco {

        width: 100%;
        height: fit-content;
        border-radius: 10px;
        margin-top: 5px;
        text-align: center;
        margin-left: 25px;


    }

    .container {

        padding: 2px 2px;
        margin-top: 10px;
    }

    #search {
        margin-top: 40px;

    }


    #sform {
        margin-top: 40px;
    }

    .btnax {
        margin-top: 0px;
        float: right;
        margin-left: 50px;
    }

    tr {
        text-align: center;
    }

    .sclass {
        width: 200px;
        height: 30px;
        margin-bottom: -20px;
    }

    .pro {
        border-radius: 50%;
    }

    .sdata {
        display: inline-block;
        cursor: pointer;
        border-radius: 50px;
        width: 200px;
        height: 30px;
        font-size: 18px;
        background-color: #FED70E;
        font-weight: 300;
        color: #239DAA;
        border-width: 2px;

    }

    .sercard {
        margin-top: 10px;
        margin-top: 20px;
        border: 1px solid #000000;
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

    .bttes {

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
        text-decoration: none;

    }

    .delbtn {
        background-color: #D2042D;
        border-radius: 8px;
        padding: 10px 10px;

        color: black;

    }

    .bttes a {
        text-decoration: none;
    }
    </style>
</head>

<body>


    <h1>
        <center>Delivery Section</center>
    </h1>


    <div class="row">

        <div class="column">



            <div class="card">
                <div class="container">
                    <h2 style="margin-left:50px">My Profile</h2>
                    <center><img src="./images/ss.jpg" alt="" width="250px" height="250px" class="pro" /></center>



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


                    <!-- Reading data                  -->
                    <div class="deco ">
                        <form action="" method="post">
                            <table style="
        border: 1px solid #000000;
        margin-top: 10px;
        width: 80%;
        padding: 6px 6px;
        margin: 8px 0;
        display: inline-block;
        box-sizing: content-box;
        border-radius: 10px;">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" disabled class="form-control" name
                                                value="<?php echo $name  ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" disabled class="form-control"
                                                value="<?php echo $email  ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="contactno">Contact No</label>
                                            <input type="text" name="contactno" disabled class="form-control"
                                                value="<?php echo $contactno  ?>">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <label for="licenseid">Licenseid</label>
                                            <input type="text" name="licenseid" disabled class="form-control"
                                                value="<?php echo $licenseid  ?>">
                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" disabled class="form-control"
                                                value="<?php echo $username  ?>">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" name="password" disabled class="form-control"
                                                value="<?php echo $password  ?>">
                                        </div>
                                    </td>

                                </tr>
                            </table>
                        </form>

                    </div>
                    <div class="btnax">
                        <button class="bttes"><a href="login.php">Log out</a></button>
                        <?php
                        $id=1;
                                echo'  <button class="bttest"><a href="update2.php? updateid='.$id.'"class="text-light" style="text-decoration:none">Update</a></button>'

                                 ?>

                    </div>






                </div>
            </div>
        </div>
        <div class="column">
            <h2 style="margin-left:50px">Prepared Orders</h2>
            <table border="1">
                <tr>
                    <th>Customer ID</th>
                    <th>Order ID</th>
                    <th>Operation</th>
                    <?php 
            $sql="Select * from `finalordetails`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $orderid=$row['orderid'];
            $customerid=$row['customerid'];
           
            echo'<tr>
            <th scope="row">'.$orderid.'</th>
            <td>'.$customerid.'</td>
            <td><button><a href="delete.php? deleteid='.$orderid.'"class="delbtn">Delete</a></button></td>
            
        </tr>';
        }
    }
    
    ?>
            </table>


            <center>
                <div class="sercard">
                    <div class="row1">


                        <form action="" method="POST" id="search">
                            <div class="column1">
                                <input type="text" class="sclass" name="customerid"
                                    placeholder="Enter customer ID" /></br>
                            </div>
                            <div class="column1">
                                <input type="submit" name="search" value="Search Data" class="sdata" />
                            </div>
                        </form>

                    </div>


                    <?php

if(isset(($_POST['search'])))
{
    $customerid = $_POST['customerid'];

    $query = "SELECT * from customer_reg where customerid='$customerid'";
    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>

                    <form action="" method="POST" id="sform">
                        <label for="id">Customer ID</label><br>
                        <input type="text" name="customerid" value="<?php echo $row['customerid'] ?>" readonly /><br>
                        <label for="name">Name</label><br>
                        <input type="text" name="customername" value="<?php echo $row['customername'] ?>" /><br>
                        <label for="name">Contact No</label><br>
                        <input type="text" name="contactno" value="<?php echo $row['contactno'] ?>" /><br>
                        <label for="name">Address</label><br>
                        <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
                    </form>

                    <?php
        }

}
?>
                </div>
            </center>


        </div>
    </div>


</body>

</html>