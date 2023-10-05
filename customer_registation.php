<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href=" formstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<?php
require_once('connection.php');

$successMessage = "";
$errorMessage = "";

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userType = "customer"; // Set the user type to 'customer'

    // Hash the password for security (replace 'your_hashing_algorithm' with your chosen password hashing method)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert the user data into the Login table
    $loginSql = "INSERT INTO Login (email, password, user_type)
                 VALUES ('$email', '$hashedPassword', '$userType')";

    if ($conn->query($loginSql) === TRUE) {
        $successMessage = "New record created successfully in Login table";
    } else {
        $errorMessage = "Error: " . $loginSql . "<br>" . $conn->error;
    }

    // Insert the other user details into the Customer table
    $fullName = $_POST["FullName"];
    $aadhar = $_POST["Aadhar"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["PhoneNumber"];
    $dateOfBirth = $_POST["DateOfBirth"];
    $gender = $_POST["Gender"];
    $state = $_POST["state"];

    $customerSql = "INSERT INTO customer (email, full_name, aadhar, address, phone_number, date_of_birth, gender, state)
                    VALUES ('$email', '$fullName', '$aadhar', '$address', '$phoneNumber', '$dateOfBirth', '$gender', '$state')";

    if ($conn->query($customerSql) === TRUE) {
        $successMessage .= "<br>New record created successfully in Customer table";
    } else {
        $errorMessage .= "<br>Error: " . $customerSql . "<br>" . $conn->error;
    }
}
?>

<h1>Form Submission Result</h1>
    
<div class="registration-container">
    <div class="brand-text">Logistics Management System</div>
    <h2 style="font-family: 'YourDesiredFont', Cooper Black;">Registration</h2>
    <form class="registration-form" action="#" method="post" onsubmit="return validateForm();">

        <input class="form-input" type="email" name="email" id="email" placeholder="Email">
        <span style="color: red;" id="email-error"></span>

        <input class="form-input" type="text" name="FullName" id="FullName" placeholder="Full Name">
        <span style="color: red;" id="FullName-error"></span>

        <input class="form-input" type="text" name="Aadhar" id="Aadhar" placeholder="Aadhar Number">
        <span style="color: red;" id="Aadhar-error"></span>

        <input class="form-input" type="text" name="address" id="address" placeholder="Address">
        <span style="color: red;" id="address-error"></span>

        <input class="form-input" type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number">
        <span style="color: red;" id="PhoneNumber-error"></span>

        <input class="form-input" type="date" name="DateOfBirth" id="DateOfBirth">
        <span style="color: red;" id="DateOfBirth-error"></span>

        <input class="form-input" type="password" name="password" id="password" placeholder="Password">
        <span style="color: red;" id="password-error"></span>

        <select class="form-input" name="Gender" id="Gender">
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <span style="color: red;" id="Gender-error"></span>

        <div class="right-input">
        <select class="form-input" name="state" id="state">
    <option value="" disabled selected>Select State</option>
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

            <span style="color: red;" id="state-error"></span>

            <input name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP">
        </div>
    </form>
</div>

<script>
    // Function to validate the form
    function validateForm() {
        const email = document.getElementById("email").value;
        const fullName = document.getElementById("FullName").value;
        const aadhar = document.getElementById("Aadhar").value;
        const address = document.getElementById("address").value;
        const phoneNumber = document.getElementById("PhoneNumber").value;
        const dateOfBirth = document.getElementById("DateOfBirth").value;
        const gender = document.getElementById("Gender").value;
        const state = document.getElementById("state").value;
        const password = document.getElementById("password").value;

        // Clear existing error messages
        document.getElementById("email-error").textContent = "";
        document.getElementById("FullName-error").textContent = "";
        document.getElementById("Aadhar-error").textContent = "";
        document.getElementById("address-error").textContent = "";
        document.getElementById("PhoneNumber-error").textContent = "";
        document.getElementById("DateOfBirth-error").textContent = "";
        document.getElementById("Gender-error").textContent = "";
        document.getElementById("state-error").textContent = "";

        // Check if any of the required fields are empty
        let isValid = true;
        if (email === "") {
            document.getElementById("email-error").textContent = "Email is required.";
            isValid = false;
        }

        if (fullName === "") {
            document.getElementById("FullName-error").textContent = "Full Name is required.";
            isValid = false;
        }

        if (aadhar === "") {
            document.getElementById("Aadhar-error").textContent = "Aadhar Number is required.";
            isValid = false;
        } else {
            // Validate the Aadhar number format
            const aadharPattern = /^\d{12}$/;
            if (!aadharPattern.test(aadhar)) {
                document.getElementById("Aadhar-error").textContent = "Invalid Aadhar number format. It should be 12 digits.";
                isValid = false;
            }
        }

        if (address === "") {
            document.getElementById("address-error").textContent = "Address is required.";
            isValid = false;
        }

        if (phoneNumber === "") {
            document.getElementById("PhoneNumber-error").textContent = "Phone Number is required.";
            isValid = false;
        } else {
            // Validate the phone number format
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phoneNumber)) {
                document.getElementById("PhoneNumber-error").textContent = "Invalid phone number format. It should be 10 digits.";
                isValid = false;
            }
        }

        if (dateOfBirth === "") {
            document.getElementById("DateOfBirth-error").textContent = "Date of Birth is required.";
            isValid = false;
        }

        if (gender === "") {
            document.getElementById("Gender-error").textContent = "Gender is required.";
            isValid = false;
        }

        if (state === "") {
            document.getElementById("state-error").textContent = "State is required.";
            isValid = false;
        }

        if (password === "") {
            document.getElementById("password-error").textContent = "Password is required.";
            isValid = false;
        }

        // If all validation passes, the form will submit
        return isValid;
    }
</script>

</body>
</html>
