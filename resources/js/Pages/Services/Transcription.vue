<script setup>
  import { Head, Link } from '@inertiajs/vue3';
  import { inject } from 'vue';

  const toggleContact = inject('toggleContact');

  /**
   * GOOGLE DRIVE IMAGE BINDING
   * Formatted as a direct download link for the browser to render.
   */
  const transcriptionProcessImg = "https://lh3.googleusercontent.com/d/1FOvx2hKfENa4zYaWDBxgC7TO4BomH6SQ";
</script>

<template>
  <Head title="Transcription Services" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute bottom-0 right-0 w-80 h-80 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Services
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Audio Transcription
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Fast, accurate, and affordable transcription services for legal, medical, academic, and corporate needs across Africa.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-start">

        <div class="space-y-6">
          <h2 class="text-3xl font-bold text-gray-900">Professional Audio Transcription</h2>
          <p class="text-gray-600 leading-relaxed">
            At GoodWill Language Solution, we provide fast, accurate, and affordable transcription services across Africa. Our expert team ensures high-quality transcriptions for various industries, delivering exceptional results with the quickest turnaround times.
          </p>
          <p class="text-gray-600 leading-relaxed">
            We prioritize data privacy and maintain strict confidentiality. Our services are flexible and priced competitively. Plus, <strong>your first 5 minutes are free!</strong>
          </p>

          <div class="pt-4">
            <Link href="/services/transcription/pricing" class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 font-bold py-3 px-8 rounded-lg shadow-md transition">
            View Transcription Rates
            </Link>
          </div>
        </div>

        <div class="space-y-8">
          <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
            <h3 class="text-lg font-bold text-gray-900 mb-6 border-b border-gray-100 pb-4">Why Choose Us?</h3>
            <ul class="space-y-4">
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                First 5 Minutes FREE
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Quick Turnaround Time
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                100% Data Privacy Guaranteed
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                24/7 Customer Support
              </li>
            </ul>
          </div>

          <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
            <h3 class="text-lg font-bold text-blue-900 mb-4">Languages We Specialize In</h3>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Pidgin</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Yoruba</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Hausa</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Igbo</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">English</span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative order-last lg:order-first">
          <div class="absolute -inset-4 bg-purple-100 rounded-2xl transform -rotate-2"></div>

          <div class="relative w-full h-[450px] bg-gray-100 rounded-2xl overflow-hidden shadow-xl">
            <img :src="transcriptionProcessImg"
                 alt="Transcription Process"
                 class="w-full h-full object-cover transform hover:scale-105 transition duration-700"
                 @error="$event.target.src='https://via.placeholder.com/1200x800?text=Expert+Transcription'">
            <div class="absolute inset-0 bg-black/5 pointer-events-none"></div>
          </div>

        </div>
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            How Transcription is Done
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            We ensure accurate and efficient transcription through a structured process. You upload your files, our experts assess them for clarity and terminology, and then a skilled transcriber converts spoken words into precise text.
          </p>
          <p class="text-gray-600 leading-relaxed mb-8">
            Our quality control team carefully edits and proofreads the transcript. We offer custom formatting, timestamps, and speaker identification.
          </p>
          <button @click="toggleContact" class="bg-gray-900 text-white font-bold px-8 py-3 rounded-lg hover:bg-gray-800 transition shadow-lg">
            Transcribe Document
          </button>
        </div>
      </div>
    </section>

    <section class="py-20 bg-gray-50 border-y border-gray-200">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-12">How It Works</h2>
        <div class="grid md:grid-cols-4 gap-8">
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">1</div>
            <h4 class="font-bold text-gray-900 mb-2">Upload File</h4>
            <p class="text-sm text-gray-500">Send us your audio or video securely.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">2</div>
            <h4 class="font-bold text-gray-900 mb-2">Sign Contract</h4>
            <p class="text-sm text-gray-500">We agree on terms and confidentiality.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">3</div>
            <h4 class="font-bold text-gray-900 mb-2">Make Payment</h4>
            <p class="text-sm text-gray-500">Secure payment for the service.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">4</div>
            <h4 class="font-bold text-gray-900 mb-2">Get Result</h4>
            <p class="text-sm text-gray-500">Receive your accurate transcript.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-24 bg-white">
      <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">FAQ</span>
          <h2 class="text-3xl font-bold text-gray-900 mt-2">Common Questions</h2>
        </div>

        <div class="space-y-8">
          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">01</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">What is audio transcription?</h3>
              <p class="text-gray-600 leading-relaxed">
                Audio transcription is the written version of any verbal communication. This could be verbatim (word-for-word) or a summary of the recording.
              </p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">02</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">How much does it cost to transcribe a Hausa audio file?</h3>
              <p class="text-gray-600 leading-relaxed">
                Services are charged per audio minute. On average, it costs between <strong>$1.50 to $2.00</strong> per minute for Hausa. Poor audio quality may incur extra charges.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>
