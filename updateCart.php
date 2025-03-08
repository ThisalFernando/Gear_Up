<?php
include 'dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_id = $_POST['cart_id'];
    $new_quantity = $_POST['quantity'];

    // Update quantity in the cart table
    $sql = "UPDATE cart SET quantity = '$new_quantity' WHERE cid = '$cart_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Quantity updated successfully');
                window.location.href='cart.php';
              </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
