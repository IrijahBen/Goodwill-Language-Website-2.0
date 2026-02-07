<script setup>
  import { Head, Link } from '@inertiajs/vue3';
  import { inject } from 'vue';

  // Inject Global Modal Logic
  const toggleContact = inject('toggleContact');

  /**
   * HIGH-QUALITY IMAGE ASSETS
   * Using direct HTTPS links bypasses Vite local path issues.
   */
  const heroImg = "https://lh3.googleusercontent.com/d/1Ahpv9R10D8yuDHmdOaPTKOmgGhb4Ppw8";
  const teamImg = "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800";
  const conferenceImg = "https://lh3.googleusercontent.com/d/1peo6zfw_dew_ivo8eo8kW7tSJkAM1nCn";
  const hallImg = "https://lh3.googleusercontent.com/d/1csU_blPCiBo4cISibqH7gwNC7MMTyU-t";
</script>

<template>
  <Head title="Professional Interpretation Services" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="relative bg-blue-900 pt-32 pb-24 overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-white">
          <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
            Live Language Solutions
          </span>
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
            Professional Interpretation Services
          </h1>
          <p class="text-lg text-blue-100 mb-8 leading-relaxed">
            Bridge the language gap in real-time. Whether for international conferences, business meetings, or medical appointments, our expert interpreters ensure your message is heard clearly and accurately.
          </p>

          <div class="flex flex-wrap gap-4">
            <button @click="toggleContact" class="bg-white text-blue-900 font-bold px-8 py-4 rounded-lg hover:bg-gray-100 transition shadow-lg">
              Get a Free Quote
            </button>
            <Link href="/services/interpretation/pricing" class="border-2 border-white text-white font-bold px-8 py-4 rounded-lg hover:bg-white hover:text-blue-900 transition shadow-lg">
            View Pricing
            </Link>
          </div>
        </div>

        <div class="relative">
          <div class="absolute -inset-4 bg-blue-500 rounded-full opacity-20 blur-3xl"></div>
          <img :src="heroImg"
               alt="Interpreter at work"
               class="relative rounded-2xl shadow-2xl border-4 border-blue-800/30 transform rotate-2 hover:rotate-0 transition duration-500 object-cover h-96 w-full">
        </div>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-900">Interpretation Modes We Offer</h2>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">We provide flexible solutions tailored to the specific needs of your event or meeting.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
          <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Simultaneous</h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            Ideal for large conferences. The interpreter translates in real-time while the speaker is talking.
          </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
          <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Consecutive</h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            Best for small meetings or interviews. The speaker pauses to allow the interpreter to relay the message.
          </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
          <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-6 group-hover:bg-purple-600 group-hover:text-white transition">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Over-the-Phone (OPI)</h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            Immediate access to interpreters via phone or video call. Perfect for urgent medical or legal needs.
          </p>
        </div>
      </div>
    </section>

    <section class="bg-white py-20 border-y border-gray-100">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="text-3xl font-bold text-gray-900 mb-6">Why trust our interpreters?</h2>
          <div class="space-y-6">
            <div class="flex gap-4">
              <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 font-bold">1</div>
              <div>
                <h4 class="font-bold text-gray-900 text-lg">Subject Matter Experts</h4>
                <p class="text-gray-600">We assign interpreters specialized in Medical, Legal, and Technical fields.</p>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 font-bold">2</div>
              <div>
                <h4 class="font-bold text-gray-900 text-lg">Native Proficiency</h4>
                <p class="text-gray-600">Our linguists are native speakers who understand deep cultural nuances.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="relative">
          <img :src="teamImg"
               alt="Team meeting"
               class="rounded-2xl shadow-xl w-full object-cover h-80">
          <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white p-6 rounded-xl shadow-lg hidden md:block">
            <p class="text-3xl font-bold">50+</p>
            <p class="text-sm opacity-90">Languages Supported</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative order-last lg:order-first">
          <div class="absolute -inset-4 bg-blue-100 rounded-2xl transform -rotate-2"></div>
          <img :src="conferenceImg"
               alt="Interpretation Conference"
               class="relative rounded-2xl shadow-xl w-full object-cover h-[500px]">
        </div>
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
            The No. 1 Interpretation Agency in Africa
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6 text-lg">
            As a leading interpretation agency based across Africa and beyond, our expertise extends globally, covering languages from Arabic to Zulu.
          </p>
          <button @click="toggleContact" class="bg-blue-600 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
            Request Interpreter
          </button>
        </div>
      </div>
    </section>

    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
            Best Interpretation company you can trust
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6 text-lg">
            Recognition from prestigious organizations such as the <strong>United Nations</strong>, the <strong>African Union</strong>, and <strong>ECOWAS</strong>.
          </p>
          <button @click="toggleContact" class="bg-gray-900 text-white font-bold px-8 py-3 rounded-lg hover:bg-gray-800 transition shadow-lg">
            Remote Interpreter
          </button>
        </div>
        <div class="relative">
          <div class="absolute -inset-4 bg-green-100 rounded-2xl transform rotate-2"></div>
          <img :src="hallImg"
               alt="Conference Hall"
               class="relative rounded-2xl shadow-xl w-full object-cover h-[450px]">
        </div>
      </div>
    </section>

    <section class="py-20 text-center px-4">
      <h2 class="text-3xl font-bold text-gray-900 mb-6">Ready to break the language barrier?</h2>
      <div class="flex flex-wrap justify-center gap-4">
        <button @click="toggleContact" class="bg-blue-600 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
          Request a Quote
        </button>
        <Link href="/services/interpretation/pricing" class="bg-white text-blue-700 border border-blue-200 font-bold px-8 py-3 rounded-lg hover:bg-blue-50 transition">
        See Pricing
        </Link>
      </div>
    </section>

  </div>
</template>
