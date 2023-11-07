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

$errors = array(); // Create an array to store validation errors

if (isset($_POST['submit'])) {
    // Define variables to store form data
    $full_name = $license_number = $location = "";

    // Validate and retrieve data from the form
    if (isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
        if (empty($full_name)) {
            $errors[] = "Full Name is required.";
        }
    }

    if (isset($_POST['license_number'])) {
        $license_number = $_POST['license_number'];
        if (empty($license_number)) {
            $errors[] = "License Number is required.";
        }
    }

    if (isset($_POST['location'])) {
        $location = $_POST['location'];
        if (empty($location)) {
            $errors[] = "Location is required.";
        }
    }

    // If there are no validation errors, insert data into the database
    if (empty($errors)) {
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
    } else {
        // Display validation errors as JavaScript alerts
        echo "<script>";
        foreach ($errors as $error) {
            echo "alert('$error');";
        }
        echo "</script>";
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
        
        <form method="post"  onsubmit="return validateform()" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
    <label for="state">State:</label>
    <select name="state" style="width: 300px;">
    
        <option value="" selected disabled>Select a state</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
    </select>
</div>
            <br>
            <div class="form-group">
    <input type="submit" name="submit" value="Add Delivery Boy" class="blue-button">
</div>

        </form>
    </div>
  
</body>
</html>

