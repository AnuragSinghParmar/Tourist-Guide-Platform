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
    <h1 class="text-4xl font-extrabold text-pink-800 animate-pulse">Welcome to Jaipur</h1>
    <p class="mt-4 text-lg leading-relaxed">Known as the Pink City, Jaipur is a vibrant mix of royal history, majestic forts, colorful bazaars, and rich Rajasthani culture.</p>
    <h2 class="mt-6 text-2xl font-semibold text-pink-700">Discover Royal Heritage</h2>
    <p class="mt-2 text-lg">Explore iconic sites like Hawa Mahal, Amer Fort, and City Palace. Ride an elephant, shop handcrafted jewelry, and indulge in authentic Rajasthani cuisine.</p>
    <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-pink-600 to-pink-400 text-white font-semibold rounded-lg shadow-md hover:from-pink-700 hover:to-pink-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Book Now</a>
  </div>

  <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
    <h2 class="text-xl font-bold text-pink-700">Quick Facts</h2>
    <img src="../images/jaipur.jpg" alt="Jaipur" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
    <p class="mt-4 text-lg"><strong>Location:</strong> Rajasthan, India</p>
    <p class="text-lg"><strong>Founded:</strong> 1727</p>
    <p class="text-lg"><strong>Famous For:</strong> Palaces, Forts, Traditional Markets</p>
    <hr class="my-4">
    <h2 class="text-xl font-bold text-pink-700">Current Weather</h2>
    <p class="mt-2 text-lg">☀️ 30°C, Sunny</p>
    <p class="mt-1 text-lg">Humidity: 38%</p>
    <p class="mt-1 text-lg">Wind: 11 km/h</p>
  </div>
</div>

<div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-pink-700">Facilities</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Luxury heritage hotels and resorts</li>
      <li>✔ Local guides for historical tours</li>
      <li>✔ Camel and elephant safari options</li>
      <li>✔ Traditional Rajasthani food experiences</li>
      <li>✔ Souvenir shops and textile markets</li>
      <li>✔ Cultural shows and folk music nights</li>
    </ul>
  </div>
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-pink-700">Travel Tips</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Visit forts early to avoid crowds and heat</li>
      <li>✔ Dress modestly while visiting temples</li>
      <li>✔ Best time: November to February</li>
      <li>✔ Carry sunscreen and hydration</li>
      <li>✔ Bargain while shopping in local markets</li>
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
