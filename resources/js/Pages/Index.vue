<script setup>
  import { ref, onMounted, onUnmounted, inject } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // 1. GLOBAL MODAL LOGIC (Inject from Layout)
  const toggleContact = inject('toggleContact');

  // 2. TESTIMONIALS DATA
  const testimonials = ref([
    {
      id: 1,
      name: "Eleanor Pena",
      role: "Business Personnel",
      text: "We were incredibly impressed with Goodwill Language Solutions. Their team of translators delivered high-quality, accurate translations that perfectly captured the nuances of our marketing materials.",
      initials: "EP",
      color: "bg-blue-600"
    },
    {
      id: 2,
      name: "Cameron Williamson",
      role: "Legal Consultant",
      text: "Accuracy is non-negotiable in my field. Goodwill provided certified legal translations that were accepted globally without a single query. Their attention to detail is unmatched.",
      initials: "CW",
      color: "bg-green-600"
    },
    {
      id: 3,
      name: "Esther Howard",
      role: "Medical Researcher",
      text: "The interpretation services for our medical conference were flawless. The interpreters handled complex terminology with ease, ensuring our research was understood by a global audience.",
      initials: "EH",
      color: "bg-purple-600"
    },
    {
      id: 4,
      name: "Brooklyn Simmons",
      role: "Tech Startup CEO",
      text: "Localization was key to our app's launch in East Africa. Goodwill didn't just translate words; they adapted our product to fit the local culture perfectly. Highly recommended!",
      initials: "BS",
      color: "bg-orange-500"
    },
    {
      id: 5,
      name: "Leslie Alexander",
      role: "Event Organizer",
      text: "Fast, reliable, and professional. We needed urgent document translation for an international summit, and Goodwill delivered ahead of schedule. They are lifesavers!",
      initials: "LA",
      color: "bg-indigo-600"
    }
  ]);

  // 3. CAROUSEL LOGIC
  const currentSlide = ref(0);
  let autoPlayInterval = null;

  const setSlide = (index) => {
    currentSlide.value = index;
    resetTimer();
  };

  const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % testimonials.value.length;
  };

  const startAutoPlay = () => {
    autoPlayInterval = setInterval(nextSlide, 5000); // 5 Seconds
  };

  const resetTimer = () => {
    clearInterval(autoPlayInterval);
    startAutoPlay();
  };

  onMounted(() => {
    startAutoPlay();
  });

  onUnmounted(() => {
    clearInterval(autoPlayInterval);
  });
</script>

