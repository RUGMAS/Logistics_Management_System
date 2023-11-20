<?php
session_start();
require_once('connection.php');
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
        header("Location: admindashboard.php");
        exit();
    }
    $sql = "SELECT * FROM Login WHERE email = '$email'";
    
    
    $result = $conn->query($sql);
   
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        $usertype = $row['user_type'];

        $sql2 = "INSERT INTO `userlog` (`email`, `role`, `loginTime`, `loginDate`) VALUES ('$email', '$usertype', NOW(), NOW())";
        $result2 = $conn->query($sql2);


        if (password_verify($password, $hashedPassword)) {
            // Password is correct
            $_SESSION['email'] = $email; 
            echo "loginsucess";
            header("Location: dashboard.php");
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            /* Add animation for the butterfly effect */
            animation: butterflyEffect 15s linear infinite;
        }

        /* Login container */
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
                <li><a href="landing page.php">Features</a></li>
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
<br><br><br><br>
    <div class="login-container">
        <div class="brand-text"> <h1 style="font-family: 'YourDesiredFont', Cooper Black;">CargoMasters</h1></div>
        <h2 style="font-family: 'YourDesiredFont', Cooper Black;">LOGIN</h2>
        <form action="" method="post" class="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-input" required><br>
            <br>
            <div class="center-container">
  <button type="submit" name="login" class="login-button">LOGIN</button>
</div>

        </form>
        <p class="registration-link"><a href="customer_registation.php">Not A Member?</a></p>
        <p class="registration-link"><a href="changepass.php">Forgot Password?</a>
        <?php if (!empty($errorMessage)) { ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php } ?>
    </div>
</body>
</html>
