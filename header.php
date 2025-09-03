<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tourist Guide Platform</title>
    <link rel="stylesheet" href="/tourist-guide/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav class="flex items-center justify-between bg-black text-white px-8 py-4">
            <!-- Left side: Logo -->
            <div class="flex items-center space-x-10">
                <div class="text-xl font-bold">Tourist Guide</div>

                <!-- Navigation Links -->
                <ul class="flex space-x-6 text-white">
                    <li><a href="/tourist-guide/index.php" class="hover:text-yellow-300">Home</a></li>
                    <li><a href="/tourist-guide/pages/attractions.php" class="hover:text-yellow-300">Attractions</a></li>
                    <li><a href="/tourist-guide/pages/booking.php" class="hover:text-yellow-300">Bookings</a></li>
                    <li><a href="/tourist-guide/pages/guides.php" class="hover:text-yellow-300">Guides</a></li>
                    <li><a href="/tourist-guide/pages/itinerary.php" class="hover:text-yellow-300">Itinerary</a></li>
                    <li><a href="/tourist-guide/pages/reviews.php" class="hover:text-yellow-300">Reviews</a></li>
                </ul>
            </div>

            <!-- Right side: Logout button -->
            <a href="/tourist-guide/logout.php" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow">
                Logout
            </a>
        </nav>
    </header>
