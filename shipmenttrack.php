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

.shipment-info {
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 20px;
}

.shipment-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
/* style.css */
/* ... Existing CSS styles ... */

.shipments {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.shipment {
  width: 48%; /* Adjust this value to control the width of each shipment */
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 20px;
}

/* ... Remaining CSS styles ... */

.status {
  color: green;
  font-weight: bold;
}

.shipment-details {
  margin-top: 10px;
}

.detail {
  margin: 10px 0;
}

.shipment-history {
  margin-top: 20px;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin: 5px 0;
}

i {
  margin-right: 5px;
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
    </style>
</head>
<body>
  <div class="dashboard">
    <header>
    <nav>
            <div class="logo">Logistics Management System</div>
            <ul>
                <li><a href="landing page.php">Home</a></li>
                <li><a href="#">Features</a></li>
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
    <h2>Shipment Tracking</h2><br>
    <div class="shipment-info">
      <div class="shipment-header">
        <h2>Shipment #123456</h2>
        <div class="status">
          <i class="fas fa-check-circle"></i> Delivered
        </div>
      </div>
      <div class="shipment-details">
        <div class="detail">
          <i class="fas fa-truck"></i> In Transit
        </div>
        <div class="detail">
          <i class="fas fa-map-marker-alt"></i> Current Location: New York, NY
        </div>
        <div class="detail">
          <i class="fas fa-calendar"></i> Estimated Delivery: Nov 15, 2023
        </div>
      </div>
    </div>
	 <div class="shipment-info">
      <div class="shipment-header">
        <h2>Shipment #789901</h2>
        <div class="status">
          <i class="fas fa-check-circle"></i> Delivered
        </div>
      </div>
      <div class="shipment-details">
        <div class="detail">
          <i class="fas fa-truck"></i> In Transit
        </div>
        <div class="detail">
          <i class="fas fa-map-marker-alt"></i> Current Location: New York, NY
        </div>
        <div class="detail">
          <i class="fas fa-calendar"></i> Estimated Delivery: Nov 15, 2023
        </div>
      </div>
    </div>
    <div class="shipment-history">
      <h3>Shipment History</h3>
      <ul>
        <li><i class="fas fa-clock"></i> Shipment Created - Nov 5, 2023</li>
        <li><i class="fas fa-clock"></i> In Transit - Nov 7, 2023</li>
        <li><i class="fas fa-clock"></i> Delivered - Nov 10, 2023</li>
      </ul>
    </div>
  </div>
  <br>
    <div class="center-container">
    <a href="#" class="more-details-button">Check Items Details</a>
</div>
</body>
</html>
