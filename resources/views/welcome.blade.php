<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChillHaus | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-white min-h-screen text-white">
    
    <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <nav class="container mx-auto p-6 flex justify-between items-center"> 
      <a href="/" class="text-black text-3xl font-serif font-bold tracking-wider ml-4 hover:text-gray-700 transition duration-300">ChillHaus</a>
      <div class="flex items-center mr-10 gap-8">
        <a href="/" class="text-black hover:text-gray-600 transition duration-300 font-medium">Home</a> 

        <a href="/about" class="text-black hover:text-gray-600 transition duration-300 font-medium">About</a>
        <a href="/brand" class="text-black hover:text-gray-600 transition duration-300 font-medium">Brand</a>  
        <a href="/lookbook" class="text-black hover:text-gray-600 transition duration-300 font-medium">Lookbook</a>
        <a href="/shop" class="text-black hover:text-gray-600 transition duration-300 font-medium">Shop</a>
        <a href="/faq" class="text-black hover:text-gray-600 transition duration-300 font-medium">FAQ</a>
        <a href="/contact" class="text-black hover:text-gray-600 transition duration-300 font-medium">Contact</a>
      
        <div class="icons flex space-x-4 items-center ml-8">
        <a href="{{ route('login') }}">
            <img src="{{ asset('image/user.png') }}" alt="Login" class="w-8 h-8 hover:scale-110 transition duration-200">
        </a>

          <a href="/cart">
            <img src="{{ asset('image/shopping.png') }}" alt="Cart" class="w-8 h-8 hover:scale-110 transition duration-200">
          </a>

        </div>  
      </div>
    </nav>
  </header>

  <!-- Main Section - Full Screen Background Slideshow -->
  <section class="relative">
    <div class="slide-container">
      <!-- Slides -->
      <div class="slide active">
        <img src="{{ asset('image/und1.png') }}" alt="Fashion Model 1" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Winter Collection</h1>
          <p class="text-xl md:text-2xl mb-8">Embrace the chill in style</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">Shop Now</a>
        </div>
      </div>

      <div class="slide">
        <img src="{{ asset('image/und2.png') }}" alt="Fashion Model 2" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Urban Elegance</h1>
          <p class="text-xl md:text-2xl mb-8">Street style redefined</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">Discover</a>
        </div>
      </div>

      <div class="slide">
        <img src="{{ asset('image/dbtk7.png') }}" alt="Fashion Model 3" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Minimalist Chic</h1>
          <p class="text-xl md:text-2xl mb-8">Less is more</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">Explore</a>
        </div>
      </div>
      
      <div class="slide">
        <img src="{{ asset('image/dbtk8.png') }}" alt="Fashion Model 4" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Bold Statements</h1>
          <p class="text-xl md:text-2xl mb-8">Make your mark</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">Shop Collection</a>
        </div>
      </div>

      <div class="slide">
        <img src="{{ asset('image/hghmds5.png') }}" alt="Fashion Model 5" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Seasonal Essentials</h1>
          <p class="text-xl md:text-2xl mb-8">Curated for you</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">View All</a>
        </div>
      </div>

      <div class="slide">
        <img src="{{ asset('image/hgmnds6.png') }}" alt="Fashion Model 6" class="w-full h-full object-cover">
        <div class="slide-content">
          <h1 class="text-5xl md:text-7xl font-bold mb-6">Latest Arrivals</h1>
          <p class="text-xl md:text-2xl mb-8">Fresh styles just in</p>
          <a href="/shop" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition duration-300 text-lg font-medium">Shop New</a>
        </div>
      </div>

      <!-- Navigation Arrows -->
      <button class="nav-btn prev-btn" onclick="prevSlide()">❮</button>
      <button class="nav-btn next-btn" onclick="nextSlide()">❯</button>

      <!-- Slide Counter -->
      <div class="slide-counter">
        <span id="current-slide">1</span> / <span id="total-slides">6</span>
      </div>

      <!-- Dots Indicator -->
      <div class="dots-container" id="dots-container">
        <!-- Dots will be generated by JavaScript -->
      </div>
    </div>
  </section>


   <!-- Additional Content Section -->
  <section class="container mx-auto mt-16 p-6 bg-white bg-opacity-20 rounded-lg border border-gray-300 divhover">
    <div class="Products">
      <h2 class="text-3xl text-black font-bold mb-6 text-center icy-text-light">All Products</h2>
      <img src="{{ asset('image/hoodie2.png') }}" alt="Logo">
     
  </section>






  <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
  