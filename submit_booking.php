<?php
include '../include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $tour = $_POST["tour"];
    $date = $_POST["date"];

    // Prepare and insert into bookings table
    $stmt = $conn->prepare("INSERT INTO bookings (full_name, email, tour_name, tour_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $email, $tour, $date);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='booking.php';</script>";
    } else {
        echo "<script>alert('Error processing booking. Please try again.'); window.location.href='booking.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: booking.php");
    exit();
}
?>
