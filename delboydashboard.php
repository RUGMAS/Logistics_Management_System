<!DOCTYPE html>
<html>
<head>
    <title>Delivery Boy</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            animation: butterflyEffect 15s linear infinite;
        }

        /* Centered Container Styles */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
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
    $order_id = $_POST["OrderID"];
    $customer_name = $_POST["CustomerName"];
    $delivery_address = $_POST["Address"];
    $expected_delivery_Date = $_POST["ExpectedDeliveryDate"]; // Fix the field name
    $package_Type = $_POST["PackageType"];

    $insertSql = "INSERT INTO orders (OrderID, CustomerName, Address, ExpectedDeliveryDate, PackageType)
                 VALUES ('$order_id', '$customer_name', '$delivery_address', '$expected_delivery_Date', '$package_Type')";

    if ($conn->query($insertSql) === TRUE) {
        $successMessage = "New record created successfully in orders table";
    } else {
        $errorMessage = "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
?>
    <div class="container">
        <h1>OrderDetails</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Delivery Address</th>
                    <th>Expected Delivery Date</th>
                    <th>Package Type</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add customer data rows here -->
                <?php
                    $sql = "SELECT * FROM `orders` ";
                    $result = $conn->query($sql);

                    // Check if the query was successful
                    if ($result === false) {
                        die("Query failed: " . $conn->error);
                    }
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["OrderID"]?></td>
                    <td><?php echo $row["CustomerName"]?></td>
                    <td><?php echo $row["PhoneNumber"]?></td>
                    <td><?php echo $row["Address"]?></td>
                    <td><?php echo $row["ExpectedDeliveryDate"]?></td>
                    <td><?php echo $row[" PackageType"]?></td>
                </tr>
                <!-- Add more customer data rows as needed -->
                <?Php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>


