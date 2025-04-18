<?php include '../include/header.php'; ?>

<style>
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 1s ease-in-out;
    }
    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }
    .hero {
        animation: zoom-in 3s ease-in-out infinite alternate;
    }
    @keyframes zoom-in {
        from { transform: scale(1); }
        to { transform: scale(1.05); }
    }
    .slide-in {
        transform: translateX(-50px);
        opacity: 0;
        transition: all 1s ease-in-out;
    }
    .slide-in.show {
        transform: translateX(0);
        opacity: 1;
    }
    .bounce {
        animation: bounce 2s infinite;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
</style>

<body class="bg-cover bg-center bg-fixed text-gray-900" style="background-image: url('../Pictures/deer.png');">
    <div class="m-28 p-14 bg-white bg-opacity-90 rounded-lg shadow-xl flex flex-wrap fade-in">
        <div class="w-full md:w-2/3 p-6 hero">
            <h1 class="text-4xl font-extrabold text-blue-800 animate-pulse">Welcome to Sundarban Wildlife Sanctuary</h1>
            <p class="mt-4 text-lg leading-relaxed">
                Explore the largest mangrove forest in the world, home to the majestic Royal Bengal Tiger. Sundarbans is a UNESCO World Heritage Site and a haven for wildlife enthusiasts, bird watchers, and nature lovers.
            </p>
            <h2 class="mt-6 text-2xl font-semibold text-blue-700">Plan Your Wild Escape</h2>
            <p class="mt-2 text-lg">
                Cruise through winding rivers, spot crocodiles sunbathing on muddy banks, and experience the raw beauty of the delta where land meets sea.
            </p>
            <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow-md hover:from-blue-700 hover:to-blue-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Book Your Tour</a>
        </div>

        <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
            <h2 class="text-xl font-bold text-blue-700">Quick Facts</h2>
            <img src="../images/sundarban.jpg" alt="Sundarban Image" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
            <p class="mt-4 text-lg"><strong>Location:</strong> West Bengal, India</p>
            <p class="text-lg"><strong>Area:</strong> 10,000+ sq km (shared with Bangladesh)</p>
            <p class="text-lg"><strong>Famous For:</strong> Royal Bengal Tiger, Mangroves, Biodiversity</p>
            <hr class="my-4">
            <h2 class="text-xl font-bold text-blue-700">Current Weather</h2>
            <p class="mt-2 text-lg">🌤️ 30°C, Humid</p>
            <p class="mt-1 text-lg">Humidity: 88%</p>
            <p class="mt-1 text-lg">Wind: 6 km/h</p>
        </div>
    </div>

    <div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
        <div class="w-1/2 p-4">
            <h2 class="text-2xl font-semibold text-blue-700">Facilities</h2>
            <ul class="mt-4 space-y-4 text-lg">
                <li>✔ Eco-lodges and forest resorts</li>
                <li>✔ River boat safaris with trained guides</li>
                <li>✔ Nature interpretation centers</li>
                <li>✔ Birdwatching towers and observation decks</li>
                <li>✔ Emergency response and rescue stations</li>
                <li>✔ Traditional Bengali food and cuisine</li>
                <li>✔ Cultural programs and tribal showcases</li>
                <li>✔ Secure forest permits and travel assistance</li>
            </ul>
        </div>
        <div class="w-1/2 p-4">
            <h2 class="text-2xl font-semibold text-blue-700">Travel Tips</h2>
            <ul class="mt-4 space-y-4 text-lg">
                <li>✔ Wear light cotton clothes and carry insect repellent</li>
                <li>✔ Avoid making noise during wildlife spotting</li>
                <li>✔ Respect the forest rules and guides' instructions</li>
                <li>✔ Best time to visit: November to March</li>
                <li>✔ Carry binoculars and waterproof gear</li>
                <li>✔ Support eco-friendly tourism and local communities</li>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.fade-in, .slide-in').forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('show');
                }, index * 300);
            });
        });
    </script>

<?php include '../include/footer.php'; ?>
