<script setup>
  import { Head } from '@inertiajs/vue3';
  import { inject } from 'vue';

  // Inject Global Modal Logic
  const toggleContact = inject('toggleContact');

  /**
   * GOOGLE DRIVE IMAGE BINDING
   * Formatted as a direct download link for the browser to render correctly.
   */
  const voiceOverStudioImg = "https://lh3.googleusercontent.com/d/1WaQFPfYAXfK3-EdMo6kAqqrt2xIWLFHP";
</script>

<template>
  <Head title="Voice Over Services" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute bottom-0 right-0 w-64 h-64 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Services
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Voice Over
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Professional voice talent for commercials, documentaries, eLearning, and corporate narrations in African and global languages.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-center">

        <div class="space-y-8">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Voice Over in Africa</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              We take pride in our expertise and team of professionals dedicated to bringing new life to your audio or video projects. Whether you need high-quality voice-over services in Africa or assistance with a private project, we are committed to delivering exceptional results.
            </p>
            <p class="text-gray-600 leading-relaxed">
              Our skilled voice artists and sound engineers ensure clarity, precision, and authenticity in every production.
            </p>
          </div>

          <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
            <h4 class="font-bold text-blue-900 mb-4">Why Choose Us?</h4>
            <ul class="space-y-3">
              <li class="flex items-start text-gray-700 text-sm">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                We bring new life to your audio and video works.
              </li>
              <li class="flex items-start text-gray-700 text-sm">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Trained artists bring your work into other languages with ease.
              </li>
              <li class="flex items-start text-gray-700 text-sm">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Exceptional quality and precision guaranteed.
              </li>
            </ul>
          </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
          <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
            <h4 class="font-bold text-gray-900 mb-2">Perspective</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Our services bring a new perspective to people who were previously oblivious to your information.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
            <h4 class="font-bold text-gray-900 mb-2">Entertainment</h4>
            <p class="text-xs text-gray-500 leading-relaxed">From movies to soaps, our services ensure the fun never stops. We keep you smiling.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
            <h4 class="font-bold text-gray-900 mb-2">Education</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Visual works such as documentaries and news updates are given new life to help educate.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
            <h4 class="font-bold text-gray-900 mb-2">Growth</h4>
            <p class="text-xs text-gray-500 leading-relaxed">Expand your reach by introducing your content to new language markets.</p>
          </div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative order-last lg:order-first">
          <div class="absolute -inset-4 bg-purple-100 rounded-2xl transform -rotate-2"></div>

          <div class="relative w-full h-[450px] bg-gray-100 rounded-2xl overflow-hidden shadow-xl">
            <img :src="voiceOverStudioImg"
                 alt="Professional Voice Over Studio"
                 class="w-full h-full object-cover transform hover:scale-105 transition duration-700"
                 @error="$event.target.src='https://via.placeholder.com/1200x900?text=Voice+Over+Expertise'">
            <div class="absolute inset-0 bg-black/5 pointer-events-none"></div>
          </div>

        </div>
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Breaking Communication Barriers
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            Language is a powerful tool that unlocks endless possibilities. Many oral and visual works remain incomplete until they can be understood by diverse audiences.
          </p>
          <p class="text-gray-600 leading-relaxed mb-8">
            Whether it’s a documentary, commercial, corporate presentation, or any multimedia content, we provide professional voice-over solutions that make your message resonate across cultures.
          </p>
          <button @click="toggleContact" class="bg-blue-600 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
            Request Voice Over
          </button>
        </div>
      </div>
    </section>

    <section class="py-20 bg-gray-900 text-white">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-blue-400 font-bold uppercase tracking-widest text-sm">Industries</span>
          <h2 class="text-3xl font-bold mt-2">Where Voice-Over Makes a Difference</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
            <h4 class="font-bold text-lg mb-3 text-blue-300">Corporate</h4>
            <p class="text-gray-400 text-sm">Presentations, explainer videos, IVR systems, and brand identity campaigns.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
            <h4 class="font-bold text-lg mb-3 text-green-300">E-Learning</h4>
            <p class="text-gray-400 text-sm">Online courses, training modules, and instructional videos with accessible audio.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
            <h4 class="font-bold text-lg mb-3 text-purple-300">Media & News</h4>
            <p class="text-gray-400 text-sm">Radio, podcasts, news reports, documentaries, and multilingual broadcasting.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
            <h4 class="font-bold text-lg mb-3 text-yellow-300">Entertainment</h4>
            <p class="text-gray-400 text-sm">Animations, video games, audiobooks, and dubbing for films and series.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-24 bg-white">
      <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Frequently Asked Questions</h2>
        <div class="space-y-8">
          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">01</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">What types of voice-over services do you offer?</h3>
              <p class="text-gray-600">We provide commercial voice-overs, narration, dubbing, e-learning, corporate presentations, audiobooks, and IVR systems.</p>
            </div>
          </div>
          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">02</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Can you provide voice-overs in different languages?</h3>
              <p class="text-gray-600">Yes, we specialize in African languages (Yoruba, Hausa, Igbo, Swahili, etc.) as well as major European and Asian languages.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>
