<script setup>
  import { Head, Link, usePage } from '@inertiajs/vue3'
  import { computed, onMounted, ref, provide } from 'vue' // Added ref, provide
  import { initCollapses, initTooltips } from 'flowbite'
  import { useDark, useToggle } from '@vueuse/core'
  import Bars from '../Components/SVG/Bars.vue'
  import Moon from '../Components/SVG/Moon.vue'
  import Sun from '../Components/SVG/Sun.vue'
  import Footer from '../Components/Footer.vue'
  import UserDropdown from '../Components/UserDropdown.vue'
  import NotiDropdown from '../Components/NotiDropdown.vue'
  import ContactModal from '../Components/ContactModal.vue' // Import the Modal

  onMounted(() => {
    initCollapses()
    initTooltips()
  })

  const isDark = useDark()
  const toggleDark = useToggle(isDark)

  const props = defineProps({
    title: String,
    description: String
  })

  const user = computed(() => usePage().props.user)
  const notificationCount = computed(() => user.value ? Math.min(user.value.notificationCount, 9) : 0)
  const notificationList = computed(() => user.value ? user.value.notificationList : [])

  // --- MODAL LOGIC START ---
  const isContactModalOpen = ref(false);

  const toggleContact = () => {
    isContactModalOpen.value = !isContactModalOpen.value;
  };

  // Make this available to all pages (Home, Services, etc.)
  provide('toggleContact', toggleContact);
  // --- MODAL LOGIC END ---
</script>

<template>
  <Head>
    <title>{{ props.title ? props.title : 'Goodwill Language Solutions' }}</title>
    <meta name="title" :content="props.title || 'Goodwill Language Solutions'">
    <meta name="description" :content="props.description || 'Professional Translation and Interpretation Services.'" />
  </Head>

  <main class="relative bg-white dark:bg-gray-900 min-h-screen flex flex-col">

    <header class="sticky top-0 z-50">
      <nav class="bg-white px-4 lg:px-6 py-4 w-full dark:bg-gray-800 drop-shadow-md border-b dark:border-gray-700">
        <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen-xl">

          <Link href="/" class="flex items-center">
          <img src="../Assets/Images/gwllogo.png" class="h-8 mr-3 sm:h-10" alt="GW Logo" />
          <div class="flex flex-col leading-tight">
            <span class="text-xl font-bold text-blue-900 dark:text-white uppercase tracking-tighter">Goodwill Language</span>
            <span class="text-xs font-medium text-blue-700 dark:text-blue-300 tracking-widest">Solutions</span>
          </div>
          </Link>

          <div class="flex items-center lg:order-2">

            <button @click="toggleDark()" id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2 mr-2">
              <Moon v-if="!isDark" class="w-5 h-5" />
              <Sun v-else class="w-5 h-5" />
            </button>

            <button @click="toggleContact"
                    class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-sm px-6 py-2.5 mr-2 focus:outline-none dark:focus:ring-blue-800 transition shadow-lg hidden md:block">
              Get a Quote
            </button>

            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <Bars class="w-6 h-6" />
            </button>
          </div>

          <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
              <li>
                <Link href="/" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url === '/' }">
                Home
                </Link>
              </li>
              <li>
                <Link href="/about-us" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url.startsWith('/about-us') }">
                About Us
                </Link>
              </li>
              <li>
                <Link href="/services" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url === '/services' }">
                Services
                </Link>
              </li>
              <li>
                <Link href="/services/localize-language" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url.startsWith('/services/localize-language') }">
                Localize Language
                </Link>
              </li>
              <li>
                <Link href="/blog" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url.startsWith('/blog') }">
                Blog
                </Link>
              </li>
              <li>
                <Link href="/faq" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url === '/faq' }">
                Faq
                </Link>
              </li>
              <li>
                <Link href="/media" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white lg:p-0 transition" :class="{ 'text-blue-700 dark:text-white font-bold': $page.url === '/media' }">
                Media
                </Link>
              </li>

              <li class="mt-4 md:hidden">
                <button @click="toggleContact" class="block w-full text-center text-white bg-blue-900 font-bold rounded-lg text-sm px-6 py-3">
                  Get a Quote
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="flex-grow flex flex-col w-full">
      <slot />
    </div>

    <Footer />

    <ContactModal :show="isContactModalOpen" @close="isContactModalOpen = false" />

  </main>
</template>
