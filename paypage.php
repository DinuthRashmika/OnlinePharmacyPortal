<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="paypage.css">
    </head>


    <body>
     <!-- payment start -->
            <div class="container">
                    <form action="paypage.php" method="post">
                    <div class="mainForm">
                    <div class="left">
                      <h3>BILLING ADDRESS</h3>
                        Full name :
                        <input id="full" type="text" name="full" placeholder="Enter name" >
                        Email :
                        <input id="em" type="text" name="mail" placeholder="Enter email" >
                        Address :
                        <input id="add" type="text" name="add" placeholder="Enter address"  >
                        City :
                        <input id="cit" type="text" name="city" placeholder="Enter City" >
                        <div id="zip">
                            <label>
                                Province
                                 <select name="pro">
                                    <option>Western </option>
                                    <option>Southern</option>
                                    <option>Sabaragamuwa</option>
                                    <option>Uva</option>
                                    <option>Central</option>
                                    <option>North Western</option>
                                    <option>North Central</option>
                                    <option>Eastern</option>
                                    <option>Northern</option>
                                    
                                </select>
                                
                            </label>
                                <label>
                                    Zip Code :
                                    <input id="cd" type="number" name="zip" placeholder="zip code">

                                </label>
                        </div>
                    </div>
                <div class="right">
                    <h3>PAYMENT</h3>
                    
                        Accepted Card :<br>
                        <input type="radio" id="master" name="card" value="master">
                       <img src="mcard.png" width="50">
                        <input type="radio" id="visa" name="card" value="visa">
                       <img src="vcard.png" width="50">
                       <br><br>
                       
                        Credit Card number :
                        <input id="cc" type="text" name="cardno" placeholder="Enter card number" maxlength="16">
                        
                        Exp Month:
                        <input id="mm" type="text" name="exm" placeholder="Enter Month" >
                        <div id="zip">
                            <label>
                                Exp Year
                                <select name="exy">
                                    <option>Choose Year </option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                    <option>2029</option>
                                    <option>2030</option>
                                    
                                    
                                </select>
                                
                            </label>
                                <label>
                                    CVV :
                                    <input id="cv" type="number" name="cv" placeholder="CVV" maxlength="16" >

                                </label>
                        </div>
                        <br><input type="submit" name="paynow" id="sub" class="btn" value="PAY">
                      </div>
                    </div>
                    </form>
                    

                </div>
           
    </body>
</html>

<?php
  	require 'connection.php';

  	if(isset($_POST['paynow'])){
  		$fullname=$_POST['full'];
  		$email=$_POST['mail'];
  		$address=$_POST['add'];
  		$city=$_POST['city'];
  		$province=$_POST['pro'];
  		$zipcode=$_POST['zip'];
  		$typecard=$_POST['card'];
  		$cardnumber=$_POST['cardno'];
  		$expmonth=$_POST['exm'];
  		$expyear=$_POST['exy'];
  		$cvv=$_POST['cv'];

  		$sql="INSERT INTO payment VALUES('','$fullname','$email','$address','$city','$province','$zipcode','$typecard','$cardnumber','$expmonth','$expyear','$cvv')";
		//mysqli_query($conn, $sql);

    if(mysqli_query($conn, $sql) === true) {
      die( "<script> alert('Data inserted successfully')</script>");
    }
    else{
    	echo"Error";
    }

  	}
  ?>