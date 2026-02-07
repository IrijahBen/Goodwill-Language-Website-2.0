<script setup>
  import { useForm } from '@inertiajs/vue3'

  const form = useForm({
    email: null
  })

  const subscribe = () => {
    // Add your subscription logic here
    console.log('Subscribing:', form.email)
    form.reset()
  }
</script>

<template>
  <section class="w-full bg-indigo-50 dark:bg-indigo-900/20 py-16 relative overflow-hidden">
    <div class="absolute top-0 left-0 p-4 opacity-50">
      <svg width="60" height="60" viewBox="0 0 100 100" fill="none"><path d="M10 90 Q 50 10 90 90" stroke="#FFC107" stroke-width="5" fill="none" /></svg>
    </div>
    <div class="absolute bottom-0 right-0 p-4 opacity-50">
      <svg width="70" height="70" viewBox="0 0 100 100" fill="none"><circle cx="50" cy="50" r="40" stroke="#4CAF50" stroke-width="5" fill="none" /></svg>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
      <span class="text-gray-500 dark:text-gray-400 uppercase tracking-widest text-xs font-bold">DON'T MISS ANYTHING</span>
      <h2 class="text-2xl md:text-4xl font-bold text-black dark:text-white mt-3 mb-8 max-w-4xl mx-auto">Subscribe to Goodwill Language Solution announcements</h2>

      <form @submit.prevent="subscribe" class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto">
        <input v-model="form.email" type="email" placeholder="Your working email" class="w-full px-5 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm" required />
        <button type="submit" class="bg-blue-900 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-800 transition shadow-lg whitespace-nowrap">Subscribe</button>
      </form>
    </div>
  </section>
</template>
