<?php
include 'conf.php';

$name = $_POST['customer_name'];
$item = $_POST['food_item'];
$location = $_POST['location'];

$sql = "INSERT INTO orders (cuname, itemname, location) VALUES ('$name', '$item', '$location')";

if (mysqli_query($conn, $sql)) {
    // Get the last inserted order ID
    $lastOrderID = mysqli_insert_id($conn);

    $successMessage = "New record created successfully. Order ID: $lastOrderID";
    echo "<script type='text/javascript'>alert('$successMessage');window.location = 'orders.html';</script>";
} else {
    $errorMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script type='text/javascript'>alert('$errorMessage');</script>";
}
?>
