<?php
// Start a PHP session
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
             body {
        font-family: Arial, sans-serif;
        background-color: #e6f7ff; /* Light Blue-Green */
        background-image: url("images/viewpage.jpg");
        padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
        animation: butterflyEffect 15s linear infinite;
    }
        header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #0099cc; /* Dark Blue */
    color: #fff;
    padding: 0.5rem 0; /* Reduced padding to reduce the height */
    z-index: 70;
}


nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.logo {
    font-size: 1.5rem;
}

ul {
    list-style: none;
    display: flex;
}

li {
    margin-right: 1rem;
}

a {
    text-decoration: none;
    color: #fff;
}

/* Header Icons */
.header-icons {
    display: flex;
    align-items: center;
}

.header-icons i {
    margin-right: 1rem;
}

/* Header Login Link */
.header-login a {
    color: #fff;
    text-decoration: none;
    margin-right: 1rem;
}
    h2 {
        margin: 0;
    }
    form {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    h2 {
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') no-repeat right 10px center;
    }

   
        /* Login button */
        .login-button {
            background-color: #247BA0; /* Dark blue button background color */
            color: #fff; /* White button text color */
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .center-container {
  text-align: center;
}

.login-button {
  /* Add any other styles you want for your button here */
}

        /* Login button hover effect */
        .login-button:hover {
            background-color: #70C1B3; /* Light green button background color on hover */
        }
    /* Button Hover Effect */
.more-details-button:hover {
    background-color: #70C1B3; /* Background color on hover */
}
.right-container {
    float: right; /* Float the container to the right */
    margin-right: 20px; /* Add some margin for spacing */
}

.login-button {
    display: inline-block; /* Display the link as a block element */
    padding: 10px 20px; /* Add padding for better visual appearance */
    text-decoration: none; /* Remove underline from the link */
    color: #ffffff; /* Set the text color */
    background-color: #3498db; /* Set the background color */
    border-radius: 5px; /* Add rounded corners */
    transition: background-color 0.3s ease; /* Add a smooth transition effect on hover */
}

.login-button:hover {
    background-color: #2980b9; /* Change background color on hover */
}

.login-button i {
    margin-right: 5px; /* Add some space between the icon and text */
}
.container {
    display: flex;
    justify-content: space-between; /* Adjust as needed */
}

.left-container,
.right-container {
    margin: 0; /* Reset margin to ensure containers are flush against each other */
}

.login-button {
    padding: 10px 30px; /* Adjust padding for the buttons */
}

         /* Keyframes for the butterfly effect animation */
         @keyframes butterflyEffect {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
         }
  </style>
  <script>
    function showBranchInput() {
      var deliveryType = document.getElementById('deliveryType');
      var branchInput = document.getElementById('branchInput');

      if (deliveryType.value === 'Pickup') {
        branchInput.style.display = 'block';
      } else {
        branchInput.style.display = 'none';
      }
    }
  </script>
</head>
<body>
<header>
    <nav>
    <div class="logo">Logistics Management System</div>
    <ul>
        <li><a href="landing page.php">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="header-login">
        <a href="index.php">Logout</a>
    </div>
    <div class="header-icons">
        <a href="changepropass.php">
            <i class="fas fa-user-circle"></i>
        </a>
        <a href="#">
            <h4><?php echo $email; ?>!</h4>
        </a>
    </div>
</nav>
    </header>
    <?php
require_once('connection.php');
$successMessage = "";
$errorMessage = "";

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST["Name"];
    $address = $_POST["Address"];
    $state = $_POST["State"];
    $email = $_POST["Email"];
    $contact = $_POST["Phone"];
    $postalCode = $_POST["PostalCode"];
    $itemCategory = $_POST["ItemCategory"];
    $packageCount = $_POST["PackageCount"];
    $weight = $_POST["Weight"];
    $price = $_POST["Price"];
    $paymentCategory = $_POST["PaymentCategory"];
    $totalAmount = $_POST["TotalAmount"];

    $sql = "INSERT INTO OrderDetails (name, address, state, email, contact, postal_code, item_category, package_count, weight, price, payment_category, total_amount)
            VALUES ('$name', '$address', '$state', '$email', '$contact', '$postalCode', '$itemCategory', '$packageCount', '$weight', '$price', '$paymentCategory', '$totalAmount')";

    if ($conn->query($insertSql) === TRUE) {
        $successMessage = "New record created successfully in OrderDetails table";
    } else {
        $errorMessage = "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
?>
                                                                                                                                                        
    <form>
        <h2><i class="fas fa-user"></i> Payment Details</h2><br>
 <label for="itemType">
 <i class="fas fa-shopping-bag fa-icon"></i> Payment Category:
</label>
<select class="form-input" name="paymentType" id="paymentType">
    <option value="" disabled selected>Select Payment Type</option>
    <option value="Credit Card">Credit Card</option>
    <option value="Debit Card">Debit Card</option>
    <option value="Net Banking">Net Banking</option>
    <option value="UPI">UPI</option>
    <option value="Wallet">Wallet</option>
  </select>
    <br>
<label for="price">
<i class="fas fa-rupee-sign fa-icon"></i> Total Amount:
</label>
<input type="text" name="price" oninput="validatePrice(this)" required>
<div class="container">
    <!-- Left Container -->
    <div class="left-container">
    <a href="php" class="login-button">
        <i class="fas fa-chevron-right"></i> SUBMIT
    </a>
</div>
</div>
<br>
</form>
</body>
</html>