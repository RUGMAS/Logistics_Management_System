<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Delivery Boy</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            animation: butterflyEffect 15s linear infinite;
        }

        /* Apply CSS to style the container */
  /* Apply CSS to style the container */
.container {
    max-width: 600px; /* Adjust the maximum width as needed */
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc; /* Add a border for visual separation */
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9; /* Add a background color */
}

/* Apply CSS to style the form groups (labels and inputs) */
.form-group {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Adjust the margin as needed for spacing */
}

.form-group label {
    flex: 1; /* Labels take 50% of the available space */
}

.form-group input {
    flex: 1; /* Inputs take 50% of the available space */
    margin-left: 10px; /* Add some spacing between the label and input */
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
        /* Add CSS for the blue button */
.blue-button {
    background-color: #007bff; /* Blue color for the background */
    color: #fff; /* White text color */
    border: none; /* Remove the border */
    padding: 10px 20px; /* Adjust padding as needed */
    border-radius: 5px; /* Add rounded corners */
    cursor: pointer; /* Add a pointer cursor on hover */
}

/* Optional: Add a hover effect for the button */
.blue-button:hover {
    background-color: #0056b3; /* Darker blue color on hover */
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
<?php
include('connection.php'); // Include your database connection code

if (isset($_POST['submit'])) {
    // Define variables to store form data
    $full_name = $license_number = $location = "";

    // Validate and retrieve data from the form
    if (isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
    }
    if (isset($_POST['license_number'])) {
        $license_number = $_POST['license_number'];
    }
    if (isset($_POST['location'])) {
        $location = $_POST['location'];
    }

    // Perform any additional data validation if needed

    // Insert data into the "delivery_boy" table
    $sql = "INSERT INTO delivery_boy (full_name, license_number, location) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $full_name, $license_number, $location);

        if ($stmt->execute()) {
            echo "Delivery boy added successfully.";
        } else {
            echo "Error adding delivery boy: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Delivery Boy</title>
</head>
<body>
<div class="container">
        <h1>Add Delivery Boy</h1>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name">
            </div>
            <br>
            <div class="form-group">
                <label for="license_number">License Number:</label>
                <input type="text" name="license_number">
            </div>
            <br>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location">
            </div>
            <br>
            <div class="form-group">
    <input type="submit" name="submit" value="Add Delivery Boy" class="blue-button">
</div>

        </form>
    </div>
</body>
</html>
