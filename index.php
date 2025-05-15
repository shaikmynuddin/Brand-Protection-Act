<?php include './partials/header.php'; ?>
<!-- Section 1: Hero -->
<section class="hero-section px-6 md:px-12 pt-20 my-20 flex flex-col md:flex-row items-center justify-between gap-6">
  <div class="flex flex-col items-center w-full md:w-[45%] sm:text-center  md:text-left ">
    <img src="./assets/img/BPA Logos_edited_edited.avif" alt="Brand Logo" class="w-48 mb-6 sm:mx-auto" />
    <p class="text-white/70 text-lg mb-6">
      The Worlds first Online/Offline
      Brand protection.
    </p>
    <div class="flex items-center gap-3 mb-6 sm:text-center">
      <div class="bg-white/10 px-3 py-1 rounded-full flex items-center gap-2 text-sm text-white ">
        <i class="fas fa-star text-yellow-400"></i> 4.8 stars <span class="text-white/60">2,000+ reviews</span>
      </div>
      <a href="#" class="text-ramp-lime text-sm group hover:underline">
        Explore product <span
          class="inline-block group-hover:translate-x-2 group-hover:opacity-0 transition-all duration-300">→</span>
      </a>


    </div>

    <button type="submit" class="bg-ramp-lime hover:bg-lime-300 px-5 py-3 rounded-md text-sm font-bold text-white">
      Get in Touch
    </button>
  </div>
  <div class="relative w-full md:w-[45%] text-white text-center md:text-right">
    <p class="text-lg font-semibold mb-4">
      Farath Ibrahim<br />
    <P class="text-sm group m-1">CEO of Brand Protection Act</P>
    </p>

    <video
      id="promoVideo"
      class="w-full rounded-xl shadow-lg border-4 border-white/10"
      autoplay
      muted
      loop
      playsinline>
      <source src="./assets/img/8731561-hd_1920_1080_25fps.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Sound toggle icon -->
    <div class="flex justify-end mt-2 pr-2">
      <button onclick="toggleMute()" class="text-white text-xl hover:text-ramp-lime transition">
        <i id="soundIcon" class="fas fa-volume-mute"></i>
      </button>
    </div>
  </div>
</section>

<!-- Section 2: Brand Logos -->
<!-- <div class="text-center bg-transparent">
  <h2 class="text-xl md:text-2xl font-semibold mb-6 text-black">
    30,000+ finance teams have saved millions of hours with Ramp.
  </h2>
  <div class="relative w-full overflow-hidden py-4">
    <div class="flex animate-scroll-x whitespace-nowrap">
      <!-- Original logos with icons 
      <div class="inline-flex items-center gap-12 px-6 ">
        <div class="flex items-center gap-2">
          <i class="fas fa-door-open text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Opendoor</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-building text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">ZOLACO</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-graduation-cap text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">KUMON</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-chrome text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Webflow</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-quora text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Quora</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-stripe text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Stripe</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-city text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">CBRE</span>
        </div>
      </div>
      <!-- Duplicate logos for seamless loop 
      <div class="inline-flex items-center gap-12 px-6">
        <div class="flex items-center gap-2">
          <i class="fas fa-door-open text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Opendoor</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-building text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">ZOLACO</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-graduation-cap text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">KUMON</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-chrome text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Webflow</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-quora text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Quora</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-stripe text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Stripe</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-city text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">CBRE</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fab fa-quora text-2xl text-white/80"></i>
          <span class="text-white font-medium text-xl">Quora</span>
        </div>
      </div>
    </div>
  </div>
</div> -->



<!-- Ramp Product Suite Section  2 nd section-->
<section class="bg-white py-20 px-6 md:px-16">
  <div class="max-w-6xl mx-auto">
  <h2 class="text-sm font-semibold text-gray-500 text-center mb-2">Brand Protection</h2>
  <h3 class="text-4xl font-bold text-black text-center mb-4">
    How Do We Protect?</h3>
  <p class="text-gray-600 text-lg text-center mb-12">
    *Brand Protection Act* employs a sophisticated, multi-layered approach to brand protection, ensuring that every potential avenue of counterfeiting is addressed and neutralized:
  </p>

  <!-- Grid Layout -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center sm:justify-items-start">

    <!-- Example 1 -->
    <div class="flex items-center gap-4">
      <div class=" bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-chart-line text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">
