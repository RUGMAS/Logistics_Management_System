<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Tracking Dashboard</title>
    <style>
    /* style.css */
    body {
        font-family: Arial, sans-serif;
        background-color: #e6f7ff; /* Light Blue-Green */
        background-image: url("images/viewpage.jpg");
        padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
        animation: butterflyEffect 15s linear infinite;
    }
.dashboard {
  background-color: #fff;
  margin: 20px;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.container {
        max-width: 1000px; /* Increased container width */
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #0099cc; /* Dark Blue */
    color: #fff;
    padding: 0.5rem 0; /* Reduced padding to reduce the height */
    z-index: 70;
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
    h2 {
        margin: 0;
    }
header {
  text-align: center;
}

.analytics-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  width: 45%;
  border: 1px solid #ccc;
  padding: 20px;
  margin: 10px 0;
  text-align: center;
}

i {
  font-size: 36px;
  margin: 10px 0;
}
.center-container {
    text-align: center; /* Center-align the contents */
}
    .more-details-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #247BA0; /* Background color */
    color: #fff; /* Text color */
    border: none;
    border-radius: 5px; /* Rounded corners */
    cursor: pointer;
    font-size: 16px; /* Font size */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

/* Button Hover Effect */
.more-details-button:hover {
    background-color: #70C1B3; /* Background color on hover */
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

/* Include Font Awesome CSS - You can download it or link to a CDN */
/* Example: Link to the Font Awesome CDN */

    </style>
</head>
<body>
    
<body>
  <div class="dashboard">
    <header>
    <header>
    <nav>
            <div class="logo">Logistics Management System</div>
            <ul>
                <li><a href="landing page.php">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <a href="index.php">Login</a>
            </div>
        </nav>
    </header>
    </header>
    <h2> Reporting and Analytics</h2><br><br>
    <div class="analytics-cards">
      <div class="card">
        <i class="fas fa-chart-line"></i>
        <h2>Analytics Overview</h2>
        <p>View key performance metrics at a glance.</p>
      </div>
      <div class="card">
        <i class="fas fa-chart-bar"></i>
        <h2>Sales Trends</h2>
        <p>Track sales trends over time.</p>
      </div>
      <div class="card">
        <i class="fas fa-chart-pie"></i>
        <h2>Product Breakdown</h2>
        <p>See a breakdown of product categories.</p>
      </div>
      <div class="card">
        <i class="fas fa-chart-area"></i>
        <h2>Area Chart</h2>
        <p>Visualize data with an area chart.</p>
      </div>
    </div>
  </div>
  <br>
    <div class="center-container">
    <a href="#" class="more-details-button">View Statistics</a>
</div>
</body>
</html>
