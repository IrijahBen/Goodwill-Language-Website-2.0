<script setup>
  import { Head } from '@inertiajs/vue3';

  // List of YouTube Video IDs extracted from your links
  const videos = [
    { id: 'dg5paYRiTBo', title: 'GWL language Tutorial' },
    { id: 'IcGAWGtF51s', title: 'GWL language Tutorial' },
    { id: 'z_Q0_eexaHI', title: 'GWL language Tutorial' },
    { id: '23YLmecrfP8', title: 'GWL language Tutorial' },
    { id: 'eX_f8q4AR2g', title: 'GWL language Tutorial' },
    { id: 'Ij-G0LQQIL8', title: 'GWL language Tutorial' },
    { id: 'c9MUmZ_oMTM', title: 'GWL language Tutorial' },
    { id: 'WyexrLX11eY', title: 'GWL language Tutorial' },
  ];
</script>

<template>
  <Head title="Media & Gallery" />

  <AppLayout>
    <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

      <section class="bg-blue-900 pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
          <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
            Our Portfolio
          </span>
          <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
            Media & Gallery
          </h1>
          <p class="text-lg text-blue-100 max-w-2xl mx-auto">
            Watch our latest events, conferences, and translation projects in action.
          </p>
        </div>
      </section>

      <section class="py-16 max-w-7xl mx-auto px-4">
        <div class="flex items-center gap-4 mb-8">
          <div class="h-10 w-2 bg-blue-600 rounded-full"></div>
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Video Highlights</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div v-for="video in videos" :key="video.id" class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group">

            <div class="aspect-video w-full relative bg-gray-100">
              <iframe class="w-full h-full absolute inset-0"
                      :src="`https://www.youtube.com/embed/${video.id}?rel=0`"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      allowfullscreen>
              </iframe>
            </div>

            <div class="p-4">
              <h3 class="text-sm font-bold text-gray-800 group-hover:text-blue-600 transition truncate">
                {{ video.title }}
              </h3>
            </div>
          </div>
        </div>
      </section>

      <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
          <div class="flex items-center gap-4 mb-8">
            <div class="h-10 w-2 bg-orange-500 rounded-full"></div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Photo Gallery</h2>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="h-48 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
              Photo Coming Soon
            </div>
            <div class="h-48 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
              Photo Coming Soon
            </div>
            <div class="h-48 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
              Photo Coming Soon
            </div>
            <div class="h-48 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
              Photo Coming Soon
            </div>
          </div>
        </div>
      </section>

    </div>
  </AppLayout>
</template>
