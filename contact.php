<?php include './partials/header.php'; ?>
<script src="./js/script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Fullscreen Section with Edge-to-Edge Background -->
<section class="w-full min-h-screen bg-gradient-to-br from-[#0f0c29] via-[#302b63] to-[#24243e] flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-2xl backdrop-blur-lg bg-white/10 border border-white/20 rounded-xl shadow-2xl p-10 mx-4">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-white mb-8 text-center">Contact Us</h1>

        <form>
            <div class="mb-6">
                <label class="block text-white/80 mb-2" for="name">Name</label>
                <input type="text" id="name" placeholder="Your Name" class="w-full px-4 py-3 bg-white/5 text-white border border-white/20 rounded-lg placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-lime-300">
            </div>

            <div class="mb-6">
                <label class="block text-white/80 mb-2" for="email">Email</label>
                <input type="email" id="email" placeholder="you@example.com" class="w-full px-4 py-3 bg-white/5 text-white border border-white/20 rounded-lg placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-lime-300">
            </div>

            <div class="mb-6">
                <label class="block text-white/80 mb-2" for="message">Message</label>
                <textarea id="message" rows="5" placeholder="Write your message..." class="w-full px-4 py-3 bg-white/5 text-white border border-white/20 rounded-lg placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-lime-300"></textarea>
            </div>

            <button type="submit" class="bg-lime-300 hover:bg-lime-400 transition-all duration-300 px-5 py-3 rounded-lg text-sm font-bold text-black w-full shadow-lg">
                Send Message
            </button>
        </form>
    </div>
</section>

<?php include './partials/footer.php'; ?>
