<?php
include('connection.php'); // Include your database connection code

// Check if an action is requested (activate a delivery boy)
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action === 'activate') {
        // Perform the activation logic here (e.g., update the status in the database)
        $sql = "UPDATE delivery_boy SET status = '1' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            // Successful update, redirect back to the main page
            header("Location: display_delivery_boys.php");
            exit;
        } else {
            echo "Error activating delivery boy: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
