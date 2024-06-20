<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
    body {
        background-image: url("back.jpg");
    }

    .Signuparea {

        width: 360px;
        height: 620;
        margin: auto;
        background-color: #ffe6f9;
        border-radius: 3px;

    }

    .bottom {
        margin-top: 50px;
    }

    .loginarea {
        width: 360px;
        height: 300px;
        margin: auto;
        background-color: #76448A;
        border-radius: 3px;


    }

    h1 {
        text-align: center;
        padding-top: 15px;
    }

    form {

        width: 300px;
        margin-left: 20px;

    }

    form label {
        display: flex;
        margin-top: 20px;
        font-size: 18px;
        color: black;

    }

    form input {
        width: 100%;
        padding: 7px;
        border: none;
        border: 1px solid gray;
        border-radius: 6px;
        outline: none;
    }

    input[type="button"] {
        width: 300px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color: green;
        color: white;
        font-size: 18px;
    }

    p {
        text-align: center;
        padding-top: 20px;
        font-size: 15px;
    }

    .link {
        text-align: center;
        color: black;
        font-size: 15px;
        margin-top: -10px;
    }

    .link2 {
        text-align: center;
        color: black;
        font-size: 15px;
        margin-top: -10px;

    }

    .btn:hover {
        background: #2ecc71;
    }

    body{
    padding:50px;
}
.container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}
    </style>

    <title> Login</title>
    <script src="login.js"></script>
    <h4>
        <?php

            error_reporting(0);
            session_start();
            session_destroy();

            echo $_SESSION['loginMessage'];


            ?>
    </h4>
    <?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "interface.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: home.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <a href="logreg\login.php">If you are staff member</a><br>
            <a href="home.php">Back to Home Page</a>

        </form>

    </div>
</body>

</html>