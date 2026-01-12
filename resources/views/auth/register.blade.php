<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChillHaus | Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .register-bg {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                  url('{{ asset("image/hoodie2.png") }}');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .form-container {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }
    .input-field {
      transition: all 0.3s ease;
      border: 1px solid #e5e7eb;
    }
    .input-field:focus {
      border-color: #000000;
      box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1);
    }
    .register-btn {
      background: linear-gradient(to right, #000000, #374151);
      transition: all 0.3s ease;
    }
    .register-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    .password-strength {
      height: 4px;
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="bg-gray-50">

  <!-- Navigation -->
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

  <!-- Main Content -->
  <main class="register-bg min-h-screen py-12 px-4">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row items-center justify-center gap-12">
        
        <!-- Fashion Image/Text -->
        <div class="lg:w-1/2 text-center lg:text-left">
          <div class="max-w-lg">
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-white mb-6 leading-tight">
              Join the <span class="text-gray-200">ChillHaus</span> Community
            </h1>
            <p class="text-xl text-gray-200 mb-8">
              Create your account to unlock exclusive benefits, track orders, and stay updated with the latest fashion trends.
            </p>
            <div class="hidden lg:block space-y-4">
              <div class="flex items-center text-gray-200">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>10% off your first purchase</span>
              </div>
              <div class="flex items-center text-gray-200">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Early access to new collections</span>
              </div>
              <div class="flex items-center text-gray-200">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Free shipping on orders over $50</span>
              </div>
              <div class="flex items-center text-gray-200">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Member-only sales and discounts</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Registration Form -->
        <div class="lg:w-1/2 flex justify-center">
          <div class="form-container p-10 rounded-2xl w-full max-w-md">
            
            <!-- Logo -->
            <div class="text-center mb-8">
              <div class="inline-block p-3 bg-gray-100 rounded-full mb-4">
                <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                </svg>
              </div>
              <h2 class="text-3xl font-serif font-bold text-gray-800">Create Account</h2>
              <p class="text-gray-600 mt-2">Join ChillHaus today</p>
            </div>

            <!-- Error Messages -->
            @if($errors->any())
              <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                <div class="text-red-600 text-sm">
                  @foreach ($errors->all() as $error)
                    <div class="flex items-center gap-2 mb-1">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                      </svg>
                      {{ $error }}
                    </div>
                  @endforeach
                </div>
              </div>
            @endif

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
              @csrf

              <!-- Name -->
              <div>
                <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                  </div>
                  <input id="name" 
                         type="text" 
                         name="name" 
                         value="{{ old('name') }}" 
                         required 
                         autofocus 
                         autocomplete="name"
                         placeholder="Enter your full name"
                         class="input-field w-full pl-10 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                </div>
              </div>

              <!-- Email Address -->
              <div>
                <label class="block text-gray-700 mb-2 font-medium">Email Address</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                  </div>
                  <input id="email" 
                         type="email" 
                         name="email" 
                         value="{{ old('email') }}" 
                         required 
                         autocomplete="email"
                         placeholder="Enter your email"
                         class="input-field w-full pl-10 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                </div>
              </div>

              <!-- Password -->
              <div>
                <label class="block text-gray-700 mb-2 font-medium">Password</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                  </div>
                  <input id="password" 
                         type="password" 
                         name="password" 
                         required 
                         autocomplete="new-password"
                         placeholder="Create a password"
                         class="input-field w-full pl-10 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div class="mt-2 text-xs text-gray-500">
                  Password must be at least 8 characters with letters and numbers
                </div>
              </div>

              <!-- Confirm Password -->
              <div>
                <label class="block text-gray-700 mb-2 font-medium">Confirm Password</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                  </div>
                  <input id="password_confirmation" 
                         type="password" 
                         name="password_confirmation" 
                         required 
                         autocomplete="new-password"
                         placeholder="Confirm your password"
                         class="input-field w-full pl-10 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                </div>
              </div>

              <!-- Terms & Conditions -->
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="terms" 
                         name="terms" 
                         type="checkbox" 
                         required
                         class="h-4 w-4 text-black focus:ring-black border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                  <label for="terms" class="text-gray-700">
                    I agree to the 
                    <a href="/terms" class="text-black font-medium hover:underline">Terms of Service</a>
                    and 
                    <a href="/privacy" class="text-black font-medium hover:underline">Privacy Policy</a>
                  </label>
                </div>
              </div>

              <!-- Newsletter Subscription -->
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="newsletter" 
                         name="newsletter" 
                         type="checkbox"
                         class="h-4 w-4 text-black focus:ring-black border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                  <label for="newsletter" class="text-gray-700">
                    Subscribe to our newsletter for exclusive offers and updates
                  </label>
                </div>
              </div>

              <!-- Register Button -->
              <button type="submit"
                      class="register-btn w-full text-white py-3 rounded-lg font-semibold text-lg">
                Create Account
              </button>

              <!-- Divider -->
              <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                  <span class="px-4 bg-white text-gray-500">Or sign up with</span>
                </div>
              </div>

              <!-- Social Sign Up -->
              <div class="grid grid-cols-2 gap-4">
                <button type="button" 
                        class="flex items-center justify-center gap-2 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                  <svg class="w-5 h-5" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                  </svg>
                  Google
                </button>
                <button type="button" 
                        class="flex items-center justify-center gap-2 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                  <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                  </svg>
                  Facebook
                </button>
              </div>
            </form>

            <!-- Login Link -->
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
              <p class="text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-black font-semibold hover:underline ml-1">
                  Log in here
                </a>
              </p>
            </div>

            <!-- Back to Home -->
            <div class="mt-4 text-center">
              <a href="/" class="inline-flex items-center text-gray-500 hover:text-black transition text-sm">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to homepage
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
</html>