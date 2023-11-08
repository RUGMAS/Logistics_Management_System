
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Customer Profile</title>
    <style>
        /* Global Styles */
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
        /* Centered Container Styles */
        .container {
            max-width: 800px; /* Reduced container width */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Brand Text Styles */
        .brand-text {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #247BA0; /* Dark blue */
            margin-bottom: 20px;
        }

        /* Form Styles */
        .registration-form {
            text-align: center;
        }

        /* Input Field Styles */
        .form-input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Error Message Styles */
        .error-message {
            color: #FF0000; /* Red */
        }

        /* Login Link Styles */
        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        /* Role-Specific Section Styles */
        .role-specific {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }

        /* Role-Specific Input Field Styles */
        .role-specific input {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        footer {
    background-color: #0099cc; /* Dark Blue */
    color: #fff;
    text-align: center;
    padding: 0.1rem 0; /* Reduce the top and bottom padding to 0.5rem */
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
<?php
require_once('connection.php');
session_start();


if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['Address'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $address = $_POST['Address'];
    
    // Insert the data into the "customer" table
    $sql = "INSERT INTO `customerdata`(`c_id`, `Name`, `Email`, `PhoneNumber`, `Address`, `ShipmentDate`, `DeliveryBoy`, `PackageCategory`, `HeightInCM`, `WeightInKG`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')"

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "<script>alert('Data inserted into the customer table successfully!');</script>";
    } else {
        // Error occurred while inserting data
        echo "<script>alert('Error inserting data into the customer table: " . $conn->error . "');</script>";
    }
}
?>

    </header>
<div class="container">
    <h1 class="brand-text">Order Placement</h1>
    <form action="vieww.php" method="post" class="registration-form">
    <label for="email" style="text-align: left; display: block;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" class="form-input" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" class="form-input" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="Phone" class="form-input" required>

        <label for="address">Delivery Address:</label>
        <textarea id="address" name="Address" class="form-input" rows="4" required></textarea>

        <label for="phone">Package:</label>
        <input type="tel" id="package" name="package" class="form-input" required>

        <label for="phone">Quantity:</label>
        <input type="tel" id="quantity" name="quantity" class="form-input" required>

        <label for="shipment_date">Shipment Date:</label>
        <input type="date" id="shipment_date" name="ShipmentDate" class="form-input" required>

        <label for="delivery_boy">Delivery Boy:</label>
        <select id="delivery_boy" name="DeliveryBoy" class="form-input">
            <?php
            include('connection.php'); // Include your database connection code

            $sql = "SELECT full_name FROM delivery_boy";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['full_name'] . "'>" . $row['full_name'] . "</option>";
                }
            } else {
                echo "<option value=''>No delivery boys available</option>";
            }

            $conn->close();
            ?>
        </select>

        <label for="package_category">Package Category:</label>
        <select id="package_category" name="PackageCategory" class="form-input">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="Height" class="form-input" required>

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="Weight" class="form-input" required>

        <button type="submit" class="btn">Place Order</button>
    </form>
</div>
<br><br><br>
<footer>
        <p>&copy; 2023 Logistics Management System</p>
    </footer>
</body>
</html>
