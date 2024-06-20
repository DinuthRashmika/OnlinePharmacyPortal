<?php
include 'connectdinuth.php';

if (isset($_POST['Submit'])) {
    $medicationId = $_POST['Ordersid'];
    $newStockQuantity = $_POST['Customeraddress'];

    // Use prepared statement to prevent SQL injection
    $sql = "UPDATE `medicine2` SET `Stock_Quantity` = ? WHERE `M_ID` = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $newStockQuantity, $medicationId);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: assistantpharmscist.php');
    } else {
        echo "Error updating stock quantity: " . mysqli_error($con);
    }
}
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

    .slogout {
        background-color: #2ECC71;
        padding: 3px 10px 3px 10px;
        border-radius: 10px;
        border: 0;
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

    .therdp {
        text-align: center;
        font-size: 40px;
        color: black;
        padding-top: 20px;
    }

    .orderdetails {
        background-color: beige;
        margin: 40px;
    }
    </style>
</head>

<body>
    <section class="fistdeco">
        <div class="left">
            <a href="assistantpharmscist.php" class="logo">HealthDoc</a>
        </div>

    </section>



    <h1 class="therdp">Available Orders</h1>
    <section class="orderdetails">
        <table class="tablea">
            <tr>
                <th>Medication ID</th>
                <th>Medication Name</th>
                <th>Expiry Date</th>
                <th>Stock Quantity</th>
                <th>Dose</th>
                <th>Price</th>
                <th>Operations</th>
            </tr>

            <?php
            if (isset($_GET['updateqty'])) {
                $medicationid = $_GET['updateqty'];

                $sql = "SELECT * FROM medicine2 WHERE M_ID = '$medicationid'";
                $result = mysqli_query($con, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['M_ID'];
                    $name = $row['M_Name'];
                    $expirydate = $row['Expiry_date'];
                    $stockquantity = $row['Stock_Quantity'];
                    $dose = $row['Dose'];
                    $price = $row['Price'];

                    echo '<form method="POST">
                        <tr>
                            <td><input type="text" name="Ordersid" style="width:90%;" value="' . $id. '"></td>
                            <td><input type="text" name="Customerid" style="width:90%;" value="' . $name. '"></td>
                            <td><input type="text" name="Customrname" style="width:90%;" value="' . $expirydate . '"></td>
                            <td><input type="text" name="Customeraddress" style="width:90%;" value="' . $stockquantity . '"></td>
                            <td><input type="text" name="Phonnumber" style="width:90%;" value="' . $dose. '"></td>
                            <td><input type="text" name="Medicineitem" style="width:90%;" value="' . $price . '"></td>
                            <td>
                                <button id="updat" type="submit" name="Submit" style="background-color:#2ECC71; border:0px; border-radius:10px; margin:10px; height:20px; width:80px;">Submit</button>
                            </td>
                        </tr>
                    </form>';
                }
            }
            ?>
        </table>
    </section>

    <script>
    document.getElementById("updat").onclick = function() {
        alert("Updated Successfully");
    }
    </script>
</body>

</html>