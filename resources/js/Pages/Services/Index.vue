<script setup>
  import { ref, computed } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // 1. STATE MANAGEMENT
  const activeFilter = ref('All');
  const searchQuery = ref('');
  const email = ref('');
  const isSubscribed = ref(false);

  // 2. SERVICES DATA (Corrected Image Mappings)
  const services = ref([
    {
      id: 1,
      title: 'Translation',
      description: 'Converting written text from one language to another while maintaining original meaning.',
      category: 'Translation',
      image: 'https://lh3.googleusercontent.com/d/1H4tSy9cW8zl6PoWON9Fp4GIFmhH5Wnln', // was on Transcription
      link: '/services/translation',
      color: 'text-green-600 bg-green-100'
    },
    {
      id: 2,
      title: 'Interpretation',
      description: 'Converting spoken language from one language to another in real-time.',
      category: 'Interpretation',
      image: 'https://lh3.googleusercontent.com/d/1csU_blPCiBo4cISibqH7gwNC7MMTyU-t', // correct
      link: '/services/interpretation',
      color: 'text-green-600 bg-green-100'
    },
    {
      id: 3,
      title: 'Transcription',
      description: 'Converting audio/video recordings into precise written text.',
      category: 'Transcription',
      image: 'https://lh3.googleusercontent.com/d/13VsnvNqHvlNBZrRg7PytNJpZAN78Kpst', // was on Translation
      link: '/services/transcription',
      color: 'text-orange-600 bg-orange-100'
    },
    {
      id: 4,
      title: 'Localization',
      description: 'Adapting content to a specific target market and culture.',
      category: 'Localization',
      image: 'https://lh3.googleusercontent.com/d/1lj-Jxo6jsE6KIsB2aiOxAU5U2s8MOHCs', // correct
      link: '/services/localize-language',
      color: 'text-green-600 bg-green-100'
    },
    {
      id: 5,
      title: 'Voice Over',
      description: 'Adding professional spoken narration to audio/video projects.',
      category: 'Voice Over',
      image: 'https://lh3.googleusercontent.com/d/1fBULhnUT1AHo7QH4FtgEXNCPUrydID0Y', // was on Equipment Rental
      link: '/services/voice-over',
      color: 'text-blue-600 bg-blue-100'
    },
    {
      id: 6,
      title: 'Language Classes',
      description: 'Providing professional instruction in foreign languages.',
      category: 'Language',
      image: 'https://lh3.googleusercontent.com/d/1A53l2c8cp0V2L5hn0yzUfQDikdgk1quy', // correct
      link: '/services/language-classes',
      color: 'text-blue-600 bg-blue-100'
    },
    {
      id: 7,
      title: 'Desktop Publishing (DTP)',
      description: 'Adapting translated content for layout and design.',
      category: 'Transcription',
      image: 'https://lh3.googleusercontent.com/d/1oVhvMWCIXbiR5pJxcYadWG16rlWQbNGR', // correct
      link: '/services/desktop-publishing',
      color: 'text-orange-600 bg-orange-100'
    },
    {
      id: 8,
      title: 'Equipment Rental',
      description: 'State-of-the-art interpretation booths, headsets, and audio systems for international events.',
      category: 'Interpretation',
      image: 'https://lh3.googleusercontent.com/d/1ztrtyK4JGrOnOW_pIw-lhcizFJKUcDOv', // was on Voice Over
      link: '/services/rental',
      color: 'text-purple-600 bg-purple-100'
    }
  ]);


  // 3. FILTERING & SEARCH LOGIC
  const filteredServices = computed(() => {
    return services.value.filter(service => {
      const matchesFilter = activeFilter.value === 'All' || service.category === activeFilter.value;
      const matchesSearch = service.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        service.description.toLowerCase().includes(searchQuery.value.toLowerCase());
      return matchesFilter && matchesSearch;
    });
  });

  // 4. ACTION HANDLERS
  const subscribe = () => {
    if (email.value) {
      isSubscribed.value = true;
      setTimeout(() => {
        isSubscribed.value = false;
        email.value = '';
      }, 3000);
    }
  };
</script>

