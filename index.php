<?php
session_start();
require_once('connection.php');

// Check if the user is already logged in


$errorMessage = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $adminemail="admin@gmail.com";
    $adminpass="admin";
    if(    $email==$adminemail &&  $password==  $adminpass)
    {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = "Admin";
        header("Location: admindashboard.php"); // Redirect to dashboard or a protected page
        exit();
    }


    // Fetch the user from the Login table based on the email
    $sql = "SELECT * FROM Login WHERE email = '$email'";
    $result = $conn->query($sql);


    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $hashedPassword)) {
            // Password is correct
            $_SESSION['email'] = $email; // Store user email in session
            echo "loginsucess";
            header("Location: dashboard.php"); // Redirect to dashboard or a protected page
            exit();
        } else {
            // Password is incorrect
            $errorMessage = "Incorrect password. Please try again.";
        }
    } else {
        // User not found
        $errorMessage = "User not found. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            /* Add animation for the butterfly effect */
            animation: butterflyEffect 15s linear infinite;
        }
        
        .login-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff; /* White background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .brand-text {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #247BA0; /* Dark blue text color */
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.5rem;
            text-align: center;
            color: #247BA0; /* Dark blue text color */
        }

        .login-form {
            text-align: center;
        }

        .form-input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
			margin-left:11px;
			padding-right:10px;
        }

        .username-error,
        .password-error {
            color: #FF0000; /* Red error message color */
        }

        .login-button {
            background-color: #247BA0; /* Dark blue button background color */
            color: #fff; /* White button text color */
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #70C1B3; /* Light green button background color on hover */
        }

        .forgot-password,
        .registration-link {
            text-align: center;
            margin-top: 10px;
            color: #247BA0; /* Dark blue link color */
        }

        .forgot-password a,
        .registration-link a {
            text-decoration: none;
            color: #247BA0; /* Dark blue link color */
        }

        /* Rest of your CSS styles here... */

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
    
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="login-container">
    <div class="brand-text">Logistics Management System</div>
        <h2 style="font-family: 'YourDesiredFont', Cooper Black;">Login</h2>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit" name="login">Login</button>
        </form>
        <p class="register-link"><a href="customer_registation.php">Register new</a></p>

        <?php if (!empty($errorMessage)) { ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php } ?>
    </div>
</body>
</html>



       
</head>