Market Monitoring and Intelligence</h4>
        <p class="text-gray-700 text-sm">Put Ramp AI to work for you.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 2 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-bullhorn text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Accounts Payable</h4>
        <p class="text-gray-700 text-sm">Process bills in seconds.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 3 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-gavel text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Corporate Cards</h4>
        <p class="text-gray-700 text-sm">Control spend before it happens.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 4 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-user-shield text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Procurement</h4>
        <p class="text-gray-700 text-sm">Run intake-to-pay without delay.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 5 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-clipboard-list text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Expense Management</h4>
        <p class="text-gray-700 text-sm">Expenses that submit themselves.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 6 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-scale-balanced text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Intellectual Property (IP) Protection and Legal Services</h4>
        <p class="text-gray-700 text-sm">Accelerate your monthly close.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 7 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-route text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Travel</h4>
        <p class="text-gray-700 text-sm">Travel that’s always in policy.</p>
      </div>
      <div class="ml-auto hide-sm text-black text-sm">→</div>
    </div>

    <!-- Example 8 -->
    <div class="flex items-center gap-4">
      <div class="bg-gray-100 p-5 rounded-lg flex-shrink-0 sm:self-start self-center">
        <i class="fas fa-chart-line text-3xl text-black hover:scale-110 transition-transform duration-300"></i>
      </div>
      <div>
        <h4 class="font-semibold text-black text-sm">Ramp Treasury</h4>
        <p class="text-gray-700 text-sm">Business accounts that earn more.</p>
      </div>
  
    </div>

  </div>
</div>

</section>
 <!-- How it works -->
  <section class="px-6 py-12">
    <div class="text-center max-w-2xl mx-auto">
      <h2 class="text-4xl font-bold text-black">
        How it works<span class="text-black">?</span>
      </h2>
      <p class="mt-2 text-lg text-gray-800">
        A simple, visual representation of how your process works, broken down into 4 easy steps.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-md p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <h3 class="font-bold text-xl mb-2 text-black">Consultation</h3>
        <p class="text-gray-800">Understand your brand’s unique needs.</p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-md p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <h3 class="font-bold text-xl mb-2 text-black">Tailored Solutions</h3>
        <p class="text-gray-800">Develop and integrate advanced anti-counterfeiting measures.</p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-md p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <h3 class="font-bold text-xl mb-2 text-black">Continuous Monitoring</h3>
        <p class="text-gray-800">Provide ongoing protection and updates.</p>
      </div>
      <!-- Card 4 -->
      <div class="bg-white rounded-2xl shadow-md p-6 transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <h3 class="font-bold text-xl mb-2 text-black">Legal Enforcement</h3>
        <p class="text-gray-800">Assistance with global legal actions to combat counterfeiters.</p>
      </div>
    </div>
  </section>

  <!-- Our Objective -->
  <section class="bg-gradient-to-r from-gray-100 via-white to-gray-100 py-16 transition-all duration-500">
    <div class="max-w-6xl mx-auto px-6 flex flex-col lg:flex-row items-start gap-10">
      <!-- Logo -->
      <div class="flex justify-center lg:justify-start w-full lg:w-auto">
        <div class="text-6xl font-bold border-4 p-6 rounded-xl text-black">BPA</div>
      </div>

      <!-- Objective Cards -->
      <div class="space-y-6 w-full">
        <div class="bg-white/60 backdrop-blur rounded-xl shadow-md p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl">
          <h3 class="text-xl font-bold text-black">Total Eradication of Counterfeit Goods</h3>
          <p class="text-gray-800">
            Our primary objective is to systematically identify and eliminate counterfeit products from the market,
            preserving the integrity and exclusivity of your brand.
          </p>
        </div>
        <div class="bg-white/60 backdrop-blur rounded-xl shadow-md p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl">
          <h3 class="text-xl font-bold text-black">Vigorous Enforcement of Intellectual Property Rights</h3>
          <p class="text-gray-800">
            We rigorously enforce your intellectual property rights, taking legal action against infringers and
            pursuing significant penalties to deter future counterfeiting activities.
          </p>
        </div>
        <div class="bg-white/60 backdrop-blur rounded-xl shadow-md p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl">
          <h3 class="text-xl font-bold text-black">Preservation of Market Integrity</h3>
          <p class="text-gray-800">
            By ensuring that only genuine products reach consumers, we work to maintain the integrity of the market
            and reinforce consumer trust in your brand.
          </p>
        </div>
        <div class="bg-white/60 backdrop-blur rounded-xl shadow-md p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl">
          <h3 class="text-xl font-bold text-black">Protection of Consumer Safety</h3>
          <p class="text-gray-800">
            Eliminating counterfeits helps protect consumers from potentially unsafe or substandard products.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Logo Slider Section -->
