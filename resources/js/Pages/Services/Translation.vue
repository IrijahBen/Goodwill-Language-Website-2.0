<script setup>
  import { Head, Link } from '@inertiajs/vue3';
  import { inject } from 'vue';

  // Injecting the toggle function for the contact modal
  const toggleContact = inject('toggleContact');

  /** * ONLINE IMAGE ASSETS
   * We define these as constants to keep the template clean.
   * Using direct HTTPS links bypasses Vite's local path resolution issues.
   */
  const heroImage = "https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1600";
  const processImage = "https://lh3.googleusercontent.com/d/1Mutv5Namqtb8ffhzfYXxvSlo0tibwAJd";
</script>

<template>
  <Head title="Translation Services" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-green-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Services
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Document Translation
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Expert linguistic and cultural transformation for your content, products, and services globally.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-start">

        <div class="space-y-6">
          <h2 class="text-3xl font-bold text-gray-900">Professional Document Translation</h2>
          <p class="text-gray-600 leading-relaxed">
            “Our mission is to elevate your content, products, and services to a global audience by providing expert linguistic and cultural transformation. We understand that effective communication goes beyond mere translation—it’s about conveying the essence of your message.”
          </p>
          <p class="text-gray-600 leading-relaxed">
            Whether you’re looking to expand into new markets or enhance your existing presence, we are committed to making your content and products truly global.
          </p>

          <div class="pt-4">
            <Link href="/services/translation/pricing" class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 font-bold py-3 px-8 rounded-lg shadow-md transition">
            View Translation Rates
            </Link>
          </div>
        </div>

        <div class="space-y-8">
          <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
            <h3 class="text-lg font-bold text-gray-900 mb-6 border-b border-gray-100 pb-4">Why Choose Us?</h3>
            <ul class="space-y-4">
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Certified Translators
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Prompt Turnaround Time
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                100% Data Privacy Guaranteed
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Pan-African Reach
              </li>
            </ul>
          </div>

          <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
            <h3 class="text-lg font-bold text-blue-900 mb-4">Languages We Specialize In</h3>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">French</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Chinese</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Arabic</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">German</span>
              <span class="px-3 py-1 bg-white text-blue-800 rounded shadow-sm text-sm font-bold">Spanish</span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">

        <div class="relative order-last lg:order-first">
          <div class="absolute -inset-4 bg-purple-100 rounded-2xl transform -rotate-2"></div>

          <div class="relative h-[450px] w-full bg-gray-100 rounded-2xl overflow-hidden shadow-xl">
            <img :src="processImage"
                 alt="Goodwill Translation Process"
                 class="w-full h-full object-cover transform hover:scale-105 transition duration-700"
                 @error="$event.target.src='https://via.placeholder.com/1200x800?text=Linguistic+Expertise'">

            <div class="absolute inset-0 bg-blue-900/5 pointer-events-none"></div>
          </div>
        </div>

        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Translation Services In Africa
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            We extend our comprehensive translation services to clients throughout the continent. We can collect original documents and return them via courier, ensuring safety and convenience.
          </p>
          <p class="text-gray-600 leading-relaxed mb-8">
            Our expertise spans <strong>Marketing, Oil & Gas, Medicine, Law, and Telecommunications</strong>. Confidentiality is our hallmark—your documents are safe with us.
          </p>
          <button @click="toggleContact" class="bg-gray-900 text-white font-bold px-8 py-3 rounded-lg hover:bg-gray-800 transition shadow-lg">
            Translate Document
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
            <h4 class="font-bold text-gray-900 mb-2">Send Document</h4>
            <p class="text-sm text-gray-500">Upload or email your file securely.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">2</div>
            <h4 class="font-bold text-gray-900 mb-2">Get Quote</h4>
            <p class="text-sm text-gray-500">Receive a competitive price estimate.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">3</div>
            <h4 class="font-bold text-gray-900 mb-2">Translation</h4>
            <p class="text-sm text-gray-500">Expert linguists work on your file.</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">4</div>
            <h4 class="font-bold text-gray-900 mb-2">Delivery</h4>
            <p class="text-sm text-gray-500">Receive your translated document.</p>
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
              <h3 class="text-xl font-bold text-gray-900 mb-2">What is document translation?</h3>
              <p class="text-gray-600 leading-relaxed">
                Document translation demands accuracy and cultural sensitivity. It requires a thorough understanding of source and target languages to preserve meaning and tone.
              </p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">02</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">What is document certification?</h3>
              <p class="text-gray-600 leading-relaxed">
                Certification formally attests that a document is accurate and true. It is often required for legal and governmental procedures.
              </p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xl">03</div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">How many words make a page?</h3>
              <p class="text-gray-600 leading-relaxed">
                A standard page is typically considered <strong>350 words</strong> (font size 12, single spaced). This standard helps in estimating costs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>
