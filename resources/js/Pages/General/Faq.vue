<script setup>
  import { ref } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';

  // 1. STATE
  const activeIndex = ref(0); // First item open by default

  // 2. TOGGLE FUNCTION
  const toggleFaq = (index) => {
    if (activeIndex.value === index) {
      activeIndex.value = null; // Close
    } else {
      activeIndex.value = index; // Open
    }
  };

  // 3. FAQ DATA
  const faqs = ref([
    {
      question: "What is the difference between translation and interpretation?",
      answer: "Though often used interchangeably, “translation” and “interpretation” represent different services. Translation involves converting written text from one language to another, ensuring accuracy in meaning and context. Interpretation, on the other hand, refers to the real-time conversion of spoken language, requiring quick thinking and fluency to convey messages verbally in various settings."
    },
    {
      question: "Where is Goodwill Language Solution located?",
      answer: "Goodwill Language Solution is a globally recognized agency with offices strategically located in Nigeria, Kenya, Australia, and Canada. As key hubs in both East and West Africa, Kenya and Nigeria serve as important centers for regional and international commerce. Our international presence reinforces our commitment to delivering high-quality language services worldwide."
    },
    {
      question: "What makes you special compared to other translation services?",
      answer: "What sets us apart is the winning combination of extensive expertise, strong market reputation, and highly competitive pricing. Our uniqueness lies in being a recognized market leader, enabling us to provide a value-added component to every project. We offer unparalleled quality while maintaining affordability."
    },
    {
      question: "Are all your translators based in Africa?",
      answer: "Goodwill Language Solution prides itself on hiring and managing a highly skilled global network of professional linguists. While we have a strong African presence, our network spans the globe to ensure we have the best native speakers for every specific language pair."
    },
    {
      question: "Are your translators located in the target countries?",
      answer: "Yes. All our linguists are native speakers of the languages they translate, ensuring that every translation is culturally accurate and contextually relevant. These professionals hold advanced degrees across various disciplines, bringing specialized knowledge to each project."
    },
    {
      question: "Do you use any translation software (AI)?",
      answer: "We prioritize human expertise. While we use terminology management tools to ensure consistency, we do not rely on raw automated translations. We believe that nuance, cultural context, and precision can only be guaranteed by expert human linguists."
    },
    {
      question: "How do you guarantee confidentiality?",
      answer: "All our translators are bound by strict confidentiality agreements (NDAs). In addition, we implement rigorous security measures to protect your data throughout the translation process. Your documents are handled with the strictest discretion."
    },
    {
      question: "What industries do you work with?",
      answer: "We specialize in a wide range of industries including Medical & Healthcare, Finance & Banking, Legal, Technology, Marketing, and Government sectors. Our expertise across these sectors allows us to use industry-appropriate terminology for every project."
    },
    {
      question: "What languages do you translate?",
      answer: "Goodwill Language Solutions translates from and to more than 30 global and African languages. This includes major languages like French, Arabic, Portuguese, Chinese, and Swahili, as well as regional languages like Yoruba, Hausa, Igbo, Amharic, and Somali."
    },
    {
      question: "What are your translation fees?",
      answer: "Since every project is unique, we provide customized quotes based on word count, complexity, and deadline. Generally, our pricing is highly competitive. Contact us for a free, transparent quote."
    },
    {
      question: "How long will a typical translation take?",
      answer: "Turnaround time depends on the length and complexity of the text. However, thanks to our efficient project management, we can complete projects within relatively short timeframes without compromising quality."
    },
    {
      question: "How do we get started?",
      answer: "It's easy! You can reach out to us at admin@goodwillanguage.com or use the 'Get a Quote' button on this website. One of our senior representatives will analyze your needs and provide a detailed proposal."
    }
  ]);
</script>

<template>
  <Head title="Frequently Asked Questions" />

  <div class="bg-gray-50 min-h-screen text-gray-800 font-sans">

    <section class="bg-blue-900 pt-32 pb-32 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Help Center
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-6">
          Frequently Asked Questions
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto leading-relaxed">
          Answers to common questions about our professional language services.
        </p>
      </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20 pb-16">
      <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.12)] border border-gray-100 overflow-hidden">

        <div v-for="(faq, index) in faqs"
             :key="index"
             class="border-b border-gray-100 last:border-0 transition-all duration-300"
             :class="activeIndex === index ? 'bg-blue-50/50' : 'bg-white'">
          <button @click="toggleFaq(index)"
                  class="w-full flex justify-between items-center p-6 md:p-8 text-left hover:bg-gray-50 transition-colors duration-200 focus:outline-none group">
            <span class="text-lg md:text-xl font-bold transition-colors"
                  :class="activeIndex === index ? 'text-blue-700' : 'text-gray-800 group-hover:text-blue-600'">
              {{ faq.question }}
            </span>

            <span class="ml-6 flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 border"
                  :class="activeIndex === index ? 'bg-blue-600 border-blue-600 text-white rotate-0' : 'bg-white border-gray-200 text-gray-400 group-hover:border-blue-300 group-hover:text-blue-500'">
              <svg v-if="activeIndex === index" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
              <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            </span>
          </button>

          <div v-show="activeIndex === index"
               class="px-6 md:px-8 pb-8 text-gray-600 leading-relaxed text-base md:text-lg">
            <div class="h-px w-full bg-blue-100/50 mb-6"></div>
            <p>{{ faq.answer }}</p>
          </div>
        </div>

      </div>
    </section>

    <section class="pb-16">
      <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="inline-block p-4 bg-white rounded-full shadow-md mb-6">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Still have questions?</h2>
        <p class="text-gray-600 mb-8 max-w-lg mx-auto text-lg">
          Can’t find the answer you’re looking for? Chat with our friendly team.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
          <Link href="/contact" class="px-8 py-3.5 bg-blue-600 text-white font-extrabold rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-600/30 border-2 border-blue-600">
          Get in Touch
          </Link>
          <a href="/contact" class="px-8 py-3.5 bg-white text-gray-700 font-extrabold rounded-xl border-2 border-gray-300 hover:bg-gray-50 transition shadow-sm hover:border-gray-400">
            Email Us
          </a>
        </div>
      </div>
    </section>

  </div>
</template>