<section class="py-16 bg-gradient-to-r from-gray-50 via-white to-gray-50 overflow-hidden">
  <div class="relative max-w-7xl mx-auto px-4">
    
    <!-- Scrolling logos container -->
    <div class="overflow-hidden">
      <div class="flex animate-scroll w-max space-x-8">
        <!-- Repeat logos for smooth infinite loop -->
        <div class="flex space-x-8">
          <!-- Logo Card -->
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/Alzlg.jpeg" alt="Indian Express" class="h-10">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/h.jpeg" alt="Al Jazeera" class="h-10">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/ET.png" alt="Economic Times" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/inlg.png" alt="TOI" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/live.jpeg" alt="Live Mint" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/TOI.jpeg" alt="HT" class="h-8">
          </div>
        </div>

        <!-- Duplicate logos for seamless looping -->
        <div class="flex space-x-8">
          <!-- Same logos duplicated -->
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/Alzlg.jpeg" alt="Indian Express" class="h-10">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/ET.png" alt="Al Jazeera" class="h-10">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/h.jpeg" alt="Economic Times" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/inlg.png" alt="TOI" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/live.jpeg" alt="Live Mint" class="h-8">
          </div>
          <div class="bg-white rounded-2xl shadow p-4 w-32 h-32 flex items-center justify-center">
            <img src="./assets/img/TOI.jpeg" alt="HT" class="h-8">
          </div>
        </div>
      </div>
    </div>

    <!-- Quote Section -->
    <div class="text-center mt-12 max-w-2xl mx-auto">
      <div class="flex items-center justify-center gap-4">
        <img src="./assets/img/t1.jpg" class="rounded-full w-12 h-12" alt="CEO">
        <div class="text-left">
          <h4 class="font-bold text-lg">Ishaq Ibrahim</h4>
          <p class="text-sm text-gray-600">CEO of Brand Protection Act</p>
        </div>
      </div>
      <p class="mt-4 italic text-gray-700">
        “At Brand Protection Act, we don’t just protect brands, we preserve trust, reputation, and legacy.”
      </p>
    </div>

  </div>
