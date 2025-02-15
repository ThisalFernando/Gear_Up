<?php
    include_once 'dbCon.php';
?>

<?php

    $mFname = $_POST["fName"];
    $mDob = $_POST["dob"];
    $mGender = $_POST["gender"];
    $mMs = $_POST["ms"];
    $mTel = $_POST["tel"];
    $mEmail = $_POST["email"];

    //Insert Data into patients table
    $sql = "INSERT INTO user(fName, dob, gender, maritalstatus, phone, email)VALUES('$mFname', '$mDob', '$mGender', '$mMs', '$mTel', '$mEmail')";

    //Check the correctness
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Record Inserted Successfully')</script>";
    }
    else{
        echo "<script>alert('Error in Insertion')</script>";
    }

    //Navigate to login page
    header("Location:Products.php");

    //close the connection
    mysqli_close($conn);

?>