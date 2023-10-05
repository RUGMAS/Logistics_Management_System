<?php
// Start a PHP session
session_start();

// Check if the session variable 'email' is set
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admincss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS stylesheets and external resources here -->
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light Blue-Green */
            background-image: url("images/viewpage.jpg");
            padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
            animation: butterflyEffect 15s linear infinite;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            padding: 1rem 0;
            z-index: 100;
            text-align: center; /* Center text in the header */
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            background-color: #70C1B3; /* Light green navigation background */
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

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #333; /* Dark background color for the sidebar */
            color: #fff;
            padding: 1rem;
            height: 100%; /* Full height */
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto; /* Enable vertical scrolling if content exceeds the sidebar height */
        }

        .sidebar h2 {
            margin-bottom: 1rem;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 1rem;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Content section styles */
        .content {
            margin-left: 250px; /* Match the sidebar width to create space */
            padding: 2rem;
        }

        /* Dashboard widget styles */
        .widget {
            background-color: #fff;
            border-radius: 5px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .widget h2 {
            color: #333; /* Dark text color for widget headings */
            margin-bottom: 1rem;
        }

        /* Footer styles */
        footer {
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            text-align: center;
            padding: 1rem 0;
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
        <h1>Admin Dashboard</h1>
        <!-- Add any header content or navigation here -->
    </header>

    <nav>
        <!-- Add navigation links or menu here -->
        <ul>
            
        
        <li><a href="#">..................</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>

    <main>
    <section class="sidebar">
    <!-- Sidebar content (e.g., navigation links, user profile) -->
    <h2>User Profile</h2>
	<br>
	<br>
    
<br>
<ul>
    <li><i class="fas fa-shopping-cart"></i> <a href="#">Orders</a></li>
</ul>
<br>
<ul>
    <li><i class="fas fa-user"></i> <a href="#">Profile</a></li>
</ul>
<br>
<ul>
    <li><i class="fas fa-users"></i> <a href="#">Users</a></li> <!-- New menu item for Users -->
</ul>
<br>
<ul>
    <li><i class="fas fa-box"></i> <a href="#">Packages</a></li> <!-- New menu item for Packages -->
</ul>
<br>
<ul>
    <li><i class="fas fa-warehouse"></i> <a href="#">Warehouse</a></li> <!-- New menu item for Warehouse -->
</ul>
<br>
<ul>
    <li><i class="fas fa-truck"></i> <a href="#">Shipments</a></li> <!-- New menu item for Shipments -->
</ul>
<br>
<ul>
    <li><i class="fas fa-money-bill"></i> <a href="#">Payment Refund</a></li> <!-- New menu item for Payment Refund -->
</ul>
<br>
<ul>
    <li><i class="fas fa-shield-alt"></i> <a href="#">Insurance</a></li> <!-- New menu item for Insurance -->
</ul>
<br>
<ul>
    <li><i class="fas fa-sign-out-alt"></i> <a href="index.php">Logout</a></li>
</ul>

</section>
        <!-- Main content of your admin dashboard goes here -->
        <div class="content">
            <h1>Welcome, <?php echo $email; ?>!</h1>
            <h2>Welcome to the Admin Dashboard!</h2>
            <br>
            <p>This is where you can manage your website's administration.</p>
        </div>
    </main>
    <br><br><br><br><br><br><br><br>r><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer>
        <!-- Add footer content here -->
        <p>&copy; 2023 Logistics Management System</p>
    </footer>

    <!-- Add your JavaScript files and scripts here -->
    <script src="script.js"></script>
</body>
</html>
