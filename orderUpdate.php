<?php
include_once 'dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["oid"], $_POST["fName"], $_POST["add"], $_POST["pay"], $_POST["tel"])) {

        $orderId = $_POST["oid"];
        $mFname = $_POST["fName"];
        $mAdd = $_POST["add"];
        $mPay = $_POST["pay"];
        $mTel = $_POST["tel"];

        // Use prepared statements to prevent SQL injection
        $sql = "UPDATE orders SET Name = ?, Address = ?, PaymentMethod = ?, Phone = ? WHERE oid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $mFname, $mAdd, $mPay, $mTel, $orderId);

        if ($stmt->execute()) {
            echo "<script>alert('Order details updated successfully!'); window.location.href='ReadOrderDetails.php';</script>";
            exit();
        } else {
            die("Error executing query: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Error: Missing required fields.");
    }
}

$conn->close();
?>