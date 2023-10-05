<?php
// Start a PHP session
session_start();

// Check if the session variable 'username' is set
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <!-- Header content (e.g., logo, navigation) -->
        <nav>
            <div class="logo">Customer Dashboard</div>
            <!-- You can add navigation links here if needed -->
            <div class="header-icons">
                <i class="fas fa-user-circle"></i> <!-- User Profile Icon -->
                <i class="fas fa-cog"></i> <!-- Settings Icon -->
            </div>
        </nav>
    </header>
    <main>
        <section class="sidebar">
    <!-- Sidebar content (e.g., navigation links, user profile) -->
    <h2>User Profile</h2>
	<br>
	<br>
    <ul>
        
    </ul>
    
    <ul>
        <li><i class="fas fa-home"></i> <a href="#">Dashboard</a></li>
    </ul>
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
        <li><i class="fas fa-sign-out-alt"></i> <a href="index.php">Logout</a></li>
    </ul>
</section>
        <section class="content">
        <h1>Welcome, <?php echo $email; ?>!</h1>
           
            <br>
			<br>
            <!-- Dashboard widgets and information -->
            <div class="widget">
                <h2>Account Information</h2>
                <!-- Display customer account details here -->
                <p>Account balance: $1000</p>
                <p>Account type: Premium</p>
            </div>

            <div class="widget">
                <h2>Recent Orders</h2>
                <!-- Display a list of recent orders here -->
                <ul>
                    <li>Order #12345 - $50</li>
                    <li>Order #12346 - $75</li>
                    <li>Order #12347 - $60</li>
                </ul>
            </div>

            <div class="widget">
                <h2>Notifications</h2>
                <!-- Display customer notifications or updates here -->
                <p>You have 2 new messages.</p>
            </div>

            <!-- You can add more widgets and sections as needed -->

        </section>
    </main>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer>
        <!-- Footer content (e.g., contact information, links) -->
        <p>&copy; 2023 Customer Dashboard</p>
    </footer>
</body>
</html>
