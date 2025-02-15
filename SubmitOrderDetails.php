<?php
    include_once 'dbCon.php';
?>

<?php

    $mFname = $_POST["fName"];
    $mAdd = $_POST["add"];
    $mPay = $_POST["pay"];
    $mTel = $_POST["tel"];

    //Insert Data into patients table
    $sql = "INSERT INTO orders(Name, Address, PaymentMethod, Phone)VALUES('$mFname', '$mAdd', '$mPay', '$mTel')";

    //Check the correctness
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Record Inserted Successfully')</script>";
    }
    else{
        echo "<script>alert('Error in Insertion')</script>";
    }

    //Navigate to login page
    header("Location:OrderDetails.php");

    //close the connection
    mysqli_close($conn);

?>