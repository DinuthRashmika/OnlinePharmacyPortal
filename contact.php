<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $contactno=$_POST['contactno'];
    $message=$_POST['message'];

    $sql="insert into `complaints` (name,email,subject,contactno,message)
    values ('$name','$email','$subject','$contactno','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('Data inserted sucessfully')</script>";
        //header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Healthdoc</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/4cbcac6849.js" crossorigin="anonymous"></script>
</head>

<script>
function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

<body>
    <header>
        <a href="#" class="logo"><img src="LOGO.png" height="60px" width="150px"></a>
        <nav class="nav">
            <a href="home.php">Home</a>
            <a href="#">Products</a>
            <a href="aboutus.php">About</a>
            <a href="#">Contact</a>
            <a href="#"><img src="Circle-icons-profile.svg.png" height="30px" width="30px"></a>
        </nav>
    </header>

    <table border=0>
        <tr>
            <td>
                <div class="card">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <p>Let's get this conversation started.Tell us a bit about yourself, and we'll get in touch
                            as
                            soon as we can.</p>
                        <hr>
                        <form name="myForm" method="post" onsubmit="return validateForm()">
                            <label for="name"><b>Name</b></label><br>
                            <input type="text" placeholder="Enter name" name="name"><br />

                            <label for="email"><b>E-mail</b></label><br>
                            <input type="email" placeholder="Enter email" name="email" required><br />

                            <label for="subject"><b>Subject</b></label><br>
                            <input type="text" placeholder="Enter subject" name="subject" required><br />

                            <label for="contactno"><b>Contact No</b></label><br>
                            <input type="text" placeholder="Enter contact No" name="contactno" required><br />

                            <label for="message"><b>Message</b></label><br>
                            <textarea type="text" placeholder="Enter message" name="message" required></textarea><br>

                            <div class="btna">
                                <button type="reset" class="btnr" name="reset"><b>Reset</b></button>
                                <button type="submit" class="btns" name="submit"><b>Submit</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </td>
            <td style="width:40%;">
                <h1>Location</h1>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126747.58238609268!2d79.77657794952391!3d6.907106380976086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25755ca7a1c0d%3A0xbb89aa89159b6cc!2sMedico%20Pharmacy!5e0!3m2!1sen!2slk!4v1685546351531!5m2!1sen!2slk"
                    width="600" height="450" style="border:2px solid black; border-radius:20px" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </td>
        </tr>
    </table>

    <hr style="border:1px solid black; align:center; width:80%" />
    <table border=0>
        <tr>
            <th>Medigood Pharmacy</th>
            <th class="middle">Contact Info</th>
            <th colspan="4" class="middle" style="width:25%;">Social Media</th>

        </tr>
        <tr>
            <td rowspan="4" class="info" style="width:30%;">Contrary to popular belief, Lorem Ipsum is not simply
                random
                text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                old.
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
                more
                obscure Latin words.</td>
            <td class="middle"><i class="fa-solid fa-phone fa-sm" style="color: #121212;"></i>&nbsp;&nbsp;Tel : +9411243156
            </td>
        </tr>

        <tr>
            <td class="middle"><i class="fa-solid fa-location-dot fa-sm" style="color: #d42525;"></i>&nbsp;&nbsp;CNo.
                12/3, Galle Road,Colombo 7.
            </td>

            <td><i class="fa-brands fa-facebook fa-2xl" style="color: #005eff;"></i></td>
            <td><i class="fa-brands fa-twitter fa-2xl" style="color: #00acee;"></i></td>
            <td><i class="fa-brands fa-instagram fa-2xl" style="color: #8134b4;"></i></td>
            <td><i class="fa-brands fa-youtube fa-2xl" style="color: #c4302b;"></i></td>



        </tr>
        <tr>
            <td class="middle"><i class="fa-solid fa-envelope fa-sm"></i>&nbsp;&nbsp;medigoodpharmacy5.2@gmail.com</td>


        </tr>
    </table>


</body>

</html>