<?php
// Include the database connection file (conf.php)
require_once('conf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $order_id = $_POST['order_id'];
    $food_item = $_POST['food_item'];
    $location = $_POST['location'];

    // Perform the SQL update
    $sql = "UPDATE orders SET itemname = ? , location = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'sss', $food_item, $location, $order_id);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        // Check if any rows were affected
        $rows_affected = mysqli_stmt_affected_rows($stmt);

        if ($rows_affected > 0) {
            // Display a success message as a JavaScript alert
            $successMessage = "Order updated successfully.";
            echo "<script type='text/javascript'>alert('$successMessage');window.location = 'orders.html';</script>";
        } else {
            // Display an error message for unavailable ID as a JavaScript alert
            $errorMessage = "Error updating order: Order with ID $order_id does not exist.";
            echo "<script type='text/javascript'>alert('$errorMessage');window.location = 'orders.html';</script>";
        }
    } else {
        // Handle other errors as a JavaScript alert
        $errorMessage = "Error updating order: " . mysqli_error($conn);
        echo "<script type='text/javascript'>alert('$errorMessage');</script>";
    }
}
?>



