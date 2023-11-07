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

.order-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

th {
  background-color: #333;
  color: #fff;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

tbody tr:nth-child(odd) {
  background-color: #fff;
}

i {
  margin-right: 5px;
  font-size: 16px;
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
                <a href="changepropass.php">
  <i class="fas fa-user-circle"></i>
</a>
                <i class="fas fa-envelope"></i> <!-- Email Icon -->
            </div>
        </nav>
    </header>
    <table class="order-table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td><i class="fas fa-shopping-cart"></i> Product A</td>
          <td>3</td>
          <td>$90.00</td>
          <td><i class="fas fa-check-circle"></i> Shipped</td>
        </tr>
        <tr>
          <td>003</td>
          <td><i class="fas fa-shopping-cart"></i> Product C</td>
          <td>1</td>
          <td>$30.00</td>
          <td><i class="fas fa-clock"></i> Processing</td>
        </tr>
        <tr>
          <td>001</td>
          <td><i class="fas fa-shopping-cart"></i> Product A</td>
          <td>3</td>
          <td>$90.00</td>
          <td><i class="fas fa-check-circle"></i> Shipped</td>
        </tr>
        <tr>
          <td>002</td>
          <td><i class="fas fa-shopping-cart"></i> Product B</td>
          <td>2</td>
          <td>$50.00</td>
          <td><i class="fas fa-truck"></i> In Transit</td>
        </tr>
        <tr>
          <td>003</td>
          <td><i class="fas fa-shopping-cart"></i> Product C</td>
          <td>1</td>
          <td>$30.00</td>
          <td><i class="fas fa-clock"></i> Processing</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
