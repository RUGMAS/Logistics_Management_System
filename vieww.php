<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; 
            
        }

        /* Centered Container Styles */
        .container {
            max-width: 1000px; /* Increased container width */
            margin: 0 auto;
            background-color: #fff;
            padding: 60px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #247BA0; /* Header background color */
            color: #fff;
        }
     .login-container {
    max-width: 600px; /* Increase the maximum width to 600px */
    margin: 0 auto;
    background-color: #fff; /* White background */
    padding: 35px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center; /* Center the contents horizontally */
}

    
        /* Brand text */
        .brand-text {
            font-size: 24px;
            font-weight: bold;
            color: #247BA0; /* Dark blue text color */
            margin-bottom: 20px;
        }

        /* Header 2 */
        h2 {
            font-size: 1.5rem;
            color: #247BA0; /* Dark blue text color */
            font-family: 'YourDesiredFont', Cooper Black;
        }
        header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #0099cc; /* Dark Blue */
    color: #fff;
    padding: 1rem 0;
    z-index: 100;
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

        /* Login form */
        .login-form {
            text-align: left; /* Left-align form elements */
        }

        /* Form input fields */
        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Error messages */
        .error-message {
            color: #FF0000; /* Red error message color */
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

        /* Forgot password and registration links */
        .registration-link {
            text-align: center;
            margin-top: 10px;
            color: #247BA0; /* Dark blue link color */
        }

        /* Links within the text */
        .registration-link a {
            text-decoration: none;
            color: #247BA0; /* Dark blue link color */
        }
        /* Button Styles */
.more-details-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #247BA0; /* Background color */
    color: #fff; /* Text color */
    border: none;
    border-radius: 5px; /* Rounded corners */
    cursor: pointer;
    font-size: 16px; /* Font size */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

/* Button Hover Effect */
.more-details-button:hover {
    background-color: #70C1B3; /* Background color on hover */
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

<?php
require_once('connection.php');
$successMessage = "";
$errorMessage = "";

if (isset($_POST['submit'])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phoneNumber = $_POST["Phone"];
    $address = $_POST["Address"];
    $shipmentDate = $_POST["ShipmentDate"];
    $deliveryBoy = $_POST["DeliveryBoy"];
    $packageCategory = $_POST["PackageCategory"];
    $height = $_POST["Height"];
    $weight = $_POST["Weight"];
    $packagePrice = $_POST["PackagePrice"];  // Changed from $Package Price to $packagePrice

    $insertSql = "INSERT INTO CustomerData (Name, Email, PhoneNumber, Address, ShipmentDate, DeliveryBoy, PackageCategory, HeightInCM, WeightInKG, PackagePrice)
                 VALUES ('$name', '$email', '$phoneNumber', '$address', '$shipmentDate', '$deliveryBoy', '$packageCategory', $height, $weight, $packagePrice)";

    if ($conn->query($insertSql) === TRUE) {
        $successMessage = "New record created successfully in CustomerData table";
    } else {
        $errorMessage = "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <!-- Add your CSS styles here -->
</head>
<body>

<div class="container">
    <h1>Customer Details</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Shipment Date</th>
                <th>Delivery Boy</th>
                <th>Package Category</th>
                <th>Height (cm)</th>
                <th>Weight (kg)</th>
                <th>Package Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add customer data rows here -->
            <?php
                $sql = "SELECT * FROM `customerdata` ";
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result === false) {
                    die("Query failed: " . $conn->error);
                }
                while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["Name"]?></td>
                <td><?php echo $row["Email"]?></td>
                <td><?php echo $row["PhoneNumber"]?></td>
                <td><?php echo $row["Address"]?></td>
                <td><?php echo $row["ShipmentDate"]?></td>
                <td><?php echo $row["DeliveryBoy"]?></td>
                <td><?php echo $row["PackageCategory"]?></td>
                <td><?php echo $row["HeightInCM"]?></td>
                <td><?php echo $row["WeightInKG"]?></td>
                <td><?php echo $row["PackagePrice"]?></td>  <!-- Changed from Package Price to PackagePrice -->
            </tr>
            <!-- Add more customer data rows as needed -->
            <?Php
                }
            ?>
        </tbody>
    </table>
</div>
<br>
<br>
<div class="center-container">
    <a href="index.php" class="more-details-button">Back</a>
</div>

</body>
</html>

