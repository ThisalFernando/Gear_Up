<?php
include 'dbCon.php';

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp | Cart</title>
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/productStyle.css">
    <link rel="stylesheet" href="Styles/cartStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Scripts/CartDetailsValidate.js"></script>
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
        <h2>Your Shopping Cart</h2>
        <br>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php $total = 0; ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td>LKR <?= $row['price'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>LKR <?= $row['price'] * $row['quantity'] ?></td>
                <td>
                    <a class='updateBtn' href="UpdateProduct.php?id=<?= $row['cid'] ?>">Update</a>
                    <a class='deleteBtn' href="DeleteProduct.php?cid=<?= $row['cid'] ?>">Delete</a>
                </td>
            </tr>
            <?php $total += $row['price'] * $row['quantity']; ?>
            <?php } ?>
            <tr>
                <td colspan="3"><strong>Total:</strong></td>
                <td>LKR <?= $total ?></td>
                <td></td>
            </tr>
        </table><br><br>
        <button id="contBtn" onclick="confirmShopping()">CONTINUE SHOPPING</button>
        <br><br>
        <a href="OrderDetails.php"><button id="contBtn">SUBMIT ORDER DETAILS</button></a><br><br><br>

    </section>

    <footer>
        <div class="footer">
            <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>
