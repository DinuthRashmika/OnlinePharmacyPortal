<?php
include 'config.php'
?>


<!DOCTYPE html>
<html>

<head>
    <title>Health Doc</title>
    <link rel="stylesheet" type="text/css" href="">
</head>

<body>

    <div class="container">
        <button class="btn"><a href="newdperson.php" class="text-light">Add Delivery Person</a>
        </button>
    </div>

    <div class="tbl">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Licence No</th>
                <th style="width:30%">Operations</th>
                <!-- <th>Remove</th> -->
            </tr>
            <?php
   
   $sql="Select * from `dperson`";
$result=mysqli_query($con,$sql);
if($result){   
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
        
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $licenceno=$row['licenceno'];
        ?>
            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td> <?php echo $row['name']?> </td>
                <td> <?php echo $row['email'] ?> </td>
                <td> <?php echo $row['mobile'] ?> </td>
                <td> <?php echo $row['licenceno'] ?> </td>
                <td>

                    <?php 
        echo '<a href="update#.php?updateid='.$id.'"><button  style="color:white; background-color:green; width:90px; height:50px; border-radius:8px; cursor: pointer;
        border: none;font-size: 100%; margin-left:10px;  ">Update</button></a>';

          echo '<a href="delete#.php?deleteid='.$id.'"><button  style="color:white; background-color:red; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Delete</button></a>';
       ?>
                </td>
            </tr>

            <?php
    }   
}
   ?>

            </tr>
        </table>
    </div>

</html>