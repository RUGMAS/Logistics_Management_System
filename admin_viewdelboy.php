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
/* Centered Container Styles */
.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
    padding: 10px;
    border-radius: 2px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
/* Style for the table container */
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
<script>
    // JavaScript function to handle the search functionality
    function searchDeliveryBoys() {
        var input, filter, table, tr, fullName, licenseNumber, location;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("deliveryBoysTable");
        tr = table.getElementsByTagName("tr");

        for (var i = 0; i < tr.length; i++) {
            fullName = tr[i].getElementsByTagName("td")[0];
            licenseNumber = tr[i].getElementsByTagName("td")[1];
            location = tr[i].getElementsByTagName("td")[2];

            if (fullName && licenseNumber && location) {
                var name = (fullName.textContent + " " + licenseNumber.textContent + " " + location.textContent).toUpperCase();

                if (name.indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<body>
    
<div class="search-container right-align">
    <i class="fas fa-search fa-2x"></i>
    <input type="text" id="searchInput" class="cylinder-search" placeholder="Search by Name" onkeyup="searchDeliveryBoys()">
</div>


    <?php
    include('connection.php'); // Include your database connection code

    if (isset($_GET['action']) && isset($_GET['id'])) {
        $action = $_GET['action'];
        $id = $_GET['id'];

        if ($action === 'activate') {
            // Perform the activation logic here (e.g., update the status in the database)
            $sql = "UPDATE delivery_boy SET status = '1' WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Delivery boy activated successfully.");</script>';
            } else {
                echo '<script>alert("Error activating delivery boy: ' . $conn->error . '");</script>';
            }
        }
        elseif ($action === 'deactivate') {
            // Perform the deactivation logic here (e.g., update the status in the database)
            $sql = "UPDATE delivery_boy SET status = '0' WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Delivery boy deactivated successfully.");</script>';
            } else {
                echo '<script>alert("Error deactivating delivery boy: ' . $conn->error . '");</script>';
            }
        }
    }

    $sql = "SELECT * FROM delivery_boy";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the data in a table format
        echo "<h1>Delivery Boy Details</h1>";

        ?>
         <table id="deliveryBoysTable" class="table">
        <tr><th>Full Name</th><th>License Number</th><th>Location</th><th>Action</th>
        <?php
        // echo "<table>";
        // echo "<tr><th>Full Name</th><th>License Number</th><th>Location</th><th>Action</th>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
           
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['license_number'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            
            echo "<td>";
            if ($row['status'] == 0) {
                echo '<a href="?action=activate&id=' . $row['id'] . '">Activate</a>';
            }
            else {
                echo '<a href="?action=deactivate&id=' . $row['id'] . '">Deactivate</a>';
            }
            echo "</td>";
            echo "</tr>";
        }

        // echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</table>
<br><br><br><br>
<div class="button-container">
    <a href="assigndelboy.php" class="button add-delivery-boy">Add Delivery Boy</a>
    <a href="view2.php" class="more-details-button">More Details</a>
</div>
    <meta http-equiv="refresh" content="30"> <!-- Auto-refresh the page every 30 seconds -->
</body>
</html>
