<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Basic input validation
    if (empty($name) || empty($email) || empty($mobile)) {
        die("Please fill in all the fields.");
    }

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO contacts (`name`, `email`, `mobile`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    // Bind the parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $mobile);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('location: submit.php');
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Manage Staff</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		
    <!-- header part -->
    
    <header>
            <section class="logoschbar">
        <a href="https://www.wix.com/blog/best-fonts-for-logos#viewer-adtuf" class="Logo">HelthDoc</a>
            <div class="buttonset">
                <div>
                    <button type="button" onclick="location class="userregiste"><a href="home.php">Log out</a></button>
                </div>
            </div>
    </section>
    <section class="treenavbar">
        <a href="home.php">Home</a>
      
    </section>
    </header> 
  
<!-- finish -->


<!-- side bar -->
<div class="sidebar">
       <div class="profile">
        <br>
        <br>
        <h2>Admin</h2>
        <h3>Himeshika De Silva</h3>
        <br>
        <br>
        <br>
    </div>
    <ul>
        <li><center><a href="dashboard.php">Dashboard</a></center></li>
        <br>
        <br>
        <br>
        <li><center>Staff  Details</center></li>
      </ul>    
          <div class="dropdown">
            <ul>  <button><a href="#">Pharmacist</a></button></ul>
              <div class="dropdown-options">
              <a href="#">Add Pharmacist</a><br>
              <a href="submit.php">Update Pharmacist</a>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="dropdown">
            <ul>  <button><a href="add.php">Assistant Pharmacist</a></button></ul>
              <div class="dropdown-options">
              <a href="add.php">Add Assistant Pharmacist</a><br>
              <a href="update@.php">Update Assistant Pharmacist</a>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="dropdown">
            <ul>  <button><a href="newdperson.php">Delivery Person</a></button></ul>
              <div class="dropdown-options">
              <a href="newdperson.php">Add Delivery Person</a><br>
              <a href="update#.php">Update Delivery Person</a>
            </div>
          </div>
          <br>
          <br>
          <br>
        <br>
    </ul>
	</div>
<!--Pharmacist Details-->

<div class="Pharmacist-details">
				
			<div class="main-form">
			
				<form method="post" class="FRM">
                <p>Pharmacist Details</p>
                    <br>
						<label for="name">Name :</label><br>
						<input type="text" name="name" placeholder="*Enter name" class="nam" required>
					<br>
						<label for="email">Email :</label><br>
						<input type="text" name="email" placeholder="*Enter Email address" class="Mil" maxlength="25" minlength="15" required>
					<br>
						<label for="mobile">Mobile :</label><br>
						<input type="text" name="mobile" placeholder="*Enter Phone Number" class="con" maxlength="10" minlength="10" required>
					<br>
                    <br>
                    <br>
                <div class="buttonset">
                    
                      <button type="submit" name="submit" class="userregiste" >Submit </button>
                    <button type="reset" name="reset" class="userregiste" h>Reset </button>
                
                </div>
				
			</form>
			</div>
		</div>
        
</body>
</html>
   
