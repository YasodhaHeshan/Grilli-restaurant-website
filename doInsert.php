<?php
include 'conf.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$person = $_POST['person'];
$reservationdate = $_POST['reservation-date'];
$time = $_POST['time'];
$message = $_POST['message'];

$sql = "INSERT INTO booktable (cusname, teleno, noofper, date, time, message) VALUES ('$name', '$phone', '$person', '$reservationdate', '$time', '$message')";

if (mysqli_query($conn, $sql)) {
    $successMessage = "New record created successfully";
    echo "<script type='text/javascript'>alert('$successMessage'); window.location = 'index.html';</script>";
} else {
    $errorMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script type='text/javascript'>alert('$errorMessage');</script>";
}
?>

