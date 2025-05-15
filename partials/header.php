<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Brand Protection Act</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="https://www.ramp.com/favicon.ico" type="image/x-icon" />


</head>

<body class="bg-ramp-dark text-white">
  <nav id="navbar"
    class="fixed top-0 left-0 w-full z-50 bg-transparent backdrop-blur-sm text-black transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

      <!-- Hamburger (with dynamic icon) -->
      <div id="hamburger" class="md:hidden text-2xl cursor-pointer" onclick="toggleMenu()">
        <i class="fas fa-ellipsis-v"></i>
      </div>

      <!-- Logo -->
      <div class="flex items-center gap-1 font-bold text-xl">
      <img src="BPA Logos.avif" alt="Brand" class="h-12 mx-1">


        Brand Protection Act

      </div>

      <!-- Links -->
      <div id="navLinks" class="hidden md:flex gap-6 text-sm">
        <a href="index.php" class="nav-link px-3 py-1 rounded">Home</a>
        <a href="teams.php" class="nav-link px-3 py-1 rounded">Teams</a>
        <a href="services.php" class="nav-link px-3 py-1 rounded">Services</a>
        <a href="about.php" class="nav-link px-3 py-1 rounded">About Us</a>
        <!-- These two are only visible on mobile -->
        
        <button class="signin-btn border px-4 py-2 rounded-md text-sm md:hidden" onclick="window.location.href='contact.php'">Contact Us</button>

      </div>

      <!-- Desktop Buttons -->
      <div class="hidden md:flex gap-4">
<a href="contact.php" class="bg-ramp-lime hover:bg-lime-300 border px-4 py-2 rounded-md">Contact Us</a>
      </div>
    </div>
  </nav>