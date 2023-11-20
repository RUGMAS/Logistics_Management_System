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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-6s"> <!-- Main container -->
    <div class="container mx-auto mt-4">
      <div class="flex justify-between items-center">
        <h1 class="text-xl font-semibold">
          <i class="fas fa-list-alt mr-2"></i> Branch List
        </h1>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
          <i class="fas fa-plus"></i> Add New
        </button>
    </div>
    <div class="mt-4">
      <div class="flex justify-between items-center mb-2">
        <label>
          Show
          <select class="border border-gray-300 rounded-md p-1">
            <option selected="" value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
          entries
        </label>
        <input class="border-gray-300 focus:border-blue-500 focus:ring-0 rounded-md shadow-sm p-2" placeholder="Search:" type="text">
      </div>
      <div class="overflow-x-auto scrollbar-hide">
        <table class="min-w-full bg-white shadow rounded-lg">
          <table class="min-w-full bg-white shadow rounded-lg">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-2 px-4 text-left">Sl.No</th>
              <th class="py-2 px-4 text-left">Package Code</th>
              <th class="py-2 px-4 text-left">Street/Building</th>
              <th class="py-2 px-4 text-left">City/State/Zip</th>
              <th class="py-2 px-4 text-left">Country</th>
              <th class="py-2 px-4 text-left">Contact</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <!-- Sample row data, adjust as needed -->
              <td class="border-t px-4 py-2">1</td>
              <td class="border-t px-4 py-2">7vNVe5fKSkAuOtG</td>
              <td class="border-t px-4 py-2">-</td>
              <td class="border-t px-4 py-2">Zsdrftghjbmn Nghf, Kerala, 5467890</td>
              <td class="border-t px-4 py-2">India</td>
              <td class="border-t px-4 py-2">23456789</td>
              
            </tr>
            <tr>
              <!-- Sample row data, adjust as needed -->
              <td class="border-t px-4 py-2">1</td>
              <td class="border-t px-4 py-2">7vNVe5fKSkAuOtG</td>
              <td class="border-t px-4 py-2">-</td>
              <td class="border-t px-4 py-2">Zsdrftghjbmn Nghf, Kerala, 5467890</td>
              <td class="border-t px-4 py-2">India</td>
              <td class="border-t px-4 py-2">23456789</td>
              
            </tr>
            <tr>
              <!-- Sample row data, adjust as needed -->
              <td class="border-t px-4 py-2">1</td>
              <td class="border-t px-4 py-2">7vNVe5fKSkAuOtG</td>
              <td class="border-t px-4 py-2">-</td>
              <td class="border-t px-4 py-2">Zsdrftghjbmn Nghf, Kerala, 5467890</td>
              <td class="border-t px-4 py-2">India</td>
              <td class="border-t px-4 py-2">23456789</td>
              
            </tr>
			
            <!-- Additional rows go here -->
          </tbody>
        </table>
        </table>
      </div>
      <div class="mt-4 flex justify-between items-center">
        <div>
          <button class="bg-gray-200 text-gray-800 px-3 py-1 rounded-md mr-1">Previous</button>
          <span class="px-3 py-1">1</span>
          <button class="bg-gray-200 text-gray-800 px-3 py-1 rounded-md ml-1">Next</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>