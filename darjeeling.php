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
    <h1 class="text-4xl font-extrabold text-red-800 animate-pulse">Welcome to Darjeeling</h1>
    <p class="mt-4 text-lg leading-relaxed">Darjeeling, the "Queen of the Hills," is a charming hill station in West Bengal known for its panoramic views of the Himalayas, colonial charm, and world-famous tea gardens.</p>
    <h2 class="mt-6 text-2xl font-semibold text-red-700">A Blissful Himalayan Getaway</h2>
    <p class="mt-2 text-lg">Explore Tiger Hill sunrise, ride the Darjeeling Himalayan Railway, sip fresh tea from lush plantations, and soak in cool mountain air and culture.</p>
    <a href="booking.php" class="inline-block mt-6 px-8 py-3 bg-gradient-to-r from-red-600 to-red-400 text-white font-semibold rounded-lg shadow-md hover:from-green-700 hover:to-green-500 transition duration-300 transform hover:scale-110 hover:rotate-2">Book Now</a>
  </div>

  <div class="w-full md:w-1/3 bg-gray-100 p-6 rounded-lg text-center shadow-md fade-in">
    <h2 class="text-xl font-bold text-red-700">Quick Facts</h2>
    <img src="../images/darjeeling.jpg" alt="Darjeeling" class="w-full mt-4 rounded shadow-lg hover:scale-110 transition duration-300 hover:rotate-1">
    <p class="mt-4 text-lg"><strong>Location:</strong> West Bengal, India</p>
    <p class="text-lg"><strong>Altitude:</strong> 2,042 meters</p>
    <p class="text-lg"><strong>Famous For:</strong> Tea Gardens, Toy Train, Mountain Views</p>
    <hr class="my-4">
    <h2 class="text-xl font-bold text-red-700">Current Weather</h2>
    <p class="mt-2 text-lg">☁️ 14°C, Cool & Misty</p>
    <p class="mt-1 text-lg">Humidity: 72%</p>
    <p class="mt-1 text-lg">Wind: 9 km/h</p>
  </div>
</div>

<div id="facilities" class="max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300 fade-in flex">
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-red-700">Facilities</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Tea garden tours and tastings</li>
      <li>✔ Mountain-view homestays and hotels</li>
      <li>✔ Scenic toy train rides</li>
      <li>✔ Trekking trails and adventure sports</li>
      <li>✔ Local Tibetan and Nepali cuisine</li>
      <li>✔ Wellness and yoga retreats</li>
      <li>✔ Shopping for handicrafts and woolens</li>
      <li>✔ Heritage sites and Buddhist monasteries</li>
    </ul>
  </div>
  <div class="w-1/2 p-4">
    <h2 class="text-2xl font-semibold text-red-700">Travel Tips</h2>
    <ul class="mt-4 space-y-4 text-lg">
      <li>✔ Carry light woolens year-round</li>
      <li>✔ Best sunrise view: Tiger Hill</li>
      <li>✔ Visit tea gardens in early morning</li>
      <li>✔ Book toy train tickets in advance</li>
      <li>✔ Avoid monsoon months (July–August)</li>
      <li>✔ Best time: March to May, October to December</li>
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
