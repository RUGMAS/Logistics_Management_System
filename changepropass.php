<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            animation: butterflyEffect 15s linear infinite;
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
    <br><br><br><br><br><br>
    <div class="container">
        
        <h1>Change Password</h1>
        <form action="change_password.php" method="post">
            <table>
                <tr>
                    <th colspan="2">Change Password</th>
                </tr>
                <tr>
                    <td><label for="currentPassword">Current Password:</label></td>
                    <td><input type="password" id="currentPassword" name="currentPassword" required></td>
                </tr>
                <tr>
                    <td><label for="newPassword">New Password:</label></td>
                    <td><input type="password" id="newPassword" name="newPassword" required></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm New Password:</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Change Password"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