</section>

  <!-- section 3  leave thsi-->
  <section class="bg-white py-20 px-6 md:px-16">
    <div class="max-w-7xl mx-auto text-center mb-16">
      <h2 class="text-4xl font-bold mb-4 text-black">
        Focus on the real work and<br>let Ramp simplify your spend
      </h2>
      <p class="text-gray-600 text-lg">
        Cards, expenses, and bill pay in a single<br>
        platform that saves you time and money.
      </p>
    </div>

    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-10">
      <!-- Text Left -->
      <div class="lg:w-1/2 text-center lg:text-left">
        <h3 class="text-xl font-semibold text-black mb-2">A single platform for your startup</h3>
        <p class="text-gray-700 mb-4">
          Everything your startup needs in a single platform—cards, expenses, bill pay, and more,
          including specialized
          <a href="#" class="text-black-600 underline">accounting software for startups</a>.
          Ramp provides the spend management tools that will scale with you as you grow.
        </p>

        <!-- Link that hides on hover of the arrow -->
        <div class="inline-flex items-center group cursor-pointer">
          <a href="#" class="text-black group-hover:invisible transition-all duration-200">
            Platform overview
          </a>
          <span class="ml-2 text-black group-hover:invisible">→</span>
        </div>
      </div>

      <!-- Image Right -->
      <div class="lg:w-1/2">
        <div class="rounded-xl p-0">
          <img src="./assets/img/heroimg.png" alt="Ramp platform preview" class="w-full rounded-xl">
        </div>
      </div>
    </div>
  </section>


<!-- Section -->
  

  <!-- Section 5:   FAQ -->
  <section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-bold mb-12 text-center text-black">FAQ</h2>

      <div class="grid md:grid-cols-2 gap-6">
        <!-- FAQ Item -->
        <details class="border border-gray-200 rounded-lg p-4">
          <summary class="cursor-pointer font-medium text-black flex justify-between items-center">
            <span>How can Ramp's corporate cards benefit my startup?</span>
            <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
          <p class="mt-3 text-gray-600">
            Our corporate cards help startups control spending with real-time visibility,
            automated expense tracking, and built-in compliance features.
          </p>
        </details>

        <!-- FAQ Item -->
        <details class="border border-gray-200 rounded-lg p-4">
          <summary class="cursor-pointer font-medium text-black flex justify-between items-center">
            <span>How will Ramp help with my startup's expense management?</span>
            <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
          <p class="mt-3 text-gray-600">
            Ramp automates expense tracking, receipt collection, and categorization, saving your team dozens of hours
            each month.
          </p>
        </details>

        <!-- FAQ Item -->
        <details class="border border-gray-200 rounded-lg p-4">
          <summary class="cursor-pointer font-medium text-black flex justify-between items-center">
            <span>How do I apply for a corporate card from Ramp for my startup?</span>
            <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
          <p class="mt-3 text-gray-600">
            The application process is completely online and takes just minutes. Visit our website and click "Get
            Started" to begin.
          </p>
        </details>

        <!-- FAQ Item -->
        <details class="border border-gray-200 rounded-lg p-4">
          <summary class="cursor-pointer font-medium text-black flex justify-between items-center">
            <span>How is Ramp's corporate card different from a traditional credit card?</span>
            <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
          <p class="mt-3 text-gray-600">
            Unlike traditional cards, Ramp provides real-time spend visibility, automated expense management, and
            built-in controls to prevent overspending.
          </p>
        </details>
      </div>

      <div><!-- FAQ Item -->
        <details class="border border-gray-200 rounded-lg p-4">
          <summary class="cursor-pointer font-medium text-black flex justify-between items-center">
            <span>What are the spending limits?</span>
            <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
          <p class="mt-3 text-gray-600">
            Spending limits are customized based on your company's financial profile and can be adjusted as your needs
            change.
          </p>
        </details>
      </div>
    </div>
  </section>

  <!-- Footer CTA Section -->
  <section class="py-20 bg-white text-center px-6 md:px-16">
    <h2 class="text-black text-2xl md:text-3xl font-semibold mb-6">Time is money. Save both.</h2>
    <div class="max-w-xl mx-auto flex flex-col md:flex-row items-center justify-center gap-4">
      <input type="email" placeholder="What’s your work email?"
        class="w-full md:flex-1 px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring focus:ring-yellow-300" />
      <button class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-md hover:bg-yellow-500">
        Get started for free
      </button>
    </div>
  </section>
  <!-- Footer -->
  <?php include './partials/footer.php'; ?>

  <?php
  // Any future PHP dynamic content can be inserted here
  ?>

  <!-- Your scripts go here -->
  <script src="./js/script.js"></script>
  </body>

  </html>