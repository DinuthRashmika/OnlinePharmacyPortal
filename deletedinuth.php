<?php

include 'connectdinuth.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM  `orderdetails` WHERE Order_ID = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: assistantpharmscist.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

?>
