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
    <script>
        function confirmPayment() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to procees payment?",
                icon: 'question',
                buttons: true,
                dangerMode: true,
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: 'Yes, Proceed!',
                cancelButtonText: 'Cancel', 
                buttonsStyling: false,// Disable default SweetAlert2 button styling
                didRender: () => {
                const confirmButton = Swal.getConfirmButton();
                const cancelButton = Swal.getCancelButton();
            
                // Apply styles directly using JavaScript
                confirmButton.style.backgroundColor = '#015f30';
                confirmButton.style.color = 'white';
                confirmButton.style.width = '450px';
                confirmButton.style.border = 'none';
                confirmButton.style.borderRadius = '5px';
                confirmButton.style.padding = '10px';
                confirmButton.style.fontWeight = 'bold';
                confirmButton.style.fontSize = 'medium';
                confirmButton.style.cursor = 'pointer';

                cancelButton.style.backgroundColor = 'red'; 
                cancelButton.style.color = 'white';
                cancelButton.style.width = '450px';
                cancelButton.style.border = 'none';
                cancelButton.style.borderRadius = '5px';
                cancelButton.style.padding = '10px';
                cancelButton.style.fontWeight = 'bold';
                cancelButton.style.fontSize = 'medium';
                cancelButton.style.cursor = 'pointer'
                cancelButton.style.marginTop = '10px';
                },
            })
            .then((result) =>{
                if(result.isConfirmed){
                    window.location.href = '#';
                }
            });

            return false; 
        }
        function confirmShopping() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to continue shopping?",
                icon: 'question',
                buttons: true,
                dangerMode: true,
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: 'Yes, Continue!',
                cancelButtonText: 'Cancel', 
                buttonsStyling: false,// Disable default SweetAlert2 button styling
                didRender: () => {
                const confirmButton = Swal.getConfirmButton();
                const cancelButton = Swal.getCancelButton();
            
                // Apply styles directly using JavaScript
                confirmButton.style.backgroundColor = '#015f30';
                confirmButton.style.color = 'white';
                confirmButton.style.width = '450px';
                confirmButton.style.border = 'none';
                confirmButton.style.borderRadius = '5px';
                confirmButton.style.padding = '10px';
                confirmButton.style.fontWeight = 'bold';
                confirmButton.style.fontSize = 'medium';
                confirmButton.style.cursor = 'pointer';

                cancelButton.style.backgroundColor = 'red'; 
                cancelButton.style.color = 'white';
                cancelButton.style.width = '450px';
                cancelButton.style.border = 'none';
                cancelButton.style.borderRadius = '5px';
                cancelButton.style.padding = '10px';
                cancelButton.style.fontWeight = 'bold';
                cancelButton.style.fontSize = 'medium';
                cancelButton.style.cursor = 'pointer'
                cancelButton.style.marginTop = '10px';
                },
            })
            .then((result) =>{
                if(result.isConfirmed){
                    window.location.href = 'Products.php';
                }
            });

            return false; 
        }
    </script>
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
                <th>Actions</th>
            </tr>
            <?php $total = 0; ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Address'] ?></td>
                <td><?= $row['PaymentMethod'] ?></td>
                <td><?= $row['Phone']?></td>
                <td>
                    <a class='updateBtn' href="UpdateOrder.php?oid=<?= $row['oid'] ?>">Update</a>
                    <a class='deleteBtn' href="DeleteOrder.php?oid=<?= $row['oid'] ?>">Delete</a>
                </td>
            </tr>
            
            <?php } ?>
            
        </table><br><br>
        <button id="contBtn" onclick="confirmShopping()">CONTINUE SHOPPING</button>
        <br><br>
        <a href="#"><button id="contBtn" onclick="confirmPayment()">CONFIRM PAYMENT</button></a>
        <br><br><br><br><br>
        <div class="end_text"><b>THANK YOU FOR CHOOSING US!</b></div>
        <br><br><br><br><br><br>
    </section>
    
    <footer>
        <div class="footer">
            <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>
