<?php include '../include/header.php'; ?>
<?php include '../include/db.php'; ?>

<section class="min-h-screen bg-gray-100 py-16">
    <div class="max-w-3xl mx-auto px-6 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Create Your Itinerary</h2>

        <form action="submit_itinerary.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Your Name</label>
                <input type="text" name="user_name" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Itinerary Name</label>
                <input type="text" name="itinerary_name" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="relative w-full">
                <label class="block text-lg font-semibold text-gray-700 mb-1">Select a Place to Visit</label>
                <div id="dropdownBtn" class="w-full bg-white border p-3 rounded-lg cursor-pointer flex justify-between items-center">
                    <span id="selectedOption">Select a destination</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div id="dropdownList" class="absolute z-10 bg-white border w-full mt-1 rounded-lg shadow-lg hidden max-h-60 overflow-y-auto">
                    <?php
                    $destinations = [
                        "Manali" => "manali.jpg",
                        "Jaipur" => "jaipur.jpg",
                        "Sundarbans" => "sundarbans.jpg",
                        "Darjeeling" => "darjeeling.jpg",
                        "Kerala" => "kerala.jpg",
                        "Arunachal Pradesh" => "arunachal.jpg"
                    ];
                    foreach ($destinations as $place => $img) {
                        echo '<div class="p-2 hover:bg-gray-100 cursor-pointer flex items-center gap-3" data-value="' . $place . '">';
                        echo '<img src="../assets/images/places/' . $img . '" class="w-8 h-8 object-cover rounded" />';
                        echo '<span>' . $place . '</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <input type="hidden" name="places" id="selectedValue">
            </div>

            <!-- Budget -->
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Tour Budget (in ₹)</label>
                <input type="number" name="budget" min="0" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Start Date -->
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Start Date</label>
                <input type="date" name="start_date" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- End Date -->
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">End Date</label>
                <input type="date" name="end_date" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white text-lg py-3 rounded-lg font-bold transition duration-300">
                Save Itinerary
            </button>
        </form>
    </div>

    <div class="max-w-3xl mx-auto px-6 mt-12">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Saved Itineraries</h2>

        <?php
        $result = $conn->query("SELECT * FROM itineraries ORDER BY created_at DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="bg-white p-6 shadow-lg rounded-lg mb-4">';
                echo '<h3 class="text-xl font-semibold">' . htmlspecialchars($row["itinerary_name"]) . '</h3>';
                echo '<p class="text-gray-700"><strong>By:</strong> ' . htmlspecialchars($row["user_name"]) . '</p>';
                echo '<p class="text-gray-700"><strong>Places:</strong> ' . htmlspecialchars($row["places"]) . '</p>';
                echo '<p class="text-gray-700"><strong>Budget:</strong> ₹' . htmlspecialchars($row["budget"]) . '</p>';
                echo '<p class="text-gray-700"><strong>Tour Dates:</strong> ' . htmlspecialchars($row["start_date"]) . ' to ' . htmlspecialchars($row["end_date"]) . '</p>';
                echo '<small class="text-gray-500">' . $row["created_at"] . '</small>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-gray-700 text-center">No itineraries yet. Start planning your trip!</p>';
        }
        ?>
    </div>
</section>

<!-- Dropdown functionality -->
<script>
    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownList = document.getElementById('dropdownList');
    const selectedOption = document.getElementById('selectedOption');
    const selectedValue = document.getElementById('selectedValue');

    dropdownBtn.addEventListener('click', () => {
        dropdownList.classList.toggle('hidden');
    });

    dropdownList.querySelectorAll('[data-value]').forEach(option => {
        option.addEventListener('click', () => {
            selectedOption.innerHTML = option.innerHTML;
            selectedValue.value = option.getAttribute('data-value');
            dropdownList.classList.add('hidden');
        });
    });

    document.addEventListener('click', function (e) {
        if (!dropdownBtn.contains(e.target) && !dropdownList.contains(e.target)) {
            dropdownList.classList.add('hidden');
        }
    });
</script>

<?php include '../include/footer.php'; ?>
