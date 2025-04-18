<?php include '../include/header.php'; ?>

<section class="py-16 min-h-screen bg-gradient-to-br from-blue-50 via-purple-100 to-pink-100">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-purple-800 mb-10 drop-shadow-lg">Book a Memorable Tour</h2>
        
        <form action="submit_booking.php" method="POST" class="bg-white bg-opacity-90 p-8 rounded-2xl shadow-2xl space-y-6">
            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Full Name</label>
                <input type="text" name="full_name" class="w-full p-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none" placeholder="Your Name" required>
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Email</label>
                <input type="email" name="email" class="w-full p-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none" placeholder="you@example.com" required>
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Select Tour</label>
                <select name="tour" class="w-full p-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none bg-white" required>
                    <option value="">-- Select a Tour --</option>
                    <option value="Sundarbans Wildlife Safari">Sundarbans Wildlife Safari</option>
                    <option value="Darjeeling Himalayan Trail">Darjeeling Himalayan Trail</option>
                    <option value="Jaipur Cultural Tour">Jaipur Cultural Tour</option>
                </select>
            </div>

            <div>
                <label class="block text-lg font-semibold text-gray-700 mb-1">Date</label>
                <input type="date" name="date" class="w-full p-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none bg-white" required>
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white text-lg py-3 rounded-xl font-bold transition duration-300 shadow-md">
                Book Now
            </button>
        </form>
    </div>
</section>

<?php include '../include/footer.php'; ?>