<template>
  <Head title="Our Language Services" />

  <div class="bg-white min-h-screen text-gray-800">
    <section class="bg-white pt-16 pb-8 border-b border-gray-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
          <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Premium Language Solutions</span>
          <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-3 tracking-tight">Our Services</h1>
          <p class="text-gray-500 mt-4 max-w-xl mx-auto">Providing end-to-end language support for businesses and individuals globally.</p>
        </div>

        <div class="flex flex-col lg:flex-row justify-between items-center gap-6 mb-12">
          <div class="flex flex-wrap justify-center gap-2">
            <button v-for="filter in ['All', 'Translation', 'Transcription', 'Interpretation', 'Language', 'Localization', 'Voice Over']"
                    :key="filter"
                    @click="activeFilter = filter"
                    class="px-5 py-2.5 rounded-full text-sm font-bold transition-all border"
                    :class="activeFilter === filter ? 'bg-gray-900 text-white border-gray-900 shadow-md' : 'bg-white text-gray-500 border-gray-200 hover:border-gray-900 hover:text-gray-900'">
              {{ filter }}
            </button>
          </div>

          <div class="relative w-full max-w-sm">
            <input v-model="searchQuery"
                   type="text"
                   placeholder="What are you looking for?"
                   class="w-full pl-5 pr-12 py-3.5 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none">
            <div class="absolute right-4 top-4 text-gray-400">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 max-w-7xl mx-auto px-4">
      <div v-if="filteredServices.length > 0" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <Link v-for="service in filteredServices"
              :key="service.id"
              :href="service.link"
              class="flex flex-col group">
        <div class="aspect-[4/3] rounded-2xl overflow-hidden mb-6 relative shadow-sm border border-gray-100">
          <img :src="service.image"
               :alt="service.title"
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
               @error="$event.target.src='https://via.placeholder.com/600x450?text=Service+Coming+Soon'">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>

        <span :class="`inline-block px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-wider mb-4 w-fit ${service.color}`">
          {{ service.category }}
        </span>
        <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-2">{{ service.title }}</h3>
        <p class="text-gray-500 leading-relaxed text-sm">{{ service.description }}</p>

        <div class="mt-6 flex items-center text-blue-600 font-bold text-sm">
          Learn more
          <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </div>
        </Link>
      </div>

      <div v-else class="text-center py-32 bg-gray-50 rounded-3xl border border-dashed border-gray-200">
        <p class="text-gray-400 text-lg">We couldn't find any services matching "<strong>{{ searchQuery }}</strong>"</p>
        <button @click="activeFilter = 'All'; searchQuery = ''" class="mt-4 text-blue-600 font-bold hover:underline">View all services</button>
      </div>
    </section>

    <section class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-20 items-center">
      <div>
        <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Global Standards & <br />Legal Authorization</h2>
        <p class="text-gray-600 text-lg mb-10 leading-relaxed">
          Every document we process goes through a rigorous quality check. Our translations are accepted by embassies, courts, and international organizations like the UN and AU.
        </p>
        <div class="flex items-center gap-8 grayscale opacity-60">
          <img src="https://lh3.googleusercontent.com/d/12olHNGg-AU8VysGMHjnJcTiNij-q8DHf" class="h-10" alt="UN">
          <img src="https://lh3.googleusercontent.com/d/159cJhORlfhwPcvadgU8mLYgZwIGBLatf" class="h-6" alt="UNICEF">
          <img src="https://lh3.googleusercontent.com/d/1gCT1rFFTU9Q6DfiLV-qY2eDMd9JxxOFO" class="h-6" alt="UNICEF">
        </div>
      </div>
      <div class="relative">
        <div class="absolute -inset-4 bg-blue-600/5 rounded-full blur-3xl"></div>

        <img src="https://lh3.googleusercontent.com/d/1L81U5Vd1fE5tT9hd939dnFbOIqBBNihs"
             class="relative rounded-3xl shadow-2xl border border-white w-full object-cover"
             alt="Certified and Notarized Translation Document">
      </div>
    </div>
  </section>

    <section class="bg-blue-900 py-24 px-4 text-center">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to get started?</h2>
        <p class="text-blue-200 mb-10 text-lg">Join 500+ companies using Goodwill Language Solutions for their global growth.</p>

        <form @submit.prevent="subscribe" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
          <input v-model="email"
                 type="email"
                 placeholder="Enter your email"
                 class="flex-grow px-6 py-4 rounded-xl focus:ring-4 focus:ring-blue-400 outline-none"
                 :disabled="isSubscribed"
                 required />
          <button type="submit"
                  class="bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-500 transition-all shadow-lg active:scale-95 disabled:bg-green-600"
                  :disabled="isSubscribed">
            {{ isSubscribed ? 'Subscribed!' : 'Get Started' }}
          </button>
        </form>
      </div>
    </section>
  </div>
</template>
