<script setup>
  import { Head } from '@inertiajs/vue3';
  import { inject } from 'vue';

  const toggleContact = inject('toggleContact');
</script>

<template>
  <Head title="Language Classes" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute top-0 left-0 w-80 h-80 bg-orange-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Education
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Language Classes
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Learn to read, speak, and write French, German, Chinese, Arabic & Spanish with seasoned professionals.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12">

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 flex flex-col hover:-translate-y-2 transition duration-300">
          <div class="bg-blue-600 p-6 text-white text-center">
            <h3 class="text-2xl font-bold">Beginners Class</h3>
            <p class="text-blue-100 text-sm mt-1">TEF & DELF Standard</p>
          </div>
          <div class="p-8 flex-grow">
            <p class="text-gray-600 mb-6 leading-relaxed">
              Standard Language courses tailored for beginners and intermediate students. Guaranteed to get you prepared for TEF & DELF exams.
            </p>
            <div class="bg-blue-50 p-6 rounded-xl border border-blue-100 mb-6">
              <span class="block text-xs font-bold text-blue-500 uppercase tracking-wide mb-1">Tuition</span>
              <span class="block text-3xl font-extrabold text-gray-900">$55 <span class="text-sm font-medium text-gray-500">/ month</span></span>
              <div class="mt-4 space-y-2">
                <div class="flex items-center text-sm text-gray-700">
                  <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                  Online audio & PDF materials
                </div>
                <div class="flex items-center text-sm text-gray-700">
                  <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                  3 days/week, 3 hours daily
                </div>
              </div>
            </div>
            <button @click="toggleContact" class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow-lg">
              Join the Course
            </button>
          </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 flex flex-col hover:-translate-y-2 transition duration-300">
          <div class="bg-gray-900 p-6 text-white text-center">
            <h3 class="text-2xl font-bold">TEF Exam Prep</h3>
            <p class="text-gray-400 text-sm mt-1">Boost your CRS Score</p>
          </div>
          <div class="p-8 flex-grow">
            <div class="grid grid-cols-2 gap-4 mb-8">
              <div class="p-4 bg-gray-50 rounded-xl">
                <h4 class="font-bold text-gray-900 text-sm">Professional</h4>
                <p class="text-xs text-gray-500 mt-1"> seasoned tutors with 10+ years exp.</p>
              </div>
              <div class="p-4 bg-gray-50 rounded-xl">
                <h4 class="font-bold text-gray-900 text-sm">Organized</h4>
                <p class="text-xs text-gray-500 mt-1">Max 5 students per Zoom class.</p>
              </div>
              <div class="p-4 bg-gray-50 rounded-xl">
                <h4 class="font-bold text-gray-900 text-sm">Tasking</h4>
                <p class="text-xs text-gray-500 mt-1">Standard tests every 6 weeks.</p>
              </div>
              <div class="p-4 bg-gray-50 rounded-xl">
                <h4 class="font-bold text-gray-900 text-sm">Versatile</h4>
                <p class="text-xs text-gray-500 mt-1">Separate tutors for oral & written.</p>
              </div>
            </div>
            <button @click="toggleContact" class="w-full py-3 bg-gray-900 text-white font-bold rounded-lg hover:bg-gray-800 transition shadow-lg">
              Join TEF Class
            </button>
          </div>
        </div>

      </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 mb-20">
      <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 md:p-12 text-center text-white shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
        <h2 class="text-3xl font-bold mb-4 relative z-10">20% Discount for Early Birds!</h2>
        <p class="mb-8 text-purple-100 relative z-10">Register now for our upcoming batch and save on tuition fees.</p>
        <button @click="toggleContact" class="bg-white text-purple-700 font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition shadow-md relative z-10">
          Register Here
        </button>
      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900">Who Can Benefit From Our Zoom Classrooms?</h2>
        </div>
        <div class="space-y-4">
          <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-xl transition cursor-default border border-transparent hover:border-gray-100">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full flex-shrink-0"></div>
            <p class="text-gray-700">Students based in different locations learning the same language can study together.</p>
          </div>
          <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-xl transition cursor-default border border-transparent hover:border-gray-100">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full flex-shrink-0"></div>
            <p class="text-gray-700">Remote students find this a cost-effective alternative to face-to-face lessons.</p>
          </div>
          <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-xl transition cursor-default border border-transparent hover:border-gray-100">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full flex-shrink-0"></div>
            <p class="text-gray-700">Business travelers can continue to progress whilst on the road.</p>
          </div>
          <div class="flex gap-4 p-4 hover:bg-gray-50 rounded-xl transition cursor-default border border-transparent hover:border-gray-100">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full flex-shrink-0"></div>
            <p class="text-gray-700">Children and Adults willing to improve on their existing knowledge.</p>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>
