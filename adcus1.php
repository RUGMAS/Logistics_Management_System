<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management Dashboard</title>
    <style>
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
        /* Form input fields */
        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Error messages */
        .error-message {
            color: #FF0000; /* Red error message color */
        }

        /* Login button */
        .login-button {
            background-color: #247BA0; /* Dark blue button background color */
            color: #fff; /* White button text color */
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .center-container {
  text-align: center;
}

.login-button {
  /* Add any other styles you want for your button here */
}
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
        }

        .item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .item-title {
            font-weight: bold;
        }

        .item-description {
            color: #777;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
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
    <script src="https://cdn.tailwindcss.com">
  </script>
 <script src="https://cdn.tailwindcss.com"></script></head>
 <body class="bg-gray-100 p-5"> <br><br><br><br><br>
  <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
  <h1 class="text-xl font-semibold mb-6">
    Add Delivery Associates
   </h1>
   <form>
    <div class="grid grid-cols-2 gap-4 mb-4">
     <div>
      <label class="block text-sm font-semibold text-gray-700" for="zipCode">
      First Name
      </label>
      <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id=" FirstName" name=" FirstName" placeholder="Enter your First Name" type="text">
     </div>
     <div>
      <label class="block text-sm font-semibold text-gray-700" for="postalCode">
      Last Name 
      </label>
      <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="LastName" name="LastName" placeholder="Enter your Last Name" type="text">
     </div>
    </div>
    <div class="mb-4">
     <label class="block text-sm font-semibold text-gray-700" for="street">
      Select Warehouse
     </label>
     <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="warehouse" name="warehouse" placeholder="Enter warehouse" type="text">
    </div>
    <div class="mb-4">
     <label class="block text-sm font-semibold text-gray-700" for="state">
      State
     </label>
     <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="state" name="state" placeholder="Enter state" type="text">
    </div>
    <div class="mb-4">
     <label class="block text-sm font-semibold text-gray-700" for="country">
      Country
     </label>
     <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="country" name="country" placeholder="Enter country" type="text">
    </div>
    <div class="mb-4">
     <label class="block text-sm font-semibold text-gray-700" for="contact">
      Contact 
     </label>
     <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="contact" name="contact" placeholder="Enter contact number" type="tel">
    </div>
    <div class="flex justify-end space-x-4">
     <button class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700" type="submit">
      Save
     </button>
    </div>
   </form>
  </div>

</body>
</html>
