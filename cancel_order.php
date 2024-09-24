<?php
// Include the database connection file (conf.php)
require_once('conf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure that the order_id parameter is set and not empty
    if (isset($_POST['order_id']) && !empty($_POST['order_id'])) {
        // Sanitize the input to prevent SQL injection
        $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
        
        // Build and execute the SQL query to cancel the order
        $query = "DELETE FROM orders WHERE id = '$order_id'";
        
        if (mysqli_query($conn, $query)) {
            if (mysqli_affected_rows($conn) > 0) {
                $successMessage = "Order with ID $order_id has been canceled successfully.";
                echo "<script type='text/javascript'>alert('$successMessage');window.location = 'orders.html';</script>";
            } else {
                $errorMessage = "Order with ID $order_id does not exist.";
                echo "<script type='text/javascript'>alert('$errorMessage');window.location = 'orders.html';</script>";
            }
        } else {
            $errorMessage = "Error canceling the order: " . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('$errorMessage');</script>";
        }
    } else {
        $errorMessage = "Order ID is required.";
        echo "<script type='text/javascript'>alert('$errorMessage');window.location = 'orders.html';</script>";
    }
}
?>


