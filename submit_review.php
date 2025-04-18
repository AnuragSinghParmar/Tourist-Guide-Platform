<?php
include '../include/db.php'; // Ensure DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $rating, $comment);
    
    if ($stmt->execute()) {
        echo "<script>alert('Review submitted successfully!'); window.location.href='reviews.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
