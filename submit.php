<?php
include 'config.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Health Doc</title>
		<link rel="stylesheet" type="text/css" href="submit.css">
	</head>
	<body>

    <div class="container">
        <button class="btn"><a href="manage.php" class="text-light">Add Pharmacist</a></button>
    </div>

    <div class="tbl">
        <table border="1">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th style="width:30%">Operations</th>
            <!-- <th>Remove</th> -->
          </tr>       
   <?php
   
   $sql = "SELECT * FROM `contacts`";
   $result = mysqli_query($con, $sql);
   if ($result) {   
       while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['id'];
           $name = $row['name'];
           $email = $row['email'];
           $mobile = $row['mobile'];
    ?>
           <tr>
               <td><?php echo $row['id'] ?> </td>
               <td><?php echo $row['name'] ?></td>
               <td><?php echo $row['email'] ?></td>
               <td><?php echo $row['mobile'] ?></td>
               <td>
                   <?php 
                   echo '<a href="updateh.php?updateid='.$id.'"><button style="color:white; background-color:green; width:90px; 
                   height:50px; border-radius:8px; cursor: pointer; border: none; font-size: 100%; margin-left:10px;">Update</button></a>';

                   echo '<a href="deleteh.php?deleteid='.$id.'"><button style="color:white; background-color:red; width:90px; 
                   height:50px; border-radius:8px; cursor: pointer; border: none; font-size: 100%; margin-left:10px;">Delete</button></a>';
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


  </body>
</html>


