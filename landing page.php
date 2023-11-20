<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Add Font Awesome CSS -->
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
            padding-top: 80px; 
            
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            padding: 1rem 0;
            z-index: 100;
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
        /* Hero section */
        .hero {
            background-image: url('viewpage.jpg'); 
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 5rem 0;
        }
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        /* Text color for hero section */
        .hero h1,
        .hero p {
            color: #000; /* Black */
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #005580; /* Darker Blue */
        }
        /* Features section */
        .features {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 0;
            text-align: center;
            background-color: rgba(102, 204, 153, 0.5); /* Light Green with 50% opacity */
        }
        .features h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        .feature {
            margin-bottom: 3rem;
        }
        .feature i {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        /* Pricing section */
        .pricing {
            background-color: #e6f7ff; /* Light Blue-Green */
            text-align: center;
            padding: 4rem 0;
        }
        .plan {
            background-color: #b3e0cc; /* Lighter Green */
            border-radius: 5px;
            padding: 2rem;
            margin: 1rem;
            display: inline-block;
            width: calc(33.33% - 2rem);
        }
        .plan h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .plan p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        /* Footer */
        footer {
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        /* Font Awesome icons */
        .fa {
            font-size: 2rem;
        }
        /* Responsive styling */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                text-align: center;
            }

            ul {
                margin-top: 1rem;
            }

            li {
                margin: 0.5rem 0;
            }

            .hero {
                padding: 3rem 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero-content {
                padding: 0 1rem;
            }

            .features {
                padding: 2rem 0;
            }

            .features h2 {
                font-size: 1.5rem;
            }

            .feature {
                margin-bottom: 2rem;
            }

            .feature i {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Logistics Management System</div>
            <ul>
                <li><a href="#">Home</a></li>
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
    <section class="hero">
    <style>
    .hero-content h1 {
        font-family: "Cooper Black", serif;
    }
</style>
<div class="hero-content">
    <h1>Welcome to our CargoMasters</h1>
    <br>
    <p>Enhance Customer Satisfaction with On-Time Deliveries and Transparency.</p>
    <a href="index.php" class="btn">Get Started</a>
</div>
    </section>
    <section class="features">
    <h2>Key Features</h2>
    <div class="feature">
        <i class="fas fa-truck"></i>
        <h3>Shipment Tracking</h3>
        <p>Keep track of your packages in real-time, reducing stockouts and overstocking.</p>
    </div>
    <div class="feature">
        <i class="fas fa-route"></i>
        <h3>Route Optimization</h3>
        <p>Optimize delivery routes for cost-effective and timely deliveries.</p>
    </div>
    <div class="feature">
        <i class="fas fa-check-circle"></i>
        <h3>Order Management</h3>
        <p>Effortlessly manage customer orders from placement to delivery.</p>
    </div>
    <div class="feature">
        <i class="fas fa-calendar-alt"></i>
        <h3>Schedule Management</h3>
        <p>Create and manage delivery schedules to ensure timely shipments and customer satisfaction.</p>
    </div>
    <div class="feature">
        <i class="fas fa-barcode"></i>
        <h3>Barcode Scanning</h3>
        <p>Utilize barcode scanning for efficient inventory management and order processing.</p>
    </div>
    <div class="feature">
        <i class="fas fa-cogs"></i>
        <h3>Customizable Settings</h3>
        <p>Adjust and customize the system settings to meet the specific needs of your business.</p>
    </div>
    <!-- Add more features as needed -->
</section>
    <footer>
        <p>&copy; 2023 Logistics Management System</p>
    </footer>
</body>
</html>
