<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    $userType = "customer";
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $loginSql = "INSERT INTO Login (email, password, user_type)
                 VALUES ('$email', '$hashedPassword', '$userType')";
    if ($conn->query($loginSql) === TRUE) {
        $successMessage = "New record created successfully in Login table";
    } else {
        $errorMessage = "Error: " . $loginSql . "<br>" . $conn->error;
    }
    $fullName = $_POST["FullName"];
    $aadhar = $_POST["Aadhar"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["PhoneNumber"];
    $dateOfBirth = " ";
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

<div class="registration-container">
    <div class="brand-text">  <h2 style="font-family: 'YourDesiredFont', Cooper Black;">CargoMasters</h2></div>
    <h2>Registration</h2>
    <form class="registration-form" action="#" method="post" name="myform" onsubmit="return validateform()">
    <label for="email" style="text-align: left; display: block;">Email:</label>
        <input class="form-input" type="email" name="email" id="email">
        <span style="color: red;" id="email-error"></span>
        <label for="email" style="text-align: left; display: block;">Fullname:</label>
        <input class="form-input" type="text" name="FullName" id="FullName"  >
        <span style="color: red;" id="namemsg"></span>
        <label for="email" style="text-align: left; display: block;">Aadhar Number:</label>
        <input class="form-input" type="text" name="Aadhar" id="Aadhar" >
        <span style="color: red;" id="Aadhar-error"></span>
        <label for="email" style="text-align: left; display: block;">Address:</label>
        <input class="form-input" type="text" name="address" id="address">
        <span style="color: red;" id="address-error"></span>
        <label for="email" style="text-align: left; display: block;">Phone Number:</label>
        <input class="form-input" type="tel" name="PhoneNumber" id="PhoneNumber" >
        <span style="color: red;" id="PhoneNumber-error"></span>
        <label for="email" style="text-align: left; display: block;">Password:</label>
        <input class="form-input" type="password" name="password" id="password" >
        <span style="color: red;" id="password-error"></span>
        <label for="email" style="text-align: left; display: block;">Gender:</label>
        <select class="form-input" name="Gender" id="Gender">
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <span style="color: red;" id="Gender-error"></span>
        <div class="right-input">
        <label for="email" style="text-align: left; display: block;">State:</label>
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
            <br>
            <span style="color: red;" id="state-error"></span>
            <input name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP">
        </div>
        <br>
        <a href="index.php">Already have an Account?</a>
        <br>
        <br>
    </form>
</div><script>
    function validateform() {
        var isValid = true;

        // Email validation
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("email-error");
        if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
            emailError.textContent = "Please enter a valid email address";
            isValid = false;
        } else {
            emailError.textContent = "";
        }

        // Full Name validation
        var fullName = document.getElementById("FullName").value;
        var nameError = document.getElementById("namemsg");
        if (!fullName) {
            nameError.textContent = "Please enter your full name";
            isValid = false;
        } else {
            nameError.textContent = "";
        }

        // Aadhar Number validation
        var aadhar = document.getElementById("Aadhar").value;
        var aadharError = document.getElementById("Aadhar-error");
        if (!aadhar || !/^\d{12}$/.test(aadhar)) {
            aadharError.textContent = "Please enter a valid 12-digit Aadhar number";
            isValid = false;
        } else {
            aadharError.textContent = "";
        }

        // Address validation
        var address = document.getElementById("address").value;
        var addressError = document.getElementById("address-error");
        if (!address) {
            addressError.textContent = "Please enter your address";
            isValid = false;
        } else {
            addressError.textContent = "";
        }

        // Phone Number validation
        var phoneNumber = document.getElementById("PhoneNumber").value;
        var phoneNumberError = document.getElementById("PhoneNumber-error");
        if (!phoneNumber || !/^\d{10}$/.test(phoneNumber)) {
            phoneNumberError.textContent = "Please enter a valid 10-digit phone number";
            isValid = false;
        } else {
            phoneNumberError.textContent = "";
        }

        // Password validation
        var password = document.getElementById("password").value;
        var passwordError = document.getElementById("password-error");
        if (!password || password.length < 6) {
            passwordError.textContent = "Please enter a valid password (at least 6 characters)";
            isValid = false;
        } else {
            passwordError.textContent = "";
        }

        // Gender validation
        var gender = document.getElementById("Gender").value;
        var genderError = document.getElementById("Gender-error");
        if (gender === "") {
            genderError.textContent = "Please select your gender";
            isValid = false;
        } else {
            genderError.textContent = "";
        }

        // State validation
        var state = document.getElementById("state").value;
        var stateError = document.getElementById("state-error");
        if (state === "") {
            stateError.textContent = "Please select your state";
            isValid = false;
        } else {
            stateError.textContent = "";
        }

        return isValid;
    }
</script>

</body>
</html>
