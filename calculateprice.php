<?php
include 'connectdinuth.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>HealthDoc</title>

    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-image: url("LOGO.jpg");
    }


    .fistdeco {
        background-color: #AF7AC5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .logo {
        font-size: 75px;
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .sphoto h4 {
        font-size: 25px;
        padding-top: 20px;
    }

    .disbio {
        font-size: 15px;
        padding-top: 20px;
        text-align: justify;
    }

    .tablea {
        width: 100%;
        height: 100px;
        margin-top: 40px;
    }

    .tablea,
    tr,
    th,
    td {
        border: 1px solid black;
    }

    .tableas {
        width: 100%;
    }

    .tableas,
    tr,
    th,
    td {
        border: 1px solid black;
    }

    .tableas tr th {
        width: 15%;
    }

    .orderdetails {
        background-color: beige;
        margin: 40px;
    }

    .super {
        text-align: center;
        font-size: 40px;
        color: black;
        padding-top: 20px;
    }
    </style>
</head>

<body>
    <section class="fistdeco">
        <div class="left">
            <a href="assistantpharmscist.php" class="logo">HealthDoc</a>
        </div>

    </section>



    <h1 class="super">Available Orders</h1>
    <section class="orderdetails">
        <table class="tablea">
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Medicine</th>
                <th>Calculate Prices</th>
            </tr>

            <?php
            if (isset($_GET['orderid'])) {
                $orderid = $_GET['orderid'];

                $sql = "SELECT * FROM orderdetails WHERE Order_ID = '$orderid'";
                $result = mysqli_query($con, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $cid = $row['Customer_ID'];
                    $cname = $row['Customer_Name'];
                    $address = $row['Address'];
                    $pnumber = $row['Phone_Number'];
                    $medicine = $row['Medicine'];

                    echo '<form method="POST">
                    <tr>
                        <td><input type="text" name="ordersid" style="width:90%;" value="' . $orderid . '"></td>
                        <td><input type="text" name="customerid" style="width:90%;" value="' . $cid . '"></td>
                        <td><input type="text" name="customrname" style="width:90%;" value="' . $cname . '"></td>
                        <td><input type="text" name="customeraddress" style="width:90%;" value="' . $address . '"></td>
                        <td><input type="text" name="phonnumber" style="width:90%;" value="' . $pnumber . '"></td>
                        <td><input type="text" name="medicineitem" style="width:90%;" value="' . $medicine . '"></td>
                        <td>Rs: <input name="pris" type="text" style="width:80px;" required> 
                            <button id="button"  type="submit" name="submit" style="background-color:#2ECC71; background-color: #D2B4DE;border:0px; border-radius:10px; margin:10px; height:20px; width:80px;">Submit</button>
                        </td>
                    </tr>
                </form>';
                

                    if (isset($_POST['submit'])) {
                        $Norderid = $_POST['ordersid'];
                        $Ncustomer = $_POST['customerid'];
                        $Ncname = $_POST['customrname'];
                        $Naddress = $_POST['customeraddress'];
                        $Nphonenumber = $_POST['phonnumber'];
                        $Nmedicine = $_POST['medicineitem'];
                        $Nprice = $_POST['pris'];

                        $sql = "INSERT INTO finalordetails (orderid, customerid, customername, address, contactno, medicine, m_price) 
                            VALUES ('$Norderid', '$Ncustomer', '$Ncname', '$Naddress', '$Nphonenumber', '$Nmedicine', '$Nprice')
                            ON DUPLICATE KEY UPDATE customerid = '$Ncustomer', customername = '$Ncname', address = '$Naddress', contactno = '$Nphonenumber', medicine = '$Nmedicine', m_price = '$Nprice'";

                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            // Data inserted or updated successfully, redirect to the new page with order details
                            header('Location: assistantpharmscist.php');
                            exit;
                        } else {
                            echo "Error: " . mysqli_error($con);
                        }
                    }
                }
            }
            ?>

        </table>
    </section>

    <script>
    document.getElementById("button").onclick = function() {
        alert("Price Entered Successfully");
    }
    </script>
</body>

</html>