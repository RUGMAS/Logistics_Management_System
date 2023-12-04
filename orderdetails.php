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
     <?php
include('connection.php');

$successMessage = "";
$errorMessage = "";
$sql="SELECT
    od.order_id,
    od.name,
    od.email,
    od.contact,
    od.address,
    od.state,
    od.postal_code,
    pd.package_id,
    pd.item_category,
    pd.package_count,
    pd.weight,
    pd.price
FROM 
    orderdetail1 od
LEFT JOIN 
    packagedetail2 pd ON od.order_id = pd.order_id";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['price'];
// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}
?>


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
                <i class="fas fa-search"></i> <!-- Search Icon -->
                <i class="fas fa-user-circle"></i> <!-- Profile Icon -->
                <i class="fas fa-envelope"></i> <!-- Email Icon -->
                <i class="fas fa-phone"></i> <!-- Phone Icon -->
            </div>
        </nav>
    </header>
    <br>
    <center><a href="assigndelboy.php" class="more-details-button">ADD DELIVERY BOY</a></center>
    <br>
    <div class="container">
        <h1>Order Details</h1>
        <table>
            <thead>
                <tr>
                <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>State</th>
            <th>Postal_Code</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add customer data rows here -->
                <?php
                    // Loop through the result set
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        
                ?>
                <tr>
                <tr>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["contact"]?></td>
            <td><?php echo $row["address"]?></td>
            <td><?php echo $row["state"]?></td>
            <td><?php echo $row["postal_code"]?></td>
            <td><?php echo $row["item_category"]?></td>
            <td><?php echo $row["package_count"]?></td>
            <td><?php echo $row["weight"]?></td>
            <td><?php echo $row["price"]?></td>
        
           
        </tr>
                </tr>
                <!-- Add more customer data rows as needed -->
                <?Php
                        }
                    } else {
                        // Handle the case where no rows are returned
                        echo "No rows found";
                    }
                ?>  
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="center-container">
    <a href="admindashboard.php" class="more-details-button">BACK</a>
    <a href="orderdetails2.php" class="more-details-button">More Details</a>
   
</div>
</body>
</html>

