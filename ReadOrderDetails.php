<?php
include 'dbCon.php';

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp | Order Details</title>
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/productStyle.css">
    <link rel="stylesheet" href="Styles/cartStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <li><a href="#">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="OrderDetails.php">Payments</a></li>
            </ul>
            </div>
        </div>
    </nav>

    <section>
        <br><br><br>
        <h2>Order Details</h2>
        <br>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Payment Method</th>
                <th>Phone Number</th>
            </tr>
            <?php $total = 0; ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Address'] ?></td>
                <td><?= $row['PaymentMethod'] ?></td>
                <td><?= $row['Phone']?></td>

            </tr>
            
            <?php } ?>
            
        </table><br><br>
        <a href="Products.php"><button id="contBtn">CONTINUE SHOPPING</button></a>
        <br><br><br><br><br><br><br>
        <div class="end_text">THANK YOU FOR CHOOSING US!</div>
    </section>
    <br><br><br>
    <footer>
        <div class="footer">
            <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>
