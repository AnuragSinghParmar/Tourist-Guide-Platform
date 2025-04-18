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
    <h1 class="text-4xl font-extrabold text-green-800 animate-pulse">Welcome to Arunachal Pradesh</h1>
    <p class="mt-4 text-lg leading-relaxed">
      Arunachal Pradesh, the ‘Land of the Rising Sun’, is a mystical and scenic state in the northeastern part of India, offering unmatched natural beauty, diverse tribal cultures, and breathtaking mountain landscapes.
    </p>
    <h2 class="mt-6 text-2xl font-semibold text-green-700">Uncover Northeast India's Hidden Gem</h2>
    <p class="mt-2 text-lg">
      Visit Tawang Monastery, trek through lush forests, explore waterfalls and high passes, and immerse yourself in unique tribal festivals and Buddhist heritage.
    </p>
    <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-green-600 to-green-400 text-white font-semibold rounded-lg shadow-md hover:from-green-700 hover:to-green-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Book Now</a>
  </div>

  <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
    <h2 class="text-xl font-bold text-green-700">Quick Facts</h2>
    <img src="../images/arunachal.jpg" alt="Arunachal Pradesh" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
    <p class="mt-4 text-lg"><strong>Location:</strong> Northeast India</p>
    <p class="text-lg"><strong>Capital:</strong> Itanagar</p>
    <p class="text-lg"><strong>Famous For:</strong> Mountains, Monasteries, Tribal Culture</p>
    <hr class="my-4">
    <h2 class="text-xl font-bold text-green-700">Current Weather</h2>
    <p class="mt-2 text-lg">🌤️ 18°C, Pleasant</p>
    <p class="mt-1 text-lg">Humidity: 70%</p>
    <p class="mt-1 text-lg">Wind: 10 km/h</p>
  </div>
</div>

<div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-green-700">Facilities</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Eco-lodges and homestays in scenic spots</li>
      <li>✔ Local guides for cultural and nature tours</li>
      <li>✔ Permits assistance for inner-line regions</li>
      <li>✔ Tribal art and handicrafts markets</li>
      <li>✔ Adventure and trekking equipment rentals</li>
      <li>✔ Wildlife exploration and forest camping</li>
    </ul>
  </div>
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-green-700">Travel Tips</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Apply for inner line permit before travel</li>
      <li>✔ Respect tribal customs and traditions</li>
      <li>✔ Best time: October to April</li>
      <li>✔ Carry warm clothes, even in spring</li>
      <li>✔ Travel in groups for remote area access</li>
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
