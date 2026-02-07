<script setup>
  import { computed, ref } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // 1. RECEIVE REAL DATA FROM LARAVEL
  const props = defineProps({
    post: Object,
    relatedPosts: Array,   // We will pass this from the controller
    trendingPosts: Array,  // We will pass this from the controller
  });

  // 2. HELPER: Get Image URL (Handles storage vs mock)
  const getImageUrl = (image) => {
    if (!image) return 'https://via.placeholder.com/800x400?text=No+Image';
    if (image.startsWith('http')) return image; // If it's an external URL
    return `/storage/${image}`; // If it's uploaded via Filament
  };

  // 3. HELPER: Format Date
  const formatDate = (dateString) => {
    if (!dateString) return '';
    return new Date(dateString).toLocaleDateString('en-US', {
      month: 'long',
      day: 'numeric',
      year: 'numeric'
    });
  };

  // 4. COMPUTED: Handle Tags (Safe split)
  const tagsArray = computed(() => {
    if (!props.post.tags) return [];
    // Assuming tags are stored as "Tag1, Tag2, Tag3" in DB.
    // If you don't have a tags column yet, this will just return empty.
    return props.post.tags.split(',').map(tag => tag.trim());
  });

  // 5. NEWSLETTER LOGIC (Frontend Only)
  const email = ref('');
  const subscribe = () => {
    alert(`Subscribed with ${email.value} (Demo)`);
    email.value = '';
  };
</script>

<template>
  <Head :title="post.title" />

  <div class="bg-gray-50 min-h-screen text-gray-800 font-sans pt-24 pb-12">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


      <div class="grid lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2">
          <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

            <div class="p-6 md:p-10 pb-0">
              <div class="flex items-center gap-4 text-sm font-bold uppercase tracking-widest mb-4">
                <Link href="/blog" class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full hover:bg-blue-200 transition">
                Blog
                </Link>
                <span class="text-gray-400">/</span>
                <span class="text-blue-600">Article</span>
              </div>

              <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                {{ post.title }}
              </h1>

              <div class="flex items-center justify-between border-b border-gray-100 pb-8 mb-8">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold uppercase">
                    {{ post.author ? post.author.charAt(0) : 'G' }}
                  </div>
                  <div>
                    <p class="text-sm font-bold text-gray-900">{{ post.author || 'Goodwill Team' }}</p>
                    <p class="text-xs text-gray-500">{{ formatDate(post.published_at) }}</p>
                  </div>
                </div>

                <div class="flex gap-2">
                  <button class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-blue-100 hover:text-blue-600 transition" title="Share on Twitter">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" /></svg>
                  </button>
                  <button class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-blue-800 hover:text-white transition" title="Share on Facebook">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="w-full h-64 md:h-96 bg-gray-200 relative">
              <img :src="getImageUrl(post.image)"
                   :alt="post.title"
                   class="w-full h-full object-cover"
                   @error="$event.target.src='https://via.placeholder.com/800x400?text=No+Image'">
            </div>

            <div class="p-6 md:p-10">
              <div class="prose prose-lg text-gray-600 max-w-none leading-relaxed" v-html="post.content"></div>

              <div v-if="tagsArray.length > 0" class="mt-10 pt-8 border-t border-gray-100 flex flex-wrap gap-2 items-center">
                <span class="font-bold text-gray-900 mr-2">Tags:</span>
                <span v-for="(tag, index) in tagsArray"
                      :key="index"
                      class="bg-gray-100 text-gray-600 hover:bg-blue-100 hover:text-blue-600 px-3 py-1 rounded text-sm font-medium transition cursor-pointer">
                  {{ tag }}
                </span>
              </div>
            </div>

          </article>
        </div>

        <aside class="lg:col-span-1 space-y-8">

          <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-gray-900 text-lg mb-4">Search</h3>
            <div class="relative">
              <input type="text" placeholder="Search articles..." class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
              <svg class="w-5 h-5 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
          </div>

          <div v-if="trendingPosts && trendingPosts.length > 0" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-gray-900 text-lg mb-6 border-b border-gray-100 pb-2">Latest Posts</h3>

            <div class="space-y-6">
              <Link v-for="trend in trendingPosts"
                    :key="trend.id"
                    :href="`/blog/${trend.slug}`"
                    class="flex gap-4 group">
              <div class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden relative">
                <img :src="getImageUrl(trend.image)"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     @error="$event.target.src='https://via.placeholder.com/150?text=Thumb'">
              </div>
              <div>
                <span class="text-xs text-gray-400 font-bold uppercase">{{ formatDate(trend.published_at) }}</span>
                <h4 class="text-sm font-bold text-gray-800 leading-snug mt-1 group-hover:text-blue-600 transition line-clamp-2">
                  {{ trend.title }}
                </h4>
              </div>
              </Link>
            </div>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-gray-900 text-lg mb-4">Categories</h3>
            <ul class="space-y-2">
              <li v-for="cat in ['Translation', 'Localization', 'Interpretation', 'News']" :key="cat">
                <Link href="/blog" class="flex justify-between items-center text-gray-600 hover:text-blue-600 transition p-2 rounded hover:bg-gray-50">
                <span>{{ cat }}</span>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </Link>
              </li>
            </ul>
          </div>

        </aside>

      </div>
    </div>

    <section class="max-w-7xl mx-auto px-4 mt-20 mb-20">
      <div class="bg-blue-900 rounded-3xl p-8 md:p-12 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
        <div class="absolute top-0 left-0 p-4 opacity-10">
          <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><circle cx="50" cy="50" r="40" stroke="white" stroke-width="5" /></svg>
        </div>

        <div class="relative z-10 md:w-1/2">
          <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Want to get the best articles weekly?</h2>
          <p class="text-blue-200">Subscribe to our newsletter and stay updated.</p>
        </div>

        <form @submit.prevent="subscribe" class="relative z-10 w-full md:w-1/2 flex flex-col sm:flex-row gap-3">
          <input v-model="email"
                 type="email"
                 placeholder="Your working email"
                 class="w-full px-5 py-4 rounded-xl border-none focus:ring-2 focus:ring-blue-400 text-gray-900"
                 required>
          <button type="submit" class="bg-white text-blue-900 font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition shadow-lg">
            Subscribe
          </button>
        </form>
      </div>
    </section>

    <section v-if="relatedPosts && relatedPosts.length > 0" class="max-w-7xl mx-auto px-4 pb-20">
      <div class="flex justify-between items-end mb-8">
        <div>
          <span class="text-blue-600 font-bold uppercase tracking-widest text-xs">Our Blog</span>
          <h2 class="text-2xl font-bold text-gray-900 mt-1">You may also like</h2>
        </div>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <Link v-for="rel in relatedPosts"
              :key="rel.id"
              :href="`/blog/${rel.slug}`"
              class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
        <div class="h-48 overflow-hidden relative">
          <img :src="getImageUrl(rel.image)"
               class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500"
               @error="$event.target.src='https://via.placeholder.com/400x300?text=Related'">
        </div>
        <div class="p-6">
          <span class="text-xs text-gray-400 font-bold mb-2 block">{{ formatDate(rel.published_at) }}</span>
          <h3 class="text-lg font-bold text-gray-900 leading-snug group-hover:text-blue-600 transition line-clamp-2">
            {{ rel.title }}
          </h3>
          <span class="text-blue-600 text-sm font-bold mt-4 inline-block group-hover:underline">Read &rarr;</span>
        </div>
        </Link>
      </div>
    </section>

  </div>
</template>
