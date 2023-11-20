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

.alert-list {
  display: flex;
  flex-direction: column;
  align-items: stretch;
}

.alert {
  display: flex;
  margin: 10px 0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

i {
  font-size: 24px;
  margin: 0 10px;
}

.alert-content {
  flex: 1;
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
        </nav>
    </header>
    </header>
    <h2>Notifications and Alerts</h2><br><br>
    <div class="alert-list">
      <div class="alert">
        <i class="fas fa-exclamation-circle"></i>
        <div class="alert-content">
          <h2>Alert Title 1</h2>
          <p>This is an important alert message.</p>
        </div>
      </div>
      <div class="alert">
        <i class="fas fa-info-circle"></i>
        <div class="alert-content">
          <h2>Informational Message</h2>
          <p>This is an informational message.</p>
        </div>
      </div>
      <div class="alert">
        <i class="fas fa-bell"></i>
        <div class="alert-content">
          <h2>Reminder</h2>
          <p>Don't forget to complete your tasks.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
