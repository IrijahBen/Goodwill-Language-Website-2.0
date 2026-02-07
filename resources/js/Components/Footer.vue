<script setup>
  const d = new Date();
  let year = d.getFullYear();
</script>

<template>
  <footer class="bg-[#1a1f2c] text-gray-300 pt-12 pb-4 font-sans border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 mb-8">

        <div class="lg:col-span-4 flex flex-col space-y-4">
          <a href="/" class="flex items-center gap-3">
            <img src="../assets/images/GWLS LOGO2.png" class="h-10 w-auto" alt="Goodwill Language Logo" @error="$event.target.style.display='none'">
            <span class="text-white font-bold text-xl tracking-wider uppercase">GOODWILLLANGUAGE</span>
          </a>
          <p class="text-sm leading-6 text-gray-400 max-w-sm">
            Goodwill Language Solution is a multinational translation and interpretation agency offering services in over 30 languages. Specializing in corporate, legal, medical, and technical translation, it bridges communication gaps globally.
          </p>

          <div class="flex gap-4 mt-1">
            <a href="https://www.facebook.com/Goodwilllanguage" class="hover:text-white transition transform hover:scale-110"><i class="fa-brands fa-facebook-f text-lg"></i></a>
            <a href="https://www.youtube.com/@Goodwilllanguage" class="hover:text-white transition transform hover:scale-110"><i class="fa-brands fa-youtube text-lg"></i></a>
            <a href="https://www.linkedin.com/company/goodwill-language/" class="hover:text-white transition transform hover:scale-110"><i class="fa-brands fa-linkedin-in text-lg"></i></a>
            <a href="https://www.instagram.com/goodwilllanguagesolution/" class="hover:text-white transition transform hover:scale-110"><i class="fa-brands fa-instagram text-lg"></i></a>
          </div>
        </div>

        <div class="lg:col-span-2 lg:pl-4">
          <h3 class="text-white font-bold text-xs uppercase mb-4 tracking-widest">SITE MAP</h3>
          <ul class="space-y-2 text-sm text-gray-400">
            <li><a href="/about-us" class="hover:text-blue-400 transition block">About Us</a></li>
            <li><a href="/services" class="hover:text-blue-400 transition block">Services</a></li>
            <li><a href="/services/localize-language" class="hover:text-blue-400 transition block">Localize Languages</a></li>
            <li><a href="/blog" class="hover:text-blue-400 transition block">Blog</a></li>
            <li><a href="/contact" class="hover:text-blue-400 transition block">Contacts</a></li>
            <li><a href="/career" class="hover:text-blue-400 transition block">Career</a></li>
          </ul>
        </div>

        <div class="lg:col-span-2">
          <h3 class="text-white font-bold text-xs uppercase mb-4 tracking-widest">SERVICES</h3>
          <ul class="space-y-2 text-sm text-gray-400">
            <li><a href="/services/translation" class="hover:text-blue-400 transition block">Translation</a></li>
            <li><a href="/services/transcription" class="hover:text-blue-400 transition block">Transcription</a></li>
            <li><a href="/services/interpretation" class="hover:text-blue-400 transition block">Interpretation</a></li>
            <li><a href="/services/transcription" class="hover:text-blue-400 transition block">Subtitling</a></li>
            <li><a href="/services/voice-over" class="hover:text-blue-400 transition block">Voice Over</a></li>
            <li><a href="/services/language-classes" class="hover:text-blue-400 transition block">Language Classes</a></li>
          </ul>
        </div>

        <div class="lg:col-span-4 lg:pl-8">
          <h3 class="text-white font-bold text-xs uppercase mb-4 tracking-widest">CONTACT US</h3>
          <ul class="space-y-3 text-sm text-gray-400">
            <li class="flex items-center gap-3 group">
              <i class="fa-solid fa-mobile-screen text-gray-500 group-hover:text-white"></i>
              <span>+234 904 479 1052</span>
            </li>
            <li class="flex items-center gap-3 group">
              <i class="fa-solid fa-mobile-screen text-gray-500 group-hover:text-white"></i>
              <span>+234 807 976 3934</span>
            </li>
            <li class="flex items-center gap-3 group">
              <i class="fa-solid fa-mobile-screen text-gray-500 group-hover:text-white"></i>
              <span>+61 414 668 531</span>
            </li>
            <li class="flex items-center gap-3 group">
              <i class="fa-regular fa-envelope text-gray-500 group-hover:text-white"></i>
              <a href="mailto:translate@goodwillanguage.com" class="hover:text-blue-400 transition break-all">translate@goodwillanguage.com</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-[11px] text-gray-500">
        <p class="mb-2 md:mb-0">Goodwill Language Solutions © {{ year }}. All Rights Reserved.</p>
        <div class="flex gap-6">
          <a href="#" class="hover:text-white transition">Privacy Policy</a>
          <a href="#" class="hover:text-white transition">Terms & Conditions</a>
        </div>
      </div>
    </div>
  </footer>
</template>
