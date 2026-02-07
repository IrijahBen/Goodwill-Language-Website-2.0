<script setup>
  import { Head } from '@inertiajs/vue3';
  import { inject } from 'vue';

  /**
   * STATE MANAGEMENT
   * Injecting global contact toggle for CTA buttons
   */
  const toggleContact = inject('toggleContact');

  /**
   * ASSET MANAGEMENT
   * Using the direct-download format for Google Drive images.
   * File ID: 1oVhvMWCIXbiR5pJxcYadWG16rlWQbNGR
   */
  const dtpGraphicUrl = "https://lh3.googleusercontent.com/d/1oVhvMWCIXbiR5pJxcYadWG16rlWQbNGR";

  const handleContactRequest = () => {
    toggleContact();
  };
</script>

<template>
  <Head title="Professional Desktop Publishing (DTP) & Layout" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800 selection:bg-teal-100">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-teal-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-teal-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Design & Formatting
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
          Desktop Publishing (DTP)
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto leading-relaxed">
          Bridging the gap between linguistic translation and professional design. We ensure your documents retain their visual impact in any language.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-center">

        <div class="relative order-last lg:order-first">
          <div class="absolute -inset-4 bg-teal-50 rounded-2xl transform rotate-1"></div>

          <div class="relative w-full aspect-[4/3] bg-gray-200 rounded-2xl overflow-hidden shadow-2xl border border-gray-100">
            <img :src="dtpGraphicUrl"
                 alt="Desktop Publishing and Layout Showcase"
                 class="w-full h-full object-cover transform hover:scale-105 transition duration-1000 ease-out"
                 @error="$event.target.src='https://via.placeholder.com/800x600?text=DTP+Design+Process'">

            <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md p-5 rounded-xl shadow-lg border border-teal-100 max-w-xs hidden sm:block">
              <p class="text-teal-600 font-bold text-sm uppercase tracking-wider mb-1">Global Standard</p>
              <p class="text-gray-700 text-xs font-medium leading-relaxed">
                Expert handling of complex scripts including RTL (Arabic) and character-based (Chinese) layouts.
              </p>
            </div>
          </div>
        </div>

        <div class="space-y-8">
          <div class="space-y-4">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
              Maintain Visual Integrity <br /> Across Every Border
            </h2>
            <p class="text-gray-600 leading-relaxed text-lg">
              Translation often leads to text expansion or contraction, which can destroy a carefully crafted layout. Our DTP specialists work alongside linguists to re-format your materials perfectly.
            </p>
          </div>

          <div class="grid sm:grid-cols-2 gap-4">
            <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
              <h4 class="font-bold text-teal-600 mb-1">Typeface Matching</h4>
              <p class="text-xs text-gray-500">Selecting fonts that mirror your brand while supporting local characters.</p>
            </div>
            <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
              <h4 class="font-bold text-teal-600 mb-1">Graphic Localization</h4>
              <p class="text-xs text-gray-500">Editing text within images and screenshots for a native experience.</p>
            </div>
          </div>

          <div class="pt-4 flex flex-col sm:flex-row gap-4">
            <button @click="handleContactRequest"
                    class="bg-blue-600 text-white font-bold px-10 py-4 rounded-xl hover:bg-blue-700 transition-all shadow-xl hover:shadow-blue-200">
              Request a Design Quote
            </button>
            <div class="flex items-center gap-3 px-2">
              <div class="flex -space-x-2">
                <div class="w-8 h-8 rounded-full bg-teal-400 border-2 border-white"></div>
                <div class="w-8 h-8 rounded-full bg-blue-400 border-2 border-white"></div>
                <div class="w-8 h-8 rounded-full bg-indigo-400 border-2 border-white"></div>
              </div>
              <span class="text-xs font-bold text-gray-400 uppercase tracking-tighter">Certified DTP Experts</span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="py-12 bg-gray-100/50 border-y border-gray-200">
      <div class="max-w-7xl mx-auto px-4">
        <p class="text-center text-xs font-black text-gray-400 uppercase tracking-[0.3em] mb-8">Software Expertise</p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 grayscale opacity-60">
          <span class="text-xl font-bold tracking-tighter">Adobe InDesign</span>
          <span class="text-xl font-bold tracking-tighter">Illustrator</span>
          <span class="text-xl font-bold tracking-tighter">QuarkXPress</span>
          <span class="text-xl font-bold tracking-tighter">CorelDraw</span>
          <span class="text-xl font-bold tracking-tighter">Photoshop</span>
        </div>
      </div>
    </section>

  </div>
</template>
