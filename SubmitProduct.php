<?php
include 'dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Check if the product already exists in the cart
    $check_sql = "SELECT * FROM cart WHERE product_id = '$product_id'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // If product exists, update quantity
        $update_sql = "UPDATE cart SET quantity = quantity + $quantity WHERE product_id = '$product_id'";
        $conn->query($update_sql);
    } else {
        // Insert new product into cart
        $insert_sql = "INSERT INTO cart (product_id, name, price, quantity) VALUES ('$product_id', '$name', '$price', '$quantity')";
        $conn->query($insert_sql);
    }

    // Redirect back to products page
    header("Location: Products.php");
    exit();
}
?>
