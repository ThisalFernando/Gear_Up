<?php
include_once 'dbCon.php';

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp | Products</title>
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/productStyle.css">
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
        <br><br>
        <div class="container">
            <div class="heading">
                Welcome to GearUp Online Store
            </div>
            <br><br>
            <div class="main_container">
            <div>
                <h1>Available Products</h1><br>
                <hr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                <div class="product">
                    <img src="images/<?= $row['Image'] ?>" alt="<?= $row['Name'] ?>">
                    <h2><?= $row['Name'] ?></h2>
                    <p><?= $row['Description'] ?></p>
                    <p><strong>Price:</strong> LKR <?= $row['Price'] ?></p>
                    <form action="SubmitProduct.php" method="POST">
                        <input type="hidden" name="product_id" value="<?= $row['pid'] ?>">
                        <input type="hidden" name="name" value="<?= $row['Name'] ?>">
                        <input type="hidden" name="price" value="<?= $row['Price'] ?>"><br>
                        <input type="number" name="quantity" id = "qty" value="1" min="1"><br><br>
                        <button type="submit" id="submitBtn">ADD TO CART</button>
                    </form>
                </div>
                <?php
                    }
                } else {
                    echo "<p>No products available</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
        </div>
    </section>

    <br><br>

    <footer>
        <div class="footer">
            <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>