<template>
  <Head title="Home" />

  <section class="w-full bg-[url('/herobanner.jpg')] bg-center bg-cover flex justify-center relative">
    <div class="absolute inset-0 bg-blue-900/60"></div>

    <div class="container h-[35rem] flex justify-center items-center relative z-10">
      <div class="w-full md:w-[60rem] px-4">
        <h1 class="text-4xl md:text-6xl text-white font-bold text-center mb-6 drop-shadow-lg leading-tight">
          Certified Language Services in Africa
        </h1>
        <h2 class="text-lg md:text-xl text-gray-100 font-medium text-center mb-10 drop-shadow-lg max-w-3xl mx-auto">
          We provide professional Translation, Interpretation & Subtitling Services tailored to your business needs across the globe.
        </h2>

        <div class="bg-white p-2 md:p-3 rounded-xl shadow-2xl flex gap-2 max-w-2xl mx-auto">
          <div class="flex-grow relative">
            <svg class="w-5 h-5 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <input type="text" placeholder="Search services (e.g. French Translation)..." class="w-full pl-10 pr-4 py-3 border border-transparent focus:border-blue-500 rounded-lg focus:ring-0 text-gray-700 bg-transparent" />
          </div>
          <button class="bg-blue-700 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-800 transition shadow-md whitespace-nowrap">
            Find Service
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 -mt-16 relative z-20 mb-24">
    <div class="bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl shadow-xl p-8 lg:p-12">
      <div class="grid lg:grid-cols-5 gap-10 items-center">

        <div class="lg:col-span-2 relative">
          <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
            Bridge the Gap
          </h2>
          <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
            Connect with the world through our expert linguistic solutions. We break down barriers and ensure your message is heard.
          </p>
        </div>

        <div class="lg:col-span-3 grid grid-cols-3 gap-4 md:gap-8">
          <Link href="/services" class="flex flex-col items-center p-4 rounded-xl hover:bg-blue-50 hover:text-blue-700 transition group cursor-pointer border border-transparent hover:border-blue-100">
          <div class="bg-blue-100 p-4 rounded-full mb-3 group-hover:bg-blue-200 transition">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
          </div>
          <span class="font-bold text-gray-800 dark:text-white group-hover:text-blue-700">Translate</span>
          </Link>

          <Link href="/services" class="flex flex-col items-center p-4 rounded-xl hover:bg-green-50 hover:text-green-700 transition group cursor-pointer border border-transparent hover:border-green-100">
          <div class="bg-green-100 p-4 rounded-full mb-3 group-hover:bg-green-200 transition">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
          </div>
          <span class="font-bold text-gray-800 dark:text-white group-hover:text-green-700">Interpret</span>
          </Link>

          <Link href="/services" class="flex flex-col items-center p-4 rounded-xl hover:bg-orange-50 hover:text-orange-700 transition group cursor-pointer border border-transparent hover:border-orange-100">
          <div class="bg-orange-100 p-4 rounded-full mb-3 group-hover:bg-orange-200 transition">
            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
          </div>
          <span class="font-bold text-gray-800 dark:text-white group-hover:text-orange-700">Learn</span>
          </Link>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 mb-24 items-stretch">
    <div class="flex flex-col gap-6">
      <h3 class="text-gray-900 dark:text-white text-3xl font-bold">Global Reach, Local Touch</h3>

      <div class="flex-grow flex items-center bg-blue-700 dark:bg-blue-800 p-8 rounded-2xl relative overflow-hidden shadow-lg min-h-[220px]">
        <div class="relative z-10">
          <h3 class="text-2xl font-bold text-white mb-6">Localization services across Africa and the Globe!</h3>
          <Link href="/services/localize-language" as="button" class="text-blue-700 bg-white hover:bg-gray-100 font-bold rounded-lg text-sm px-6 py-3 transition shadow-md">
          View Coverage
          </Link>
        </div>
        <img :src="'/assets/images/malaysia-map.svg'" class="w-48 opacity-20 absolute right-[-20px] bottom-[-30px] transform rotate-12 filter invert" alt="Map decoration" @error="$event.target.style.display='none'" />
      </div>

      <div class="bg-blue-50 dark:bg-blue-900/30 rounded-2xl p-8 shadow-lg border border-blue-100 dark:border-blue-800 flex items-center justify-between">
        <div>
          <h3 class="text-gray-800 dark:text-white text-xl font-bold mb-2">Need a custom project?</h3>
          <p class="text-gray-600 dark:text-gray-400 text-sm">Get a transparent, competitive quote instantly.</p>
        </div>
        <button @click="toggleContact" class="whitespace-nowrap text-white bg-blue-700 hover:bg-blue-800 font-bold rounded-lg text-sm px-6 py-3 transition shadow-md">
          Get Quote
        </button>
      </div>
    </div>

    <div class="w-full relative h-full min-h-[500px] rounded-2xl overflow-hidden group shadow-2xl bg-gray-200">
      <img src="../assets/images/translation2.jpg" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105 brightness-75" alt="Language Professional" @error="$event.target.src='/herobanner.jpg'" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

      <div class="absolute bottom-10 left-8 right-8">
        <div class="mb-4">
          <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Why Goodwill?</span>
        </div>
        <h3 class="text-white text-3xl font-bold mb-3 drop-shadow-md">
          Expert linguists ensuring accuracy
        </h3>
        <p class="text-gray-200 text-base font-medium mb-6 leading-relaxed max-w-md">
          Our team comprises highly skilled native speakers ensuring culturally sensitive translations that effectively convey your message.
        </p>
        <Link href="/about-us" class="inline-flex items-center text-white font-bold hover:underline">
        Read our story <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </Link>
      </div>
    </div>
  </section>

  <section class="w-full bg-gray-50 dark:bg-gray-900 py-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-5 pointer-events-none">
      <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
            <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid)" />
      </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <div class="text-center mb-16">
        <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">What We Do</span>
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mt-3 mb-6">
          Professional Language Solutions
        </h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
          We bridge communication gaps with a full suite of linguistic services tailored for accuracy and cultural relevance.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8">

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute -top-10 -left-10 w-32 h-32 bg-blue-700 rounded-full opacity-50 blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">TRANSLATION</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-green-700 uppercase bg-green-100 rounded-full w-fit">Written Content</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Converting written text from one language to another while maintaining original meaning.</p>
            <Link href="/services/translation" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-blue-700 rounded-full opacity-50 blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">TRANSCRIPTION</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-blue-700 uppercase bg-blue-100 rounded-full w-fit">Audio to Text</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Converting audio/video recordings into precise written text for documentation or captions.</p>
            <Link href="/services/transcription" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-blue-800 rounded-full opacity-30 blur-3xl group-hover:scale-125 transition-transform duration-700"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">INTERPRETATION</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-purple-700 uppercase bg-purple-100 rounded-full w-fit">Live Spoken</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Converting spoken language from one language to another in real-time for conferences.</p>
            <Link href="/services/interpretation" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-cyan-700 rounded-full opacity-40 blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">SUBTITLING</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-green-700 uppercase bg-green-100 rounded-full w-fit">Visual Media</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Displaying translated dialogue on screen, perfectly timed to match the visual content.</p>
            <Link href="/services/voice-over" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute inset-x-0 bottom-0 h-10 bg-gradient-to-t from-blue-800 to-transparent opacity-50"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">VOICE-OVER</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-blue-700 uppercase bg-blue-100 rounded-full w-fit">Audio Recording</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Adding professional spoken narration to your audio/video projects with native accents.</p>
            <Link href="/services/voice-over" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Learn more <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

        <div class="group flex flex-col sm:flex-row bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
          <div class="sm:w-2/5 bg-blue-900 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-20 h-20 bg-gray-500 rounded-bl-full opacity-30 group-hover:scale-125 transition-transform duration-700"></div>
            <svg class="w-12 h-12 mb-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg>
            <h3 class="text-xl font-bold relative z-10 tracking-wide text-center">EQUIPMENT</h3>
          </div>
          <div class="sm:w-3/5 p-8 flex flex-col justify-center">
            <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-gray-700 uppercase bg-gray-200 rounded-full w-fit">Conference Gear</span>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Rentage of state-of-the-art Interpretation equipment, headsets, and booths for your events.</p>
            <Link href="/services/rental" class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors group-hover:underline">
            Check availability <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </Link>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 mb-24 relative">
    <div class="text-center mb-16">
      <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">TESTIMONIALS</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3">What Our Clients Say</h2>
    </div>

    <div class="relative mx-auto max-w-5xl">
      <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-12 relative border border-gray-100 dark:border-gray-700 min-h-[300px] flex items-center justify-center">

        <div class="absolute top-8 left-8 text-blue-100 dark:text-blue-900 opacity-50">
          <svg width="60" height="60" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.896 14.321 15.923 14.929 15.081C15.536 14.239 16.305 13.593 17.236 13.142V13H11.986V3H22V12.418C22 14.773 21.157 16.92 19.472 18.861C17.973 20.584 16.148 21 14.017 21ZM5.017 21L5.017 18C5.017 16.896 5.321 15.923 5.929 15.081C6.536 14.239 7.305 13.593 8.236 13.142V13H2.986V3H13V12.418C13 14.773 12.157 16.92 10.472 18.861C8.973 20.584 7.148 21 5.017 21Z" /></svg>
        </div>

        <Transition name="fade" mode="out-in">
          <div :key="currentSlide" class="flex flex-col items-center text-center relative z-10 w-full">

            <p class="text-lg md:text-2xl text-gray-600 dark:text-gray-300 italic mb-10 leading-relaxed max-w-3xl font-medium">
              "{{ testimonials[currentSlide].text }}"
            </p>

            <div class="flex items-center gap-4">
              <div :class="`w-14 h-14 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md ${testimonials[currentSlide].color}`">
                {{ testimonials[currentSlide].initials }}
              </div>

              <div class="text-left">
                <h4 class="font-bold text-gray-900 dark:text-white text-lg">{{ testimonials[currentSlide].name }}</h4>
                <p class="text-sm text-blue-600 font-bold uppercase tracking-wide">{{ testimonials[currentSlide].role }}</p>
              </div>
            </div>
          </div>
        </Transition>

      </div>

      <div class="flex justify-center mt-8 gap-3">
        <button v-for="(item, index) in testimonials"
                :key="index"
                @click="setSlide(index)"
                class="h-3 rounded-full transition-all duration-300"
                :class="currentSlide === index ? 'w-8 bg-blue-600' : 'w-3 bg-gray-300 hover:bg-gray-400'"
                :aria-label="'Go to slide ' + (index + 1)"></button>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center mb-24">

    <div class="order-last lg:order-first">
      <img src="../assets/images/certificate1.jpg" class="w-full rounded-2xl shadow-2xl border border-gray-200 transform hover:scale-105 transition duration-500" alt="Notarized Certificate" />
    </div>

    <div class="flex flex-col p-4 lg:pl-12">
      <h3 class="mb-4 text-3xl md:text-4xl font-bold text-gray-900 dark:text-white leading-tight">
        Legally Authorized & <br /><span class="text-blue-600">Notarized Translations</span>
      </h3>
      <p class="mb-8 text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
        We are accredited by international professional organizations. Your documents are safe, secure, and legally recognized globally. We adhere to the strictest standards of accuracy and confidentiality.
      </p>

      <div class="flex flex-wrap gap-4 mb-10">
        <div class="px-6 py-3 bg-gray-50 rounded border border-gray-200 flex items-center justify-center text-xs text-gray-600 font-bold uppercase tracking-wider shadow-sm">ISO 9001</div>
        <div class="px-6 py-3 bg-gray-50 rounded border border-gray-200 flex items-center justify-center text-xs text-gray-600 font-bold uppercase tracking-wider shadow-sm">ATA Member</div>
        <div class="px-6 py-3 bg-gray-50 rounded border border-gray-200 flex items-center justify-center text-xs text-gray-600 font-bold uppercase tracking-wider shadow-sm">Sworn</div>
      </div>

      <div>
        <button @click="toggleContact" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-base px-8 py-3 shadow-md transition">
          Get a Certified Translation
        </button>
      </div>
    </div>
  </section>

  <section class="w-full bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 py-16 mb-24">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end">
        <div>
          <span class="uppercase text-gray-500 text-xs font-bold tracking-wider mb-3 block">OUR BLOG</span>
          <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Language Industry Insights & Updates</h2>
        </div>
        <Link href="/blog" class="bg-blue-900 text-white px-10 py-4 rounded text-sm font-bold hover:bg-blue-800 transition shadow-lg mt-6 md:mt-0">
        Go to blog
        </Link>
      </div>
    </div>
  </section>

  <section class="w-full bg-gray-50 dark:bg-gray-800/30 py-24 mb-0">
    <div class="max-w-7xl mx-auto px-4 bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-10 border border-gray-100 dark:border-gray-700">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Explore Languages & Regions We Cover</h2>
        <a href="/services" class="text-blue-600 hover:text-blue-800 font-medium mt-3 inline-block">View all supported languages ></a>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 text-left">
        <div>
          <h4 class="font-bold text-gray-900 dark:text-white mb-6 text-xl border-b-2 border-gray-100 pb-3">West Africa</h4>
          <ul class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
            <li class="hover:text-blue-600 cursor-pointer transition">Yoruba</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Hausa</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Igbo</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Twi</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Wolof</li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-gray-900 dark:text-white mb-6 text-xl border-b-2 border-gray-100 pb-3">East Africa</h4>
          <ul class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
            <li class="hover:text-blue-600 cursor-pointer transition">Swahili</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Amharic</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Somali</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Oromo</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Tigrinya</li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-gray-900 dark:text-white mb-6 text-xl border-b-2 border-gray-100 pb-3">Europe</h4>
          <ul class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
            <li class="hover:text-blue-600 cursor-pointer transition">French</li>
            <li class="hover:text-blue-600 cursor-pointer transition">German</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Spanish</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Portuguese</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Italian</li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-gray-900 dark:text-white mb-6 text-xl border-b-2 border-gray-100 pb-3">Nordic Europe</h4>
          <ul class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
            <li class="hover:text-blue-600 cursor-pointer transition">Swedish</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Norwegian</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Danish</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Finnish</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Icelandic</li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-gray-900 dark:text-white mb-6 text-xl border-b-2 border-gray-100 pb-3">Asian</h4>
          <ul class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
            <li class="hover:text-blue-600 cursor-pointer transition">Mandarin</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Japanese</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Korean</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Hindi</li>
            <li class="hover:text-blue-600 cursor-pointer transition">Arabic</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="w-full bg-indigo-50 dark:bg-indigo-900/20 py-24 relative overflow-hidden mb-0">
    <div class="absolute top-0 left-0 p-4 opacity-50">
      <svg width="60" height="60" viewBox="0 0 100 100" fill="none"><path d="M10 90 Q 50 10 90 90" stroke="#FFC107" stroke-width="5" fill="none" /></svg>
    </div>
    <div class="absolute bottom-0 right-0 p-4 opacity-50">
      <svg width="70" height="70" viewBox="0 0 100 100" fill="none"><circle cx="50" cy="50" r="40" stroke="#4CAF50" stroke-width="5" fill="none" /></svg>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
      <span class="text-gray-500 dark:text-gray-400 uppercase tracking-widest text-xs font-bold">DON'T MISS ANYTHING</span>
      <h2 class="text-3xl md:text-5xl font-bold text-black dark:text-white mt-4 mb-10 max-w-4xl mx-auto leading-tight">Subscribe to Goodwill Language Solution announcements</h2>

      <form class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto">
        <input type="email" placeholder="Your working email" class="w-full px-5 py-4 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm" />
        <button type="submit" class="bg-blue-900 text-white px-10 py-4 rounded-lg font-bold hover:bg-blue-800 transition shadow-xl whitespace-nowrap">Subscribe</button>
      </form>
    </div>
  </section>

  <div class="fixed bottom-8 right-6 z-[9999] flex flex-col items-end gap-3">

    <transition name="wa-fade">
      <div v-if="isWaOpen" class="flex flex-col gap-3 mb-2 origin-bottom-right">

        <a href="https://api.whatsapp.com/send?phone=2348079763934" target="_blank" class="flex items-center gap-3 bg-[#25d366] text-white px-5 py-3 rounded-full shadow-lg hover:bg-[#20bd5a] transition hover:scale-105 no-underline">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" /></svg>
          <div class="flex flex-col text-left leading-tight">
            <span class="font-bold text-sm">Project Manager</span>
            <span class="text-[10px] opacity-90">+234 807 976 3934</span>
          </div>
        </a>

        <a href="https://api.whatsapp.com/send?phone=2349044791052" target="_blank" class="flex items-center gap-3 bg-[#25d366] text-white px-5 py-3 rounded-full shadow-lg hover:bg-[#20bd5a] transition hover:scale-105 no-underline">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" /></svg>
          <div class="flex flex-col text-left leading-tight">
            <span class="font-bold text-sm">Administrative</span>
            <span class="text-[10px] opacity-90">+234 904 479 1052</span>
          </div>
        </a>
      </div>
    </transition>

    <!--<button @click.stop="toggleWa" class="w-16 h-16 bg-[#25d366] text-white rounded-full shadow-2xl hover:bg-[#20bd5a] hover:scale-105 transition flex items-center justify-center relative z-20 focus:outline-none">
      <transition name="wa-rotate" mode="out-in">
        <svg v-if="!isWaOpen" class="w-9 h-9" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" /></svg>
        <svg v-else class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </transition>
    </button> -->

  </div>

