<script setup>
  import { Head, Link } from '@inertiajs/vue3';
  import { inject } from 'vue';

  const toggleContact = inject('toggleContact');

  /**
   * VERIFIED GOOGLE DRIVE ASSETS
   * Mapping IDs to direct view URLs
   */
  const equipmentSetupImg = "https://lh3.googleusercontent.com/d/1swpPug9qYLV4RhMkNy71PcHZB_gMCzFQ";
  const conferenceMgmtImg = "https://lh3.googleusercontent.com/d/1a4nIvePwu6u35OZDSs3jH8Qmg39QZTWx";
</script>

<template>
  <Head title="Equipment Rental | Professional Interpretation Gear" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Services
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Interpretation Equipment Rental
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Rent certified language interpretation equipment for events, conferences, and meetings in Nigeria and West Africa.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-start">

        <div class="space-y-6">
          <h2 class="text-3xl font-bold text-gray-900">Equipment Rental In Africa</h2>
          <p class="text-gray-600 leading-relaxed">
            At our Interpretation Agency in Africa, we go beyond merely providing professional interpreters; we supply and manage top-tier interpretation equipment essential for powering your event.
          </p>
          <p class="text-gray-600 leading-relaxed">
            Whether you are hosting an in-person international conference or a virtual webinar, we take full responsibility for every technical aspect. Our equipment is available for rent, and we handle complete setup, operation, and maintenance.
          </p>
          <div class="pt-4 flex gap-4">
            <Link href="/services/rental/pricing" class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 font-bold py-3 px-8 rounded-lg shadow-md transition">
            View Equipment Rates
            </Link>
          </div>
        </div>

        <div class="space-y-6">
          <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg transition">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Multi-Channel Receivers</h3>
            <p class="text-gray-600 text-sm">Allows delegates to select audio feeds directly from the interpreter.</p>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg transition">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Soundproof Booths</h3>
            <p class="text-gray-600 text-sm">Effective isolation for interpreters to ensure zero distraction.</p>
          </div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-white border-t border-gray-100">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative">
          <div class="absolute -inset-4 bg-gray-100 rounded-2xl transform rotate-2"></div>
          <img :src="equipmentSetupImg"
               alt="Professional Interpretation Booths and Equipment"
               class="relative rounded-2xl shadow-xl w-full object-cover h-[450px]">
        </div>
        <div>
          <h2 class="text-3xl font-bold text-gray-900 mb-6">
            Simultaneous Interpretation Equipment Rental
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            Goodwill Language Solution uses cutting-edge technology to deliver high-quality digital audio and visual output.
          </p>
          <button @click="toggleContact" class="bg-gray-900 text-white font-bold px-8 py-3 rounded-lg hover:bg-gray-800 transition shadow-lg">
            Request Equipment
          </button>
        </div>
      </div>
    </section>

    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-last lg:order-first">
          <h2 class="text-3xl font-bold text-gray-900 mb-6">
            Local & International Conference Managers
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            We partner with international hotels and major event centers across Africa, ensuring smooth management of venue logistics.
          </p>
          <button @click="toggleContact" class="text-blue-600 font-bold border-2 border-blue-600 px-8 py-3 rounded-lg hover:bg-blue-50 transition">
            Contact Us
          </button>
        </div>
        <div class="relative">
          <div class="absolute -inset-4 bg-blue-100 rounded-2xl transform -rotate-2"></div>
          <img :src="conferenceMgmtImg"
               alt="Event Management and Technical Support"
               class="relative rounded-2xl shadow-xl w-full object-cover h-[450px]">
        </div>
      </div>
    </section>

  </div>
</template>
