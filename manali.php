<?php include('../include/header.php'); ?>
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



<div class="m-28 p-14 bg-white bg-opacity-90 rounded-lg shadow-xl flex flex-wrap fade-in">
  <div class="w-full md:w-2/3 p-6 hero">
    <h1 class="text-4xl font-extrabold text-blue-800 animate-pulse">Welcome to Manali</h1>
    <p class="mt-4 text-lg leading-relaxed">Nestled in the mountains of Himachal Pradesh, Manali is a popular hill station offering majestic views of snow-capped peaks, serene valleys, and adventure sports that thrill every visitor.</p>
    <h2 class="mt-6 text-2xl font-semibold text-blue-700">Plan Your Himalayan Escape</h2>
    <p class="mt-2 text-lg">From Solang Valley to Hadimba Temple, paragliding to hot springs — Manali has something for everyone. Enjoy trekking, skiing, and unforgettable mountain charm.</p>
    <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow-md hover:from-blue-700 hover:to-blue-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Book Now</a>
  </div>

  <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
    <h2 class="text-xl font-bold text-blue-700">Quick Facts</h2>
    <img src="../images/manali.jpg" alt="Manali Image" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
    <p class="mt-4 text-lg"><strong>Location:</strong> Himachal Pradesh, India</p>
    <p class="text-lg"><strong>Altitude:</strong> 2,050 meters</p>
    <p class="text-lg"><strong>Famous For:</strong> Adventure, Snowfall, Scenic Beauty</p>
    <hr class="my-4">
    <h2 class="text-xl font-bold text-blue-700">Current Weather</h2>
    <p class="mt-2 text-lg">❄️ 12°C, Cool & Breezy</p>
    <p class="mt-1 text-lg">Humidity: 65%</p>
    <p class="mt-1 text-lg">Wind: 8 km/h</p>
  </div>
</div>

<div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-blue-700">Facilities</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Cozy resorts and riverside cottages</li>
      <li>✔ Trekking gear and snow equipment rentals</li>
      <li>✔ Adventure packages for skiing and rafting</li>
      <li>✔ Local Himachali cuisine and cafes</li>
      <li>✔ Transport and guided mountain tours</li>
      <li>✔ Yoga retreats and wellness centers</li>
      <li>✔ Souvenir shops and winter wear outlets</li>
      <li>✔ Travel help desks at all major spots</li>
    </ul>
  </div>
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-blue-700">Travel Tips</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Pack warm clothes even in summer</li>
      <li>✔ Pre-book hotels during peak seasons</li>
      <li>✔ Carry medicines for motion sickness</li>
      <li>✔ Use snow boots during winter months</li>
      <li>✔ Respect local culture and natural spots</li>
      <li>✔ Best time to visit: October to February</li>
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

<?php include('../include/footer.php'); ?>
