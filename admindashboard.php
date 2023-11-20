<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
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
        overflow-y: auto; 
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
    .content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.widget {
    width: 280px; /* Set the desired width */
    height: 200px; /* Set the desired height */
    padding: 20px; /* Adjust padding as needed */
    margin: 10px; /* Adjust margin as needed */
    background-color: #f2f2f2; /* Background color */
    border: 1px solid #ccc; /* Border style */
    text-align: center; /* Center text */
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Hover effect for better user experience */
.widget:hover {
    background-color: #e0e0e0; /* Change background color on hover */
}
.icon-blue {
    color: blue; /* Change icon color to blue */
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
            <div class="logo">Logistics Management System </div>
            <nav>
        <ul>
        <li><a href="#"></a></li>
            <li><a href="admindashboard.php">Home</a></li>
            <li><a href="#"> <h4><?php echo $email; ?>!</h4></a></li> 
            <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <a href="index.php">Logout</a>
            </div>
        </nav>
    </header>
    <main>
    <section class="sidebar">
    <h2>User Profile</h2>
    <br><br><br>
    <ul>
        <li><i class="fas fa-tachometer-alt"></i> <a href="ddashboard.php">Dashboard</a></li>
    </ul>
    <br>
    <ul>
        <li><i class="fas fa-warehouse"></i> <a href="warehouse.php">Warehouse</a></li>
    </ul>
    <br>
    <ul>
    <li><i class="fas fa-box"></i> <a href="warehouseview.php">List of Orders</a></li>
    </ul>
    <br>
    <ul>
        <li><i class="fas fa-truck"></i> <a href="delas.php">Delivery Associates</a></li>
    </ul>
    <br>
    <ul>
        <li><i class="fas fa-box"></i> <a href="adcus1.php">Packages</a></li>
    </ul>
    <br>
    <ul>
        <li><i class="fas fa-map-marker"></i> <a href="track-packages.php">Track Packages</a></li>
    </ul>
    <br>
    <ul>
        <li><i class="fas fa-chart-bar"></i> <a href="reports.php">Reports</a></li>
    </ul>
</section>
<br><br><br>
<section class="content">
    <br>
    <br>
    <div class="widget">
        <a href="viewsubdeets.php">
            <i class="fas fa-user fa-2x icon-blue"></i> <!-- Customer icon, 2x size -->
            <h2>Customer</h2>
        </a>
    </div>

    <div class="widget">
        <a href="vieww.php">
            <i class="fas fa-shipping-fast fa-2x icon-blue"></i> <!-- Shipper icon, 2x size -->
            <h2>Shipper</h2>
        </a>
    </div>
    <div class="widget">
        <a href="admin_viewdelboy.php">
            <i class="fas fa-truck fa-2x icon-blue"></i> <!-- Delivery Associates icon, 2x size -->
            <h2>Delivery Associates</h2>
        </a>
    </div>
</section>
    </main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <p>&copy; 2023 CargoMasters</p>
    </footer>
</body>
</html>
