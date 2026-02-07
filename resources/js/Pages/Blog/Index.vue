<script setup>
  import { ref, computed } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // 1. RECEIVE REAL DATA FROM LARAVEL
  const props = defineProps({
    posts: Array
  });

  // 2. STATE
  const searchQuery = ref('');
  const selectedCategory = ref('');
  const currentPage = ref(1);
  const itemsPerPage = 6;

  // 3. HARDCODED CATEGORIES (Since we haven't built a Category table yet)
  const categories = ref([
    { id: 1, name: 'Translation' },
    { id: 2, name: 'Interpretation' },
    { id: 3, name: 'Technology' },
    { id: 4, name: 'News' }
  ]);

  // 4. HELPER: Format Date
  const formatDate = (dateString) => {
    if (!dateString) return '';
    return new Date(dateString).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
  };

  // 5. HELPER: Get Image URL
  const getImageUrl = (image) => {
    return image ? `/storage/${image}` : 'https://via.placeholder.com/800x600?text=No+Image';
  };

  // 6. COMPUTED LOGIC (Adapted for Real Data)
  const allFilteredPosts = computed(() => {
    let filtered = props.posts;

    // Filter by Category (Note: We are searching the 'title' or body for now since DB lacks category field)
    if (selectedCategory.value) {
      filtered = filtered.filter(post =>
        post.title.toLowerCase().includes(selectedCategory.value.toLowerCase()) ||
        (post.excerpt && post.excerpt.toLowerCase().includes(selectedCategory.value.toLowerCase()))
      );
    }

    // Filter by Search
    if (searchQuery.value) {
      const query = searchQuery.value.toLowerCase();
      filtered = filtered.filter(post =>
        post.title.toLowerCase().includes(query) ||
        (post.excerpt && post.excerpt.toLowerCase().includes(query))
      );
    }
    return filtered;
  });

  // Featured Post Logic (First post of the list)
  const featuredPost = computed(() => {
    if (currentPage.value === 1 && !searchQuery.value && !selectedCategory.value && allFilteredPosts.value.length > 0) {
      return allFilteredPosts.value[0];
    }
    return null;
  });

  // Grid Posts Logic (Remove featured post from grid if it exists)
  const gridPosts = computed(() => {
    let posts = allFilteredPosts.value;
    if (featuredPost.value) {
      posts = posts.slice(1);
    }
    return posts;
  });

  // Pagination
  const totalPages = computed(() => Math.ceil(gridPosts.value.length / itemsPerPage));

  const paginatedGridPosts = computed(() => {
    const start = (currentPage.value - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    return gridPosts.value.slice(start, end);
  });

  const changePage = (page) => {
    if (page >= 1 && page <= totalPages.value) {
      currentPage.value = page;
      document.getElementById('blog-grid').scrollIntoView({ behavior: 'smooth' });
    }
  };

  const handleFilter = () => {
    currentPage.value = 1;
  };
</script>

<template>
  <Head title="Our Blog" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-24 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Insights & News
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-6">
          Latest Topics on Language
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto leading-relaxed">
          Explore expert insights on translation, localization, and the evolving world of global communication.
        </p>
      </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-30">
      <div class="flex flex-col md:flex-row gap-4 items-center justify-center">

        <div class="w-full md:w-1/3 relative group">
          <select v-model="selectedCategory"
                  @change="handleFilter"
                  class="appearance-none w-full bg-white text-gray-700 py-4 px-6 pr-10 rounded-2xl shadow-lg border border-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer font-bold text-sm">
            <option value="">All Categories</option>
            <option v-for="cat in categories" :key="cat.id" :value="cat.name">{{ cat.name }}</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </div>
        </div>

        <div class="w-full md:w-2/3 relative group">
          <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </div>
          <input v-model="searchQuery"
                 @input="handleFilter"
                 type="text"
                 placeholder="Search for articles..."
                 class="block w-full pl-14 pr-6 py-4 bg-white border border-gray-100 rounded-2xl shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-900 placeholder-gray-400 font-medium">
        </div>

      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="blog-grid">

      <section v-if="featuredPost" class="mb-16">
        <div class="flex items-center gap-2 mb-6">
          <div class="h-1 w-6 bg-blue-600 rounded-full"></div>
          <h2 class="text-xs font-bold text-gray-500 uppercase tracking-widest">Featured Article</h2>
        </div>

        <div class="bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2 border border-gray-100 group cursor-pointer hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
          <Link :href="`/blog/${featuredPost.slug}`" class="relative overflow-hidden h-72 md:h-auto block">
          <img :src="getImageUrl(featuredPost.image)"
               class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-700"
               alt="Featured">
          <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-4 py-1.5 rounded-lg text-sm font-bold shadow-sm text-gray-900">
            Latest
          </div>
          </Link>

          <div class="p-8 md:p-12 flex flex-col justify-center">
            <div class="flex items-center gap-2 mb-4 text-sm text-gray-500 font-medium">
              <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              <span>{{ formatDate(featuredPost.published_at) }}</span>
            </div>
            <h3 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition leading-tight">
              <Link :href="`/blog/${featuredPost.slug}`">
              {{ featuredPost.title }}
              </Link>
            </h3>
            <p class="text-gray-600 mb-8 text-lg leading-relaxed line-clamp-3">
              {{ featuredPost.excerpt }}
            </p>
            <div class="flex items-center gap-3 mt-auto">
              <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center font-bold text-blue-600 text-sm">
                GW
              </div>
              <div>
                <p class="text-sm font-bold text-gray-900">Goodwill Team</p>
                <p class="text-xs text-gray-500">Author</p>
              </div>
              <div class="ml-auto">
                <Link :href="`/blog/${featuredPost.slug}`" class="text-blue-600 font-bold hover:underline flex items-center">
                Read Article <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section v-if="paginatedGridPosts.length > 0">
        <div class="flex justify-between items-end mb-8 border-b border-gray-100 pb-4">
          <h2 class="text-2xl font-bold text-gray-900">Recent Articles</h2>
          <span class="text-gray-500 text-sm font-medium">{{ paginatedGridPosts.length }} Posts</span>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <article v-for="post in paginatedGridPosts"
                   :key="post.id"
                   class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full border border-gray-100 transform hover:-translate-y-1">

            <Link :href="`/blog/${post.slug}`" class="h-56 overflow-hidden relative block">
            <img :src="getImageUrl(post.image)"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                 :alt="post.title">
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-xs font-bold uppercase shadow-sm text-gray-800 tracking-wide">
              News
            </div>
            </Link>

            <div class="p-6 flex flex-col flex-grow">
              <div class="flex items-center text-gray-400 text-xs font-bold uppercase mb-3 tracking-wider">
                <span>{{ formatDate(post.published_at) }}</span>
              </div>

              <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-blue-600 transition">
                <Link :href="`/blog/${post.slug}`">{{ post.title }}</Link>
              </h3>

              <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow line-clamp-3">
                {{ post.excerpt }}
              </p>

              <div class="flex items-center justify-between border-t border-gray-50 pt-4 mt-auto">
                <div class="flex items-center gap-2">
                  <div class="w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-600">
                    GW
                  </div>
                  <span class="text-xs font-medium text-gray-500">Goodwill Team</span>
                </div>
                <Link :href="`/blog/${post.slug}`" class="text-blue-600 font-bold text-sm hover:text-blue-800 transition flex items-center">
                Read <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </Link>
              </div>
            </div>
          </article>
        </div>

        <div class="mt-16 flex justify-center gap-2" v-if="totalPages > 1">
          <button @click="changePage(currentPage - 1)"
                  :disabled="currentPage === 1"
                  class="px-4 py-2 border rounded-lg transition font-medium flex items-center"
                  :class="currentPage === 1 ? 'text-gray-300 border-gray-200 cursor-not-allowed bg-gray-50' : 'text-gray-600 border-gray-300 hover:bg-white hover:shadow-sm'">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Previous
          </button>

          <button v-for="page in totalPages"
                  :key="page"
                  @click="changePage(page)"
                  class="w-10 h-10 rounded-lg font-bold transition flex items-center justify-center border"
                  :class="page === currentPage ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50'">
            {{ page }}
          </button>

          <button @click="changePage(currentPage + 1)"
                  :disabled="currentPage === totalPages"
                  class="px-4 py-2 border rounded-lg transition font-medium flex items-center"
                  :class="currentPage === totalPages ? 'text-gray-300 border-gray-200 cursor-not-allowed bg-gray-50' : 'text-gray-600 border-gray-300 hover:bg-white hover:shadow-sm'">
            Next <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </button>
        </div>
      </section>

      <div v-else class="text-center py-24 bg-white rounded-3xl border border-dashed border-gray-300 mt-8">
        <div class="inline-block p-6 bg-blue-50 rounded-full mb-6">
          <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900">No articles match your search</h3>
        <p class="text-gray-500 mt-2 max-w-md mx-auto">
          We couldn't find any posts matching "<strong>{{ searchQuery }}</strong>".
        </p>
        <button @click="searchQuery = ''; selectedCategory = ''; currentPage = 1" class="mt-8 px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow-lg">
          Clear all filters
        </button>
      </div>

    </div>

  </div>
</template>
