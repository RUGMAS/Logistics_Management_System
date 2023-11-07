<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Management System</title>
    <!-- Add your CSS style block here -->
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
        <form class="login-form" action="#" method="POST" onsubmit="return validateForm()">
            <input class="form-input" type="text" name="username" id="username" placeholder="Email" required>
            <span class="username-error" id="username-error"></span>
            <input class="form-input" type="password" name="password" id="password" placeholder="Password" required>
            <span class="password-error" id="password-error"></span>
			<br>
            <button class="login-button" type="submit">Login</button>
        </form>
        <p class="forgot-password"><a href="#">Forgot your password?</a></p>
        <p class="registration-link">Not a member? <a href="dynamic register.php">Register here</a></p>
    </div>
    <script>
    function validateForm(event) {
        event.preventDefault(); // Prevent the form from submitting by default

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Email validation
        const emailPattern = /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

        // Password validation (at least 6 characters)
        if (password.length < 6) {
            document.getElementById("password-error").innerText = "Password should be at least six characters long.";
            document.getElementById("password-error").style.color = "red"; // Apply red color to error text
            return false;
        } else {
            document.getElementById("password-error").innerText = "";
        }

        // Email validation
        if (!emailPattern.test(username)) {
            document.getElementById("username-error").innerText = "Please enter a valid email address in lowercase without spaces.";
            document.getElementById("username-error").style.color = "red"; // Apply red color to error text
            return false;
        } else {
            document.getElementById("username-error").innerText = "";
        }

        // If validation passes, you can proceed with login logic here
        // If validation fails, the function will return false, and the form won't be submitted.

        return true;
    }
</script>
</body>
</html>
