<script setup>
  import { Head, useForm } from '@inertiajs/vue3';

  // Form handling (standard Inertia pattern)
  const form = useForm({
    fullName: '',
    email: '',
    phone: '',
    message: '',
    agree: false
  });

  const submit = () => {
    // You can hook this up to a backend controller later
    console.log("Form submitted:", form.data());
    form.reset();
    alert("Message sent! (Demo)");
  };
</script>

<template>
  <Head title="Contact Us" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-20 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Contact Info
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Get in Touch
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          We are available globally. Reach out to us for any inquiries.
        </p>
      </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
          <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Talk to us</h3>
          <a href="mailto:admin@goodwillanguage.com" class="text-blue-600 hover:underline break-words">admin@goodwillanguage.com</a>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Call us</h3>
          <div class="space-y-1 text-gray-600 text-sm">
            <a href="tel:+2348079763934" class="block hover:text-blue-600">+234 807 976 3934</a>
            <a href="tel:+254757414330" class="block hover:text-blue-600">+254 757 414 330</a>
            <a href="tel:+61414668531" class="block hover:text-blue-600">+61 414 668 531</a>
          </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
          <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Nigeria Address</h3>
          <p class="text-gray-600 text-sm">Barushi plaza, Akala Express off New Garage, Ibadan, Nigeria.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:-translate-y-1 transition duration-300">
          <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Global Offices</h3>
          <ul class="text-gray-600 text-sm space-y-2">
            <li><strong>Canada:</strong> Orleans, ON K4A 5B6</li>
            <li><strong>Australia:</strong> SNW Sydney</li>
            <li><strong>Kenya:</strong> CBD Nairobi</li>
          </ul>
        </div>

      </div>
    </section>

    <section class="h-96 w-full bg-gray-200">
      <iframe src="https://maps.google.com/maps?q=Barushi%20plaza%2C%20Akala%20Express&t=&z=13&ie=UTF8&iwloc=&output=embed"
              class="w-full h-full border-0"
              allowfullscreen=""
              loading="lazy">
      </iframe>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
      <div class="absolute -left-20 top-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50"></div>

      <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

          <div>
            <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">Any questions?</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Drop us a line</h2>
            <p class="text-gray-600 leading-relaxed mb-8">
              Whether you need a quote for interpretation, translation, or equipment rental, our team is ready to assist you 24/7.
            </p>

            <!--<div class="w-full h-64 bg-gray-100 rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-200">
              <span class="text-gray-400 font-medium">Contact Support Image</span>
            </div>-->
          </div>

          <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 shadow-lg">
            <form @submit.prevent="submit" class="space-y-6">
              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">First Name</label>
                  <input v-model="form.fullName" type="text" class="w-full px-4 py-3 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="John">
                </div>
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Last Name</label>
                  <input type="text" class="w-full px-4 py-3 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Doe">
                </div>
              </div>

              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                <input v-model="form.email" type="email" class="w-full px-4 py-3 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="john@example.com">
              </div>

              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Phone</label>
                <input v-model="form.phone" type="tel" class="w-full px-4 py-3 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="+234...">
              </div>

              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                <textarea v-model="form.message" rows="4" class="w-full px-4 py-3 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="How can we help you?"></textarea>
              </div>

              <div class="flex items-center">
                <input v-model="form.agree" id="agree" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="agree" class="ml-2 text-sm text-gray-600">I agree to receive communications from Goodwill Language Solution</label>
              </div>

              <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition shadow-lg">
                Send Message
              </button>
            </form>
          </div>

        </div>
      </div>
    </section>

  </div>
</template>
