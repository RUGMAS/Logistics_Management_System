<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>
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
.dashboard {
  background-color: #fff;
  margin: 20px;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
  text-align: center;
}

.account-info {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.info {
  width: 48%; /* Adjust this value to control the width of each section */
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 20px;
  border-radius: 5px;
}

i {
  font-size: 24px;
  margin: 0 10px;
}
footer {
    background-color: #0099cc; /* Dark Blue */
    color: #fff;
    text-align: center;
    padding: 0.1rem 0; /* Reduce the top and bottom padding to 0.5rem */
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
  <br><br><br>
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
        <a href="changepropass.php">
            <i class="fas fa-user-circle"></i>
        </a>
        <a href="#">
            <h4><?php echo $email; ?>!</h4>
        </a>
    </div>
</nav>
</header>

    <h2>Your Account</h2>
    <div class="account-info">
      <div class="info">
        <i class="fas fa-user"></i>
        <h2>Profile</h2>
        <p>View and update your profile information.</p>
      </div>
      <div class="info">
        <i class="fas fa-key"></i>
        <h2>Password</h2>
        <p>Change your account password.</p>
      </div>
      <div class="info">
        <i class="fas fa-cog"></i>
        <h2>Settings</h2>
        <p>Customize your account settings.</p>
      </div>
      <div class="info">
        <i class="fas fa-sign-out-alt"></i>
        <h2>Logout</h2>
        <p>Sign out from your account.</p>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>
<footer>
        <p>&copy; 2023 Logistics Management System</p>
    </footer>
</body>
</html>
