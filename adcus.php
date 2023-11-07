<!DOCTYPE html>
<html>
<head>
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

        /* Centered Container Styles */
        .container {
            max-width: 500px; /* Reduced container width */
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
<div class="container">
    <h1 class="brand-text">Customer Profile</h1>
    <form action="vieww.php" method="post" class="registration-form">
    <label for="email" style="text-align: left; display: block;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" class="form-input" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" class="form-input" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="Phone" class="form-input" required>

        <label for="address">Address:</label>
        <textarea id="address" name="Address" class="form-input" rows="4" required></textarea>

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

        <input type="submit" value="Submit" class="form-input" name="submit">
    </form>
</div>

</body>
</html>