</template>

<style scoped>
  /* Fade Animation for Testimonials */
  .fade-enter-active,
  .fade-leave-active {
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .fade-enter-from {
    opacity: 0;
    transform: translateY(10px);
  }

  .fade-leave-to {
    opacity: 0;
    transform: translateY(-10px);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Create wrapper
    var wrapper = document.createElement('div');
    wrapper.id = 'wa-float-wrapper';
    wrapper.style.cssText = 'position: fixed; bottom: 40px; right: 40px; z-index: 999999;';

    // Create popup
    var popup = document.createElement('div');
    popup.id = 'wa-popup';
    popup.style.cssText = 'display: none; margin-bottom: 10px;';
    popup.innerHTML = `
                <a href="https://api.whatsapp.com/send?phone=2348079763934" target="_blank" style="display: flex; align-items: center; gap: 10px; background: #25d366; color: white; padding: 12px 18px; border-radius: 25px; text-decoration: none; margin-bottom: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                  <i class="fa fa-whatsapp" style="font-size: 22px;"></i>
                  <div style="display: flex; flex-direction: column;">
                    <span style="font-weight: 600; font-size: 13px;">Project Manager</span>
                    <small style="font-size: 11px;">+234 807 976 3934</small>
                  </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=2349044791052" target="_blank" style="display: flex; align-items: center; gap: 10px; background: #25d366; color: white; padding: 12px 18px; border-radius: 25px; text-decoration: none; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                  <i class="fa fa-whatsapp" style="font-size: 22px;"></i>
                  <div style="display: flex; flex-direction: column;">
                    <span style="font-weight: 600; font-size: 13px;">Administrative</span>
                    <small style="font-size: 11px;">+234 904 479 1052</small>
                  </div>
                </a>
              `;

    // Create button
    var btn = document.createElement('button');
    btn.id = 'wa-btn';
    btn.style.cssText = 'width: 60px; height: 60px; background: #25d366; color: white; border: none; border-radius: 50%; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;';
    btn.innerHTML = '<i class="fa fa-whatsapp" style="font-size: 30px; margin: 0;"></i>';

    // Assemble
    wrapper.appendChild(popup);
    wrapper.appendChild(btn);
    document.body.appendChild(wrapper);

    // Events
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      popup.style.display = popup.style.display === 'none' ? 'block' : 'none';
    });

    document.addEventListener('click', function (e) {
      if (!e.target.closest('#wa-float-wrapper')) {
        popup.style.display = 'none';
      }
    });
  });
</script>
