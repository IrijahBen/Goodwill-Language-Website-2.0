<script setup>
import { ref, computed, inject } from 'vue';
import { Head } from '@inertiajs/vue3';

// 1. STATE MANAGEMENT
const searchQuery = ref('');
const viewMode = ref('list'); // Options: 'list' or 'grid'
const toggleContact = inject('toggleContact'); // Opens the global modal

// 2. DATA
const services = ref([
    {
        id: 1,
        title: 'Website Localization',
        description: 'Adapts websites for specific markets, translating content, adjusting currency (e.g., euros), using local date formats (DD/MM/YYYY), and employing culturally relevant imagery.',
        icon: 'website' 
    },
    {
        id: 2,
        title: 'Mobile App Localization',
        description: 'Adapts software for specific languages and cultures. This includes translating interfaces, ensuring compatibility with local keyboards, and adjusting date/time formats.',
        icon: 'mobile'
    },
    {
        id: 3,
        title: 'Document Localization',
        description: 'Adapts documents like user manuals, contracts, and marketing materials for specific markets. This ensures accurate terminology and cultural sensitivity.',
        icon: 'document'
    },
    {
        id: 4,
        title: 'Multimedia Localization',
        description: 'Adapts multimedia content like videos and audio for target markets. This includes subtitling, dubbing, and culturally adapting dialogue and visual elements.',
        icon: 'video'
    },
    {
        id: 5,
        title: 'Technical Documentation',
        description: 'Adapts technical documentation for specific markets. This includes translating user manuals, installation guides, and ensuring clarity and cultural sensitivity.',
        icon: 'tech'
    },
    {
        id: 6,
        title: 'Legal and Regulatory',
        description: 'Ensures compliance with local laws and regulations in target markets. This involves adapting content to meet legal requirements and standards.',
        icon: 'legal'
    },
    {
        id: 7,
        title: 'Cultural Adaptation',
        description: 'Adapts content to reflect cultural norms, values, and sensitivities of the target market. This includes adjusting elements like color schemes and idioms.',
        icon: 'culture'
    },
    {
        id: 8,
        title: 'Marketing Localization',
        description: 'Adapts marketing campaigns for specific markets. This involves creating culturally relevant advertising campaigns that consider local tastes and preferences.',
        icon: 'marketing'
    }
]);

// 3. FILTERING LOGIC
const filteredServices = computed(() => {
    if (!searchQuery.value) return services.value;
    const query = searchQuery.value.toLowerCase();
    return services.value.filter(service => 
        service.title.toLowerCase().includes(query) || 
        service.description.toLowerCase().includes(query)
    );
});
</script>

<template>
    <Head title="Localization Services" />

    <div class="bg-gray-50 min-h-screen text-gray-800">
        
        <section class="bg-white pt-32 pb-12 shadow-sm relative overflow-hidden">
            
            <div class="absolute top-20 left-10 w-32 h-32 bg-yellow-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-40 h-40 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#F59E0B 1px, transparent 1px); background-size: 20px 20px;"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-10">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Localization of Languages</span>
                    <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mt-2">Different Categories of Localization We Do</h1>
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center gap-4 bg-gray-50 p-4 rounded-xl border border-gray-200 shadow-sm z-20 relative">
                    
                    <div class="relative w-full md:w-96">
                        <input 
                            v-model="searchQuery" 
                            type="text" 
                            placeholder="Search localization category..." 
                            class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-0 transition bg-white"
                        >
                        <svg class="w-5 h-5 absolute left-3 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>

                    <div class="flex items-center gap-2 bg-white rounded-lg p-1 border border-gray-300">
                        <button 
                            @click="viewMode = 'list'"
                            :class="viewMode === 'list' ? 'bg-blue-100 text-blue-600' : 'text-gray-400 hover:text-gray-600'"
                            class="p-2 rounded transition"
                            aria-label="List View"
                        >
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" /></svg>
                        </button>
                        <button 
                            @click="viewMode = 'grid'"
                            :class="viewMode === 'grid' ? 'bg-blue-100 text-blue-600' : 'text-gray-400 hover:text-gray-600'"
                            class="p-2 rounded transition"
                            aria-label="Grid View"
                        >
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            
            <div :class="viewMode === 'grid' ? 'grid md:grid-cols-2 gap-6' : 'space-y-6'">
                
                <article 
                    v-for="service in filteredServices" 
                    :key="service.id" 
                    class="bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 group"
                    :class="viewMode === 'list' ? 'flex flex-col md:flex-row items-start md:items-center gap-6' : 'flex flex-col items-start'"
                >
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>

                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ service.title }}</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            {{ service.description }}
                        </p>
                    </div>

                    <div class="flex-shrink-0 mt-4 md:mt-0">
                        <button 
                            @click="toggleContact"
                            class="inline-flex items-center px-6 py-2 border-2 border-blue-600 text-blue-600 font-bold rounded-lg hover:bg-blue-600 hover:text-white transition"
                        >
                            Learn More
                        </button>
                    </div>
                </article>

            </div>

            <div v-if="filteredServices.length === 0" class="text-center py-20 bg-white rounded-xl border border-gray-200 shadow-sm">
                <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">No results found</h3>
                <p class="text-gray-500 mt-2">We couldn't find any localization services matching "{{ searchQuery }}"</p>
                <button @click="searchQuery = ''" class="mt-4 text-blue-600 font-bold hover:underline">Show all services</button>
            </div>

        </section>

        <div class="max-w-7xl mx-auto px-4 pb-16 flex justify-center">
            <button class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-300 hover:bg-gray-50 transition shadow-sm">
                 <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>

    </div>
</template>
