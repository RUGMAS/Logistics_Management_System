<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #e6f7ff; /* Light Blue-Green */
    background-image: url("images/viewpage.jpg");
    padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
    animation: butterflyEffect 15s linear infinite;
}

.container {
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    padding: 50px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.form-group {
    margin: 10px 0;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px;
}

button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

        </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Management</h2>
        <form id="userForm">
    <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="role">User Role:</label>
        <select id="role" name="role" required>
            <option value="shipper">Shipper</option>
            <option value="delivery-boy">Delivery Boy</option>
            <option value="customer">Customer</option>
        </select>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <!-- Add hidden fields for login time and login date -->
    <input type="hidden" id="loginTime" name="loginTime">
    <input type="hidden" id="loginDate" name="loginDate">
    
    <div class="form-group">
        <button type="button" onclick="loginUser()">Create User</button>
        <button type="reset">Reset</button>
    </div>
</form>
<script>
    // Function to handle login events
    function loginUser() {
        // Get the current date and time
        const currentDate = new Date();
        const loginTime = currentDate.toLocaleTimeString();
        const loginDate = currentDate.toISOString().split('T')[0];

        // Set the values of the hidden fields
        document.getElementById("loginTime").value = loginTime;
        document.getElementById("loginDate").value = loginDate;

        // Retrieve the loginTime and loginDate values
        const loginTimeValue = document.getElementById("loginTime").value;
        const loginDateValue = document.getElementById("loginDate").value;

        // Now, you can use these values as needed
        console.log("Login Time:", loginTimeValue);
        console.log("Login Date:", loginDateValue);

        // You can also submit the form or perform any other necessary actions here
    }
</script>

    </div>
</body>
</html>
