<script setup>
  import { ref } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // Form Data State
  const form = ref({
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    message: '',
    agree: false
  });

  const submitForm = () => {
    alert('Message form submitted! (Connect this to your backend later)');
  };
</script>

<template>
  <Head title="About Us" />

  <div class="bg-white text-gray-800">

    <section class="py-16 md:py-24 bg-blue-50/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">
        <div>
          <span class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-2 block">About us</span>
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Goodwill Language Solution</h1>
          <p class="text-lg text-gray-700 font-medium mb-4">
            At the core of Goodwill’s success is its team of highly skilled and experienced linguists.
            The company prides itself on hiring and retaining the best professionals in the industry.
          </p>
          <p class="text-gray-600 mb-8 leading-relaxed">
            Goodwill Language Solution, founded in 2017, is a multinational company with a clear vision: to be a driving force in the global business translation industry, particularly in Africa.
          </p>
          <div class="flex flex-wrap gap-4">
            <Link href="/services/translation/pricing" class="px-6 py-3 border-2 border-blue-600 text-blue-600 font-bold rounded hover:bg-blue-600 hover:text-white transition">
            View Pricing
            </Link>
            <Link href="/services" class="px-6 py-3 bg-blue-600 text-white font-bold rounded hover:bg-blue-700 transition">
            Browse Services
            </Link>
          </div>
        </div>

        <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[450px]">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1200"
               alt="Goodwill Language Solution Team"
               class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
          <div class="absolute inset-0 bg-blue-600/10 mix-blend-multiply"></div>
        </div>
      </div>
    </section>

    <section class="py-12 bg-white relative overflow-hidden">
      <img :src="'/assets/images/decor/yellowSquareDots.svg'" class="absolute top-4 left-4 opacity-30 w-24" />

      <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center relative z-10">

        <div class="relative rounded-xl overflow-hidden shadow-lg w-full aspect-video">
          <iframe class="w-full h-full"
                  src="https://www.youtube.com/embed/23YLmecrfP8?rel=0"
                  title="Goodwill Language Solution Video"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
          </iframe>
        </div>

        <div class="grid grid-cols-2 gap-8">
          <div class="text-center p-6 bg-gray-50 rounded-xl border border-gray-100 hover:-translate-y-1 transition duration-300">
            <span class="block text-3xl font-bold text-blue-600 mb-1">1200+</span>
            <span class="text-gray-600 text-sm font-bold uppercase">Translation</span>
          </div>
          <div class="text-center p-6 bg-gray-50 rounded-xl border border-gray-100 hover:-translate-y-1 transition duration-300">
            <span class="block text-3xl font-bold text-blue-600 mb-1">840+</span>
            <span class="text-gray-600 text-sm font-bold uppercase">Notarization</span>
          </div>
          <div class="text-center p-6 bg-gray-50 rounded-xl border border-gray-100 hover:-translate-y-1 transition duration-300">
            <span class="block text-3xl font-bold text-blue-600 mb-1">100+</span>
            <span class="text-gray-600 text-sm font-bold uppercase">Professionals</span>
          </div>
          <div class="text-center p-6 bg-gray-50 rounded-xl border border-gray-100 hover:-translate-y-1 transition duration-300">
            <span class="block text-3xl font-bold text-blue-600 mb-1">5+</span>
            <span class="text-gray-600 text-sm font-bold uppercase">Years Exp.</span>
          </div>
        </div>

      </div>
    </section>

    <<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 text-center mb-12">
    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">We always stand for</span>
    <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Core Values</h2>
  </div>

  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
      <img src="https://img.icons8.com/fluency-systems-regular/96/2563eb/layers.png" class="w-12 h-12 mb-4 mx-auto" alt="Structured">
      <h3 class="text-lg font-bold mb-3 text-center">Structured Approach</h3>
      <p class="text-gray-600 text-sm text-center leading-relaxed">Robust organizational structure ensuring seamless project management.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
      <img src="https://img.icons8.com/fluency-systems-regular/96/2563eb/comments.png" class="w-12 h-12 mb-4 mx-auto" alt="Feedback">
      <h3 class="text-lg font-bold mb-3 text-center">Professional Feedback</h3>
      <p class="text-gray-600 text-sm text-center leading-relaxed">Prioritizing client satisfaction through timely and constructive feedback.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
      <img src="https://img.icons8.com/fluency-systems-regular/96/2563eb/flash-on.png" class="w-12 h-12 mb-4 mx-auto" alt="Efficiency">
      <h3 class="text-lg font-bold mb-3 text-center">Efficiency</h3>
      <p class="text-gray-600 text-sm text-center leading-relaxed">Advanced technology and streamlined workflows for speed and quality.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
      <img src="https://img.icons8.com/fluency-systems-regular/96/2563eb/calendar-circular.png" class="w-12 h-12 mb-4 mx-auto" alt="Flexible">
      <h3 class="text-lg font-bold mb-3 text-center">Flexible Schedule</h3>
      <p class="text-gray-600 text-sm text-center leading-relaxed">Options catering to diverse client needs and different time zones.</p>
    </div>
  </div>
