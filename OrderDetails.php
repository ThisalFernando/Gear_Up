<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp | Order Management</title>
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/userStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmSubmit(form) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to submit order?",
                icon: 'question',
                buttons: true,
                dangerMode: true,
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: 'Yes, Submit!',
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
                    form.submit();
                }
            });

            return false; 
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-reorder"></i>
        </label>
        <label class="logo"><img src="Images/logo.png"></label>
        <ul>
            <li><a href="UserDetails.php">Home</a></li>
            <li><a href="Products.php">Products</a></li>
            <li><a href="cart.php">Payments</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>
    <section>
        <div class="main_container">

            <div class="container">

                <div class="userheading">
                    <h1>Order Management</h1><br>
                    <hr>
                </div>

                <div>
                    <h4>Order Information</h4>
                </div><br>
            
                <form method = "POST" action = "submitOrderDetails.php" name="form1" id="detailsForm" onsubmit="return confirmSubmit(this)">
                    <div>
                        <label for = "fnameLbl" class="lblFname">Name of buyer: </label><br>
                        <input type="text" name="fName" id="fName", placeholder="Enter Full Name" required/>
                    </div><br>

                    <div>
                        <label for = "addLbl" class="lbladd">Address: </label><br>
                        <input type="text" name="add" id="add", placeholder="Enter address" required/>
                    </div><br>

                    <div>
                        <label for = "payLbl" class="payGen">Payment Method: </label><br>
                        <input type="text" name="pay" id="pay", placeholder="Enter payment method (Cash/Card)" required/>
                    </div><br>

                    <div>
                        <label for = "phoneLbl" class="lblPhone">Phone Number: </label><br>
                        <input type="text" name="tel" id="tel", placeholder="Enter phone number" maxLength = 10 required/>
                    </div><br>
            
                    <div>
                        <button type="Submit" value="Submit Order" class="signupBtn">SUBMIT ORDER</button><br>
                    </div>

                    <div>
                        <input type="reset" class="clearBtn" value="CLEAR ORDER"><br>
                    </div><br>
            
                </form>
                <hr><br><br>
                <center><h4>Access to the order details</h4></center>
                <a href="ReadOrderDetails.php"><button class="signupBtn">ACCESS TO ORDER DETAILS</button></a>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer">
        <h4>Copyright © 2024 GearUp | All rights reserved. | Powered by <a href="">Flexwalkers</a></h4>
        </div><br><br>
    </footer>
</body>
</html>