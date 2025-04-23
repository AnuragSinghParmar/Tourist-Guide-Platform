<?php
include '../include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $itinerary_name = $_POST["itinerary_name"];
    $places = $_POST["places"];
    $budget = isset($_POST["budget"]) ? $_POST["budget"] : null;
    $start_date = isset($_POST["start_date"]) ? $_POST["start_date"] : null;
    $end_date = isset($_POST["end_date"]) ? $_POST["end_date"] : null;

    $stmt = $conn->prepare("INSERT INTO itineraries (user_name, itinerary_name, places, budget, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $user_name, $itinerary_name, $places, $budget, $start_date, $end_date);

    if ($stmt->execute()) {
        echo "<script>alert('Itinerary saved successfully!'); window.location.href='itinerary.php';</script>";
    } else {
        echo "<script>alert('Error saving itinerary.'); window.location.href='itinerary.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