</section>

     <section class="py-16 bg-white">
       <div class="max-w-7xl mx-auto px-4 mb-12 text-center">
         <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Our Main Directions</span>
         <h2 class="text-3xl font-bold text-gray-900 mt-2">What Do We Do</h2>
       </div>

       <div class="max-w-7xl mx-auto px-4 space-y-12">
         <div class="flex flex-col md:flex-row gap-8 items-center border-b border-gray-100 pb-12">
           <div class="w-full md:w-1/3">
             <img src="https://lh3.googleusercontent.com/d/1H4tSy9cW8zl6PoWON9Fp4GIFmhH5Wnln"
                  class="rounded-xl shadow-lg w-full aspect-video object-cover"
                  alt="Professional Translation Services">
           </div>
           <div class="w-full md:w-2/3">
             <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Translation</span>
             <p class="text-gray-600 leading-relaxed mb-6">Our mission is to elevate your content to a global audience. We ensure words are accurately translated and thoughtfully adapted to cultural nuances.</p>
             <Link href="/services/translation" class="text-blue-600 font-bold hover:underline">Check details →</Link>
           </div>
         </div>

         <div class="flex flex-col md:flex-row gap-8 items-center border-b border-gray-100 pb-12">
           <div class="w-full md:w-1/3">
             <img src="https://lh3.googleusercontent.com/u/0/d/1Pzyh-AVO6A7iobo9x-_fjz9NGWxdSuGv"
                  class="rounded-xl shadow-lg w-full aspect-video object-cover"
                  alt="Audio and Video Transcription">
           </div>
           <div class="w-full md:w-2/3">
             <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Transcription</span>
             <p class="text-gray-600 leading-relaxed mb-6">We allow you to expand into new markets. Our meticulous approach guarantees your brand is consistently represented with excellence.</p>
             <Link href="/services/transcription" class="text-blue-600 font-bold hover:underline">Check details →</Link>
           </div>
         </div>

         <div class="flex flex-col md:flex-row gap-8 items-center">
           <div class="w-full md:w-1/3">
             <img src="https://lh3.googleusercontent.com/d/1csU_blPCiBo4cISibqH7gwNC7MMTyU-t"
                  class="rounded-xl shadow-lg w-full aspect-video object-cover"
                  alt="Simultaneous Interpretation">
           </div>
           <div class="w-full md:w-2/3">
             <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Interpretation</span>
             <p class="text-gray-600 leading-relaxed mb-6">Interpretation demands deep mastery of languages. We provide seamless interpretation services across Africa and the globe.</p>
             <Link href="/services/interpretation" class="text-blue-600 font-bold hover:underline">Check details →</Link>
           </div>
         </div>
       </div>
     </section>

    <section class="py-16 bg-gray-900 text-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-start">
        <div>
          <span class="text-gray-400 font-bold tracking-widest uppercase text-sm">Language Services Processes</span>
          <h2 class="text-3xl font-bold mt-2 mb-8">That’s how we do it</h2>

          <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=800"
               class="rounded-xl shadow-2xl w-full max-w-md border-4 border-gray-800 object-cover h-80"
               alt="Professional Translation Workflow">
        </div>

        <div class="space-y-8">
          <div class="flex gap-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center font-bold">1</div>
            <div>
              <h4 class="text-xl font-bold mb-2">Comprehensive Needs Assessment</h4>
              <p class="text-gray-400 text-sm leading-relaxed">We begin by carefully assessing unique language needs, understanding specific requirements, deadlines, and budget.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center font-bold">2</div>
            <div>
              <h4 class="text-xl font-bold mb-2">Selection of Qualified Professionals</h4>
              <p class="text-gray-400 text-sm leading-relaxed">We meticulously select linguists with expertise in the specific subject matter, ensuring native-level quality.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center font-bold">3</div>
            <div>
              <h4 class="text-xl font-bold mb-2">Advanced Technology & Quality Control</h4>
              <p class="text-gray-400 text-sm leading-relaxed">We leverage CAT tools and TMS. Multiple levels of review ensuring the final product is error-free.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center font-bold">4</div>
            <div>
              <h4 class="text-xl font-bold mb-2">Client Communication</h4>
              <p class="text-gray-400 text-sm leading-relaxed">Transparent communication throughout the project lifecycle to ensure expectations are consistently met.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12">

        <div>
          <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Contact Info</span>
          <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-8">Get In Touch</h2>

          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center text-blue-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" /></svg></div>
              <div>
                <span class="block font-bold text-gray-900">Talk to us:</span>
                <a href="mailto:admin@goodwillanguage.com" class="text-blue-600">admin@goodwillanguage.com</a>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center text-blue-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg></div>
              <div>
                <span class="block font-bold text-gray-900">Call us:</span>
                <div class="text-gray-600">+234 807 976 3934</div>
                <div class="text-gray-600">+254 757 414 330</div>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center text-blue-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg></div>
              <div>
                <span class="block font-bold text-gray-900">Locations:</span>
                <p class="text-gray-500 text-sm mb-2"><strong>Nigeria:</strong> Barushi plaza, Akala Express off New Garage, Ibadan.</p>
                <p class="text-gray-500 text-sm mb-2"><strong>Canada:</strong> 511 Lacolle Way PMB 1033 Orleans, ON K4A 5B6.</p>
                <p class="text-gray-500 text-sm"><strong>Kenya:</strong> Nairobi district, Starehe district CBD.</p>
              </div>
            </div>
          </div>

          <div class="mt-8 h-64 bg-gray-200 rounded-xl overflow-hidden shadow-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101408.21722940247!2d7.3775357!3d3.906574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398d77eeff0871%3A0x430588820c326002!2sIbadan!5e0!3m2!1sen!2sng!4v1689234567890!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 shadow-lg">
          <h3 class="text-2xl font-bold mb-6 text-gray-900">Drop us a line</h3>
          <form @submit.prevent="submitForm" class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold uppercase text-gray-500 mb-1">First Name</label>
                <input v-model="form.firstName" type="text" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-0" placeholder="John" required>
              </div>
              <div>
                <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Last Name</label>
                <input v-model="form.lastName" type="text" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-0" placeholder="Doe" required>
              </div>
            </div>
            <div>
              <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Email</label>
              <input v-model="form.email" type="email" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-0" placeholder="email@example.com" required>
            </div>
            <div>
              <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Phone</label>
              <input v-model="form.phone" type="tel" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-0" placeholder="+234...">
            </div>
            <div>
              <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Message</label>
              <textarea v-model="form.message" rows="4" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-0" placeholder="How can we help?" required></textarea>
            </div>
            <div class="flex items-center gap-2">
              <input v-model="form.agree" type="checkbox" id="agree" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
              <label for="agree" class="text-xs text-gray-500">I agree to receive communications from Goodwill.</label>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded hover:bg-blue-700 transition shadow-md">
              Send Message
            </button>
          </form>
        </div>

      </div>
    </section>

    <section class="py-12 bg-gray-50 border-t border-gray-200">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-xl font-bold text-gray-600 mb-8">Our Trusted firms and organizations</h2>

        <div class="flex flex-wrap justify-center items-center gap-10 opacity-70 grayscale hover:grayscale-0 transition duration-500">

          <img src="https://lh3.googleusercontent.com/d/12olHNGg-AU8VysGMHjnJcTiNij-q8DHf"
               class="h-16 w-auto object-contain" alt="United Nations">

          <img src="https://lh3.googleusercontent.com/d/159cJhORlfhwPcvadgU8mLYgZwIGBLatf"
               class="h-10 w-auto object-contain" alt="UNICEF">

          <img src="https://lh3.googleusercontent.com/d/1gCT1rFFTU9Q6DfiLV-qY2eDMd9JxxOFO"
               class="h-12 w-auto object-contain" alt="UNESCO">

          <img src="https://lh3.googleusercontent.com/d/1i0n1aNCXZ9Tx7QWys-wQjuu__-Ecfdek"
               class="h-10 w-auto object-contain" alt="REACH Initiative">

          <img src="https://lh3.googleusercontent.com/d/1lgk8jPrdeSLsfU5nDVyBycQV2M8XjG9y"
               class="h-10 w-auto object-contain" alt="RWS Trados">

          <img src="https://lh3.googleusercontent.com/d/1nLhuz84U5pmYu0yyv3HmaDQ1ek9qkSNO"
               class="h-8 w-auto object-contain" alt="GoodFirms">

          <img src="https://lh3.googleusercontent.com/d/1furv14YmQ1gcfhwU6382Sq8ZposjKP4y"
               class="h-10 w-auto object-contain" alt="UNHCR">

        </div>
      </div>
    </section>

    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-end mb-8">
          <div>
            <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Our Blog</span>
            <h2 class="text-3xl font-bold text-gray-900 mt-2">Latest Posts</h2>
          </div>
          <Link href="/blog" class="bg-gray-100 text-gray-700 px-6 py-2 rounded font-bold hover:bg-gray-200 transition">Go to Blog</Link>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <article v-for="post in blogPosts" :key="post.id" class="bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 overflow-hidden">
            <div class="h-48 bg-gray-200 relative">
              <img :src="`/assets/images/blog/${post.image}`" class="w-full h-full object-cover" @error="$event.target.src='https://via.placeholder.com/300?text=No+Image'">
            </div>
            <div class="p-6">
              <div class="flex gap-2 text-xs font-bold uppercase text-gray-400 mb-2">
                <span class="text-blue-600">{{ post.category }}</span>
                <span>•</span>
                <span>{{ post.date }}</span>
              </div>
              <h3 class="text-xl font-bold mb-2">{{ post.title }}</h3>
              <p class="text-gray-600 text-sm mb-4">{{ post.content }}</p>
              <Link href="#" class="text-blue-600 font-bold text-sm hover:underline">Read more</Link>
            </div>
          </article>
        </div>
      </div>
    </section>

  </div>
</template>
