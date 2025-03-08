<?php
include 'dbCon.php';

// Check if an item ID is provided
if (isset($_GET['id'])) {
    $cart_id = $_GET['id'];

    // Fetch the current product details
    $sql = "SELECT * FROM cart WHERE cid = '$cart_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        echo "Product not found!";
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/productStyle.css">
    <link rel="stylesheet" href="Styles/userStyle.css">
    <title>GearUp | Updating Products</title>
    <link rel="stylesheet" href="Styles/style.css">
    <!--Internal Styles was applied-->
    <style>
        section{
            background: url('./Images/BGImage02.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }
        .updateContainer {
            width: 90%;
            margin: 20px auto;
            padding: 30px;
            border-radius: 10px;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.647);
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-reorder"></i>
        </label>
        <div class="navBar">
            <div>
            <ul>
                <li><a href="UserDetails.php">Home</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="OrderDetails.php">Payments</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <section>
        <br><br><br>
        <div class="updateContainer">
            <h2>Update Product Quantity</h2>
            <br><br>
            <hr>
            <form action="updateCart.php" method="POST">
                <br><br>
                <input type="hidden" name="cart_id" value="<?= $row['cid'] ?>">
                <p><strong>Product:</strong> <?= $row['name'] ?></p>
                <br>
                <p><strong>Price:</strong> LKR <?= $row['price'] ?></p>
                <br>
                <label for="quantity">New Quantity:</label><br><br>
                <input type="number" name="quantity" id="qty" value="<?= $row['quantity'] ?>" min="1" required>
                <br><br><br><br>
                <input type="submit" class="signupBtn" value="UPDATE QUANTITY">
            </form>
            <br>
            <a href="cart.php"><button class="clearBtn">BACK TO CART</button></a>
        </div>
    </section>

    <footer>
        <div class="footer">
            <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>
