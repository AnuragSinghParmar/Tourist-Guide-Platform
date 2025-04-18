<?php include '../include/header.php'; ?>
<?php include '../include/db.php'; ?>


<section class="min-h-screen bg-gray-100 py-16">
    <div class="max-w-3xl mx-auto px-6 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Leave a Review</h2>

        <!-- Review Form -->
        <form action="submit_review.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Your Name</label>
                <input type="text" name="name" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Rating (1-5)</label>
                <input type="number" name="rating" min="1" max="5" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Your Review</label>
                <textarea name="comment" rows="4" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-lg py-3 rounded-lg font-bold transition duration-300">
                Submit Review
            </button>
        </form>
    </div>

    <!-- Display Reviews -->
    <div class="max-w-3xl mx-auto px-6 mt-12">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Reviews</h2>

        <?php
        $result = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="bg-white p-6 shadow-lg rounded-lg mb-4">';
                echo '<h3 class="text-xl font-semibold">' . htmlspecialchars($row["name"]) . '</h3>';
                echo '<p class="text-gray-700">' . htmlspecialchars($row["comment"]) . '</p>';
                echo '<p class="text-yellow-500">⭐ ' . $row["rating"] . '/5</p>';
                echo '<small class="text-gray-500">' . $row["created_at"] . '</small>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-gray-700 text-center">No reviews yet. Be the first to leave a review!</p>';
        }
        ?>
    </div>
</section>

<?php include '../include/footer.php'; ?>
