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

<body class="bg-cover bg-center h-screen bg-fixed text-gray-900" style="background-image: url('../Pictures/kerala1.png');">

  <div class="m-28 p-14 bg-white bg-opacity-90 rounded-lg shadow-xl flex flex-wrap fade-in">
    <div class="w-full md:w-2/3 p-6 hero">
      <h1 class="text-4xl font-extrabold text-blue-800 animate-pulse">Experience God's Own Country - Kerala</h1>
      <p class="mt-4 text-lg leading-relaxed">
        Kerala is a tropical paradise in South India known for its tranquil backwaters, lush green landscapes, tea gardens, and cultural richness. From houseboats to Ayurveda, it’s a place of serenity and soul.
      </p>
      <h2 class="mt-6 text-2xl font-semibold text-blue-700">Backwaters. Beaches. Bliss.</h2>
      <p class="mt-2 text-lg">
        Cruise through palm-fringed canals, relax on golden beaches, or hike the misty hills of Munnar. Kerala offers the perfect mix of nature, heritage, and healing.
      </p>
      <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow-md hover:from-blue-700 hover:to-blue-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Plan Your Trip</a>
    </div>

    <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
      <h2 class="text-xl font-bold text-blue-700">Quick Facts</h2>
      <img src="../images/kerala.jpg" alt="Kerala Image" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
      <p class="mt-4 text-lg"><strong>Location:</strong> Southern India</p>
      <p class="text-lg"><strong>Capital:</strong> Thiruvananthapuram</p>
      <p class="text-lg"><strong>Famous For:</strong> Backwaters, Ayurveda, Beaches</p>
      <hr class="my-4">
      <h2 class="text-xl font-bold text-blue-700">Current Weather</h2>
      <p class="mt-2 text-lg">🌧️ 28°C, Humid</p>
      <p class="mt-1 text-lg">Humidity: 92%</p>
      <p class="mt-1 text-lg">Wind: 8 km/h</p>
    </div>
  </div>

  <div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
    <div class="w-1/2 p-4">
      <h2 class="text-2xl font-semibold text-blue-700">Facilities</h2>
      <ul class="mt-4 space-y-4 text-lg">
        <li>✔ Luxury and budget houseboats</li>
        <li>✔ Authentic Ayurvedic treatment centers</li>
        <li>✔ Homestays and eco-resorts</li>
        <li>✔ Local spice and tea plantation tours</li>
        <li>✔ Beach activities and water sports</li>
        <li>✔ Kathakali and cultural shows</li>
        <li>✔ Wildlife sanctuaries and birding hotspots</li>
        <li>✔ Tourist help desks at major spots</li>
      </ul>
    </div>
    <div class="w-1/2 p-4">
      <h2 class="text-2xl font-semibold text-blue-700">Travel Tips</h2>
      <ul class="mt-4 space-y-4 text-lg">
        <li>✔ Carry light cotton clothes and rain gear</li>
        <li>✔ Try local dishes like appam, puttu, and seafood</li>
        <li>✔ Respect traditional customs and temple etiquette</li>
        <li>✔ Best time to visit: October to March</li>
        <li>✔ Stay hydrated in humid areas</li>
        <li>✔ Book houseboats in advance during peak season</li>
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
