<!<!DOCTYPE html>
    <html>

    <head>
        <title>HealthDoc</title>

        <style>
        body,
        h1,
        p {
            margin: 0;
            padding: 0;

        }

        .not {
            font-size: 25px;
        }


        body {
            background-image: url("back.jpg");
            background-repeat: none;
        }


        /* Header styles */
        header {
            background-color: #76448A;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: inline-block;
            font-size: 40px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .logo:hover {
            color: #555;
        }

        .nav {
            display: inline-block;
            margin-left: 200px;
            transition: 0.8s case;
            color: white;
            font-size: 20px;
        }

        .nav a {
            color: #333;
            text-decoration: none;
            margin-right: 150px;
            transition: 0.8s case;
        }

        .nav a:hover {
            color: white;
        }




        .icon-container {

            justify-content: left;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 20px;
            color: blue;


        }


        .icon-container a: hover {
            color: blue;

        }

        .logo {
            box-shadow: 0 5px 8px rgba(152, 65, 183, 0.8);

        }

        .log {
            box-shadow: 0 5px 8px rgba(147, 118, 133, 0.38);
        }

        .blog-container {
            margin: 10px;
            max-width: 5000px;
            padding: 0px 80px 0px 80px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .blog-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: black;
        }

        .blog-content {
            font-size: 16px;
            line-height: 1.5;
            color: black;
        }

        /* Logout button styles */
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #76448A;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            float: right;

        }

        .logout-btn:hover {
            background-color: #D8BFD8;
        }

        .blog {
            display: flex;
        }


        /* Payment options styles */
        .payment-container {
            margin: 10px;
            max-width: 5000px;
            padding: 0px 80px 0px 80px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .payment-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .payment-options {
            display: flex;
            justify-content: left;
            margin-top: 10px;
        }

        .payment-option {
            display: flex;
            flex-direction: column;
            align-items: left;
            margin: 20px;
        }

        .payment-option i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .payment-option-label {
            text-align: center;
        }

        .orderDetails {
            margin: 10px;
            max-width: 5000px;
            padding: 0px 150px 0px 150px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);


        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .details {
            padding: 0px 10px 0px 10px;
            margin: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 5000px;
            display: inline-block;

        }

        .image {

            display: inline-block;

        }

        .btn:hover {
            background-color: #45a049;
        }

        .foter {
            clear: both;
            background-color: #95A5A6;
            display: flex;
            justify-content: space-between;
            padding: 10px
        }

        .company {
            width: 800px;

        }

        .htree {
            text-align: center;

        }

        .para {
            text-align: justify;
        }

        .addres {
            margin-right: 30px;
        }

        .final {
            background-color: #D5DBDB;
            display: flex;
            justify-content: space-between;
            padding: 10px 40px 10px 40px;

        }

        .stflog {
            text-decoration: none;
        }

        .foter {
            position: relative;
            top: 150px;
        }

        .final {
            position: relative;
            top: 150px;
        }
        </style>
    </head>

    <body>
        <header>
            <a href="#" class="logo"><img src="LOGO.png" height="60px" width="150px"></a>
            <nav class="nav">
                <a href="home.php">Home</a>
                <a href="#">Products</a>
                <a href="aboutus.php">About</a>
                <a href="contact.php">Contact</a>
                <a href=""><img src="Circle-icons-profile.svg.png" height="30px" width="30px">
            </nav>
        </header>
        <div class="blog">
            <div class="icon-container">
                <a href="#"><img class="log" src="shopping-cart-icon-free-vector.jpg" alter="cart" width="25px"
                        height="25px"></a><br><br>
                <p><a href="#"><img class="log" src="download.png" width="25px" height="25px"></a></p><br>
                <p><a href="#"><img class="log" src="deliver.png" width="25px" height="25px"></a></p><br><br>
            </div>

            <div class="blog-container">
                <div class="logout-btn">
                    <a href="home.php">Log Out</a>
                </div>
                <h2 class="blog-title">User Name</h2>

                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum
                    lectus ac lacinia ultricies. Fusce facilisis dapibus ex, sit amet posuere massa facilisis vitae.
                    Mauris rutrum nunc id tristique tincidunt. Vivamus non libero eget justo pulvinar pulvinar at id
                    lacus. Aliquam dapibus ligula sit amet ligula rutrum, a luctus arcu dictum. In ut semper diam. Sed
                    cursus enim vitae finibus lobortis.</p>
                <p class="blog-content">Phasellus tincidunt eleifend sem vitae tristique. Aenean hendrerit mauris vel
                    magna dictum, a bibendum risus aliquam. Proin id dolor nec nisl aliquet facilisis. Suspendisse nec
                    odio ut massa sagittis eleifend nec nec est. In at consequat mauris. Curabitur pellentesque sem non
                    volutpat ullamcorper.</p>
            </div>
            <div class="payment-container">
                <h2 class="payment-title">Payment Options</h2>
                <div class="payment-options">
                    <div class="payment-option">
                        <i class="fab fa-cc-visa"></i>
                        <div class="payment-option-label">Visa</div>
                        <a href="#">
                            <center><img src="visa.jpg" width="60px" height="40px"></center>
                        </a>
                    </div>
                    <div class="payment-option">
                        <i class="fab fa-cc-mastercard"></i>
                        <div class="payment-option-label">Mastercard</div>
                        <a href="#">
                            <center><img src="MasterCard_Logo.svg.png" width="60px" height="40px"></center>
                        </a>
                    </div>

                    <div class="payment-option">
                        <i class="fab fa-cc-paypal"></i>
                        <div class="payment-option-label">PayPal</div>
                        <a href="#">
                            <center><img src="paypal.png" width="70px" height="40px"></center>
                        </a>
                    </div>

                </div>
                <div id="cart-items">
                    <!-- Display the items in the shopping cart -->
                    <br><br>
                    <p class="not">Check your email or text meassages to view the total amount.</p>
                </div>
                <br><br>
                <a href="paypage.php"><button id="pay-button">Pay Now</button></a>
                <br><br>
                <h2 class="payment-title">Order Details</h2>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Operation</th>
    </tr>
    </table>
    


               <!-- <script src="pharmacy.js"></script>-->
            </div>
            <br><br>

            <div>
                <form action="interface.php" method="post" class="details" border="1">
                    <h1>My Details</h1>
                    <br>
                    <div>
                        <label for="FN">First Name :</label>
                        <input type="text" name="FirstName" id="FN" class="FirstN" placeholder="*Enter the First name"
                            maxlength="15" minlength="4" required>
                    </div>
                    <br>
                    <div>
                        <label for="LN">Last Name :</label>
                        <input type="text" name="LastName" id="LN" class="LastN" placeholder="*Enter the Last name"
                            maxlength="15" minlength="4" required>
                    </div>
                    <br>
                    <div>
                        <label for="PNo">Phone Number :</label>
                        <input type="tel" name="yourNumber" id="PNo" class="PhNo" placeholder="*Enter the Phone Number"
                            maxlength="10" minlength="10" required>
                        <br><br>
                    </div>
                    <div class="address">
                        <label for="address">Address :</label>
                        <textarea name="address" cols="35" rows="3" placeholder="*Enter address here..."
                            required></textarea>
                    </div>
                    <br>
                    <hr color="black">
                    
                    <br><br>
                    <div class="medicine">
                        <label for=" Medicine ">Medicine that you want to order:</label>
                        <textarea name="medicine" id="med" placeholder="Enter medicine" rows="10" cols="35"
                            required> </textarea>
                    </div><br>
                    <input type="file" name="prescription" id="prescription">
                    
                    <br><br>

                    <div class="submit">
                        <input type="submit" name="submit" id="sub" class="btn" value="SUBMIT">
                    </div>
                </form>
                <div class="image">


                </div>
            </div>
        </div>

        <footer class="foter">
            <div class="company">
                <h3 class="htree">HethDoc</h3>
                <p class="para">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                    piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                </p>
            </div>
            <div class="addres">
                <h3 class="htree">Contact Info</h3>
                <ul>

                    <li>100W Ricon<br>San Fransisco,CA 94553</li>
                    <li>1 (800) 555 5555 </li>
                    <li>inf@gmail.com</li>
                </ul>
            </div>
        </footer>
        <section class="final">
            <div class="fdiv">
                <p class="copyr">© 2023. All Rights Reserved </p>
            </div>
            <div class="sdiv">
                <div class="sdiv">
                    <a class="stflog" href="">Staff Login<a>
                </div>


    </body>

    </html>

    <?php
require 'connection.php';

if(isset($_POST['submit'])){
  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'];
  $phone = $_POST['yourNumber'];
  $address = $_POST['address'];
  $current = $_POST['CurrentPassword'];
  $new = $_POST['NewPassword'];
  $confirm = $_POST['ConfirmPassword'];
  $med = $_POST['medicine'];

  $sql = "INSERT INTO customer_detail (C_ID, FirstName, LastName, Phone, Address, CurrentPassword, NewPassword, ConfirmPassword, Medicine) VALUES ('', '$fname', '$lname', '$phone', '$address', '$current', '$new', '$confirm', '$med')";

  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Your order is confiremed. Total amount will be directed to you within 10 minutes through an email and a text message.');</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}



$sql ="Select * from orderdetails";
$result=mysqli_query($con,$sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){
   $oid=$row['Order_ID'];
   
   echo '<tr>
   <td>'.$oid.'</td>
   
   <td >
   <button id="dele"  style="background-color:#2ECC71;border:0px;border-radius:20px;margin-left:10px;height:15px;width:75px;"><a style="color:black;text-decoration:none;" href="deletedinuth.php?deleteid='.$oid.'">Delete</a></button>
   </td>
   </tr>';
}
}




mysqli_close($conn);
?>