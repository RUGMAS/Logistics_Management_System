<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Refund Requests Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #e6f7ff; /* Light Blue-Green */
        background-image: url("images/viewpage.jpg");
        padding-top: 80px; /* Add padding to prevent content from being hidden by the fixed header */
        animation: butterflyEffect 15s linear infinite;
    }
    .container {
      width: 80%;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    h1 {
      text-align: center;
      color: #333;
    }

    .refund-requests {
      margin: 20px 0;
    }

    .request-card {
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 10px 0;
      padding: 10px;
      background-color: #fff;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }

    .request-details {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .request-icon {
      margin-right: 10px;
    }

    .request-title {
      font-weight: bold;
      color: #333;
    }

    .request-actions {
      margin-top: 10px;
      display: flex;
      justify-content: space-between;
    }

    .approve-button,
    .reject-button {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .approve-button {
      background-color: #27ae60;
      color: #fff;
    }

    .reject-button {
      background-color: #e74c3c;
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
            <div class="header-icons">
                <i class="fas fa-search"></i> <!-- Search Icon -->
                <i class="fas fa-user-circle"></i> <!-- Profile Icon -->
                <i class="fas fa-envelope"></i> <!-- Email Icon -->
                <i class="fas fa-phone"></i> <!-- Phone Icon -->
            </div>
        </nav>
    </header>
  <div class="container">
    <h1>Refund Requests Dashboard</h1>
    <div class="refund-requests">
      <div class="request-card">
        <div class="request-details">
          <i class="fas fa-dollar-sign request-icon"></i>
          <span class="request-title">Refund Request #1</span>
        </div>
        <p>Customer: Rony</p>
        <p>Order ID: 12345</p>
        <p>Amount: $50.00</p>
        <div class="request-actions">
          <button class="approve-button">Approve</button>
          <button class="reject-button">Reject</button>
        </div>
      </div>
      <div class="refund-requests">
      <div class="request-card">
        <div class="request-details">
          <i class="fas fa-dollar-sign request-icon"></i>
          <span class="request-title">Refund Request #1</span>
        </div>
        <p>Customer: Meera</p>
        <p>Order ID: 12345</p>
        <p>Amount: $50.00</p>
        <div class="request-actions">
          <button class="approve-button">Approve</button>
          <button class="reject-button">Reject</button>
        </div>
      </div>
      
      <!-- Additional request cards can be added here -->

    </div>
  </div>
</body>
</html>
