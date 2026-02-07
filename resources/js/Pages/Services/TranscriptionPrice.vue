<script setup>
  import { Head } from '@inertiajs/vue3';
  import { inject } from 'vue';

  // Inject Global Modal Logic
  const toggleContact = inject('toggleContact');

  // Pricing Data updated with direct Google Drive links
  const prices = [
    {
      title: "First Draft",
      subtitle: "Basic Transcription",
      price: "$4",
      unit: "/min",
      features: [
        "98% accuracy",
        "2 business day delivery",
        "Speaker IDs available",
        "Timestamps available",
        "100% human transcription"
      ],
      // Direct link for: 6865d1d60920f26941217e7f607a9743.jpg
      image: "https://lh3.googleusercontent.com/d/15Sgc0ZjgFfiKOZVgIGGKCYIooGBU51T1",
      requestType: "First Draft Transcription ($4/min)"
    },
    {
      title: "Standard",
      subtitle: "Professional Quality",
      price: "$6",
      unit: "/min",
      features: [
        "99% accuracy",
        "1-3 day delivery",
        "Speaker IDs available",
        "Timestamps available",
        "100% human transcription"
      ],
      // Direct link for: b6c20577be1c258df63435868f0ef1f8.jpg
      image: "https://lh3.googleusercontent.com/d/1DIVQDL5WSyxKnicriuHXvGGll8v1CaG5",
      requestType: "Standard Transcription ($6/min)"
    },
    {
      title: "Verbatim",
      subtitle: "Full Detail",
      price: "$8",
      unit: "/min",
      features: [
        "100% full verbatim style",
        "1-3 day delivery",
        "Speaker IDs available",
        "Timestamps available",
        "100% human transcription"
      ],
      // Direct link for: f2f74151325619.58ec3da295627.jpg
      image: "https://lh3.googleusercontent.com/d/1n3Tt4R5CntNwpiXYq0kWecbZKXlKxxvT",
      requestType: "Verbatim Transcription ($8/min)"
    }
  ];

  const requestService = (type) => {
    toggleContact();
  };
</script>

<template>
  <Head title="Transcription Pricing" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-20 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Pricing
        </span>
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
          Transcription Rates
        </h1>
        <p class="text-blue-200 text-lg max-w-2xl mx-auto">
          Transparent per-minute pricing with no hidden fees.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-6xl mx-auto px-4">
      <div class="space-y-12">

        <div v-for="(item, index) in prices"
             :key="index"
             class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 grid md:grid-cols-2 group hover:shadow-2xl transition duration-300">
          <div class="relative w-full aspect-square overflow-hidden bg-gray-100">
            <div class="absolute inset-0 bg-blue-900/10 group-hover:bg-transparent transition duration-500 z-10"></div>
            <img :src="item.image"
                 :alt="item.title"
                 class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700"
                 @error="$event.target.src='https://via.placeholder.com/600x600?text=Service+Image'">
          </div>

          <div class="p-8 md:p-10 flex flex-col justify-center">
            <div class="mb-6">
              <div class="flex items-baseline gap-1 mb-2">
                <span class="text-4xl font-extrabold text-blue-600">{{ item.price }}</span>
                <span class="text-gray-500 font-medium">{{ item.unit }}</span>
              </div>
              <h2 class="text-3xl font-bold text-gray-900 mb-1">{{ item.title }}</h2>
              <p class="text-gray-500 uppercase tracking-wider text-sm font-bold opacity-80">{{ item.subtitle }}</p>
            </div>

            <ul class="mb-8 space-y-3">
              <li v-for="(feature, idx) in item.features"
                  :key="idx"
                  class="flex items-start text-gray-600 text-sm font-medium">
                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                {{ feature }}
              </li>
            </ul>

            <button @click="requestService(item.requestType)"
                    class="w-full py-4 bg-gray-900 text-white font-bold rounded-xl hover:bg-blue-700 transition shadow-lg flex items-center justify-center gap-2 group-hover:bg-blue-600">
              Request Service
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </button>
          </div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-blue-50 border-t border-blue-100">
      <div class="max-w-4xl mx-auto px-4 text-center">
        <span class="text-blue-600 font-bold uppercase tracking-widest text-xs">Newsletter</span>
        <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-8">Want to get the best articles weekly? Subscribe!</h2>

        <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-lg mx-auto" @submit.prevent>
          <input type="email"
                 placeholder="Your working email"
                 class="w-full px-6 py-4 rounded-xl border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm"
                 required>
          <button type="submit" class="bg-blue-900 text-white font-bold px-8 py-4 rounded-xl hover:bg-blue-800 transition shadow-md">
            Subscribe
          </button>
        </form>
      </div>
    </section>

  </div>
</template>
