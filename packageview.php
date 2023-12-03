<!DOCTYPE html>
<html>
<head>
    <title>Delivery Boy Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    /* styles.css */

/* Style for the table */

/* Global Styles */
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
/* Centered Container Styles */
.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
    padding: 10px;
    border-radius: 2px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
/* Styles for the table container */
.table-container {
    background-color: #fff; /* White background color for the table container */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center; /* Center-align the table within the container */
}

/* Table Styles */
table {
    border-collapse: collapse;
    width: 80%; /* Adjust the width as needed */
    background-color: #fff; /* White background for the table */
    margin: 0 auto; /* Center-align the table within the container */
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #247BA0; /* Header background color */
    color: #fff;
}

/* Styles for icons */
.icon {
    margin-right: 5px;
    cursor: pointer;
}

/* Green Edit Button */
.edit-btn {
    color: #fff;
    background-color: #28a745;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

/* Red Delete Button */
.delete-btn {
    color: #fff;
    background-color: #dc3545;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}
/* Style for the buttons */
a {
    display: inline-block;
    padding: 5px 10px;
    margin: 5px;
    text-decoration: none;
    background-color: #337ab7;
    color: #fff;
    border: 1px solid #2e6da4;
    border-radius: 3px;
}

a:hover {
    background-color: #23527c;
}
/* Add this CSS rule to align the search container to the right */
.right-align {
    text-align: right;
}

/* You may also want to adjust the input width and margin for better alignment */
.search-container input {
    width: 500px; /* Adjust the width as needed */
    margin-left: 10px; /* Add margin for spacing */
}
/* Apply CSS to increase the size of the search bar */
.large-search {
    width: 650px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    font-size: 16px; /* Adjust the font size as needed */
    padding: 5px; /* Add padding for spacing within the input */
}
/* Apply CSS to create a cylinder-shaped search bar */
.cylinder-search {
    width: 250px; /* Adjust the width as needed */
    height: 40px; /* Adjust the height as needed */
    font-size: 16px; /* Adjust the font size as needed */
    padding: 5px; /* Add padding for spacing within the input */
    border-radius: 20px; /* Use a border-radius to create rounded corners */
}

/* Center the button container using flexbox */
.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; /* Adjust the gap as needed for spacing between buttons */
}
footer {
            background-color: #0099cc; /* Dark Blue */
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        footer {
    font-size: 14px; /* Adjust the font size to make the text smaller */
    padding: 2px 0; /* Adjust the padding as needed for spacing */
}
.center-container {
    text-align: center;
}

.login-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
    margin-top: 20px; /* Adjust margin as needed */
}

.login-button i {
    margin-right: 5px;
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
    <form>
       <div class="search-container right-align">
    <i class="fas fa-search fa-2x"></i>
    <input type="text" id="searchInput" class="cylinder-search" placeholder="Search by Name" onkeyup="searchDeliveryBoys()">
</div>
    </form>
    <div id="searchResults">
    </div><br><br>
        <table>
            <thead>
                <tr>
                    <th>Reference Number</th>
                    <th>Sender Name</th>
                    <th>Recipient Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data row (replace with dynamic data) -->
                <tr>
    <td>789012</td>
    <td>Jane Smith</td>
    <td>John Smith</td>
    <td>Shipped</td>
    <td>
        <a href="view-link" title="View">
            <i class="fas fa-eye icon"></i>
        </a>
        <a href="edit-link" title="Edit" class="edit-btn">
            <i class="fas fa-edit icon"></i>
        </a>
        <a href="delete-link" title="Delete" class="delete-btn">
            <i class="fas fa-trash-alt icon"></i>
        </a>
    </td>
</tr>
    <td>789012</td>
    <td>Jane Smith</td>
    <td>John Smith</td>
    <td>Shipped</td>
    <td>
        <a href="view-link" title="View">
            <i class="fas fa-eye icon"></i>
        </a>
        <a href="edit-link" title="Edit" class="edit-btn">
            <i class="fas fa-edit icon"></i>
        </a>
        <a href="delete-link" title="Delete" class="delete-btn">
            <i class="fas fa-trash-alt icon"></i>
        </a>
    </td>
</tr>
<tr>
    <td>654321</td>
    <td>Alice Johnson</td>
    <td>Bob Johnson</td>
    <td>In Transit</td>
    <td>
        <a href="view-link" title="View">
            <i class="fas fa-eye icon"></i>
        </a>
        <a href="edit-link" title="Edit" class="edit-btn">
            <i class="fas fa-edit icon"></i>
        </a>
        <a href="delete-link" title="Delete" class="delete-btn">
            <i class="fas fa-trash-alt icon"></i>
        </a>
    </td>
</tr>
<tr>
    <td>111222</td>
    <td>David Brown</td>
    <td>Emily Brown</td>
    <td>Out for Delivery</td>
    <td>
        <a href="view-link" title="View">
            <i class="fas fa-eye icon"></i>
        </a>
        <a href="edit-link" title="Edit" class="edit-btn">
            <i class="fas fa-edit icon"></i>
        </a>
        <a href="delete-link" title="Delete" class="delete-btn">
            <i class="fas fa-trash-alt icon"></i>
        </a>
    </td>
</tr>
<tr>
    <td>333444</td>
    <td>Sarah Miller</td>
    <td>Michael Miller</td>
    <td>Delayed</td>
    <td>
        <a href="view-link" title="View">
            <i class="fas fa-eye icon"></i>
        </a>
        <a href="edit-link" title="Edit" class="edit-btn">
            <i class="fas fa-edit icon"></i>
        </a>
        <a href="delete-link" title="Delete" class="delete-btn">
            <i class="fas fa-trash-alt icon"></i>
        </a>
    </td>
</tr>
            </tbody>
        </table>
    </div>
    <div class="center-container">
    <a href="admindashboard.php" class="login-button">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
    </div><br><br><br>
</body>
</html>
