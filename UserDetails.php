<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp | User Management</title>
    <link rel="icon" type="image/x-icon" href="Images/logo.png">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/userStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <li><a href="#">Home</a></li>
            <li><a href="Products.php">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="OrderDetails.php">Payments</a></li>
        </ul>
    </nav>
    <section>
        <div class="main_container">

            <div class="container">

                <div class="userheading">
                    <h1>User Management</h1><br>
                    <hr>
                </div>

                <div>
                    <h4>Personal Information</h4>
                </div><br>
            
                <form method = "POST" action = "submitUserDetails.php" name="form1" id="detailsForm">
                    <div>
                        <label for = "fnameLbl" class="lblFname">Full Name: </label><br>
                        <input type="text" name="fName" id="fName", placeholder="Enter Full Name" required/>
                    </div><br>

                    <div>
                        <label for = "dobLbl" class="lblDob">Date of Birth: </label><br>
                        <input type="date" name="dob" id="dob", placeholder="MM/DD/YYYY" required/>
                    </div><br>

                    <div>
                        <label for = "genLbl" class="lblGen">Gender: </label><br>
                        <input type="text" name="gender" id="gender", placeholder="Enter your gender (Male/Female)" required/>
                    </div><br>

                    <div>
                        <label for = "genLbl" class="lblGen">Marital Status: </label><br>
                        <input type="text" name="ms" id="ms", placeholder="Enter marital status (Signle/Married)" required/>
                    </div><br>

                    <div>
                        <label for = "phoneLbl" class="lblPhone">Phone Number: </label><br>
                        <input type="text" name="tel" id="tel", placeholder="Enter phone number" maxLength = 10 required/>
                    </div><br>

                    <div>
                        <label for = "emailLbl" class="lblemail">Email: </label><br>
                        <input type="email" name="email" id="email", placeholder="Enter Email" required/>
                    </div><br>
            
                    <div>
                        <button type="Submit" value="Sign in" class="signupBtn">SUBMIT DETAILS</button><br>
                    </div>

                    <div>
                        <input type="reset" class="clearBtn" value="CLEAR DETAILS"><br>
                    </div><br>
            
                </form>
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