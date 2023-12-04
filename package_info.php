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
<?php
include('connection.php');

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_category = $package_count = $weight = $price = "";

    // Use $_POST directly instead of isset($_POST['...']) ? ... : ''
    $item_category = htmlspecialchars($_POST['item_category'] ?? '');
    $package_count = htmlspecialchars($_POST['itemCount'] ?? '');
    $weight = htmlspecialchars($_POST['weight'] ?? '');
    $price = htmlspecialchars($_POST['price'] ?? '');

    // Validate input (add more validation if needed)
    if (empty($item_category) || empty($package_count) || empty($weight) || empty($price)) {
        echo "All fields are required.";
    } else {
        // Insert into the packagedetail2 table
        $sql = "INSERT INTO packagedetail2 (item_category, package_count, weight, price) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Adjust the format specifier based on the data types
            $stmt->bind_param("sssd", $item_category, $package_count, $weight, $price);

            if ($stmt->execute()) {
                echo "Package details added successfully.";
            } else {
                echo "Error adding package details: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
    $conn->close();
}
?>

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
  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2><i class="fas fa-user"></i> Package Details</h2><br>

    <label for="itemType">
        <i class="fas fa-box fa-icon"></i> Item Category:
    </label>
    <select class="form-input" name="item_category" id="item_categor" required>
        <option value="" disabled selected>Select Item Category</option>
        
        <option value="Dress">Dress</option>
        <option value="Food">Food</option>
        <option value="Electronics">Electronics</option>
        <option value="Books">Books</option>
        <option value="Home Decor">Home Decor</option>
        <option value="Beauty">Beauty</option>
    </select>
    <br>

    <label for="packageCount">
        <i class="fas fa-cubes fa-icon"></i> Package Count:
        <input type="number" name="itemCount" id="itemCount" min="0" max="10" oninput="validateItemCount(this)" required>
    </label>
  
    <label for="weight">
        <i class="fas fa-balance-scale fa-icon"></i> Weight(kg):
    </label>
    <input type="text" name="weight" id="weightInput" oninput="validateWeight(this)" required>
    <br>

    <label for="price">
        <i class="fas fa-rupee-sign fa-icon"></i> Total Amount:
    </label>
    <input type="text" name="price" oninput="validatePrice(this)" required>
    <br>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    <div class="right-container">
        <a href="dashboard.php" class="login-button">
            <i class="fas fa-arrow-left"></i> BACK
        </a>
    </div>
    <br><br>
    <button id="rzp-button1">Make Payment</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
var options = {
    "key": "rzp_test_rV45cYN1u5Evk7", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Ad_Sol(Solution for Ads)",
    "description": "Test Transaction",
    "image": "https://example.com/",
    "handler":function(response){
        console.log(response);

    }
};

var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
</div>
<br>
</form>
</body>
</html>