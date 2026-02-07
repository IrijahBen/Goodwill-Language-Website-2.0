<script setup>
  import { useForm } from '@inertiajs/vue3';
  import { watch } from 'vue';

  const props = defineProps({
    show: Boolean,
  });

  const emit = defineEmits(['close']);

  // Form Setup using Inertia's useForm
  const form = useForm({
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    message: '',
    agree: false
  });

  // Submit Logic
  const submit = () => {
    // Post data to the Laravel route
    form.post('/contact/submit', {
      preserveScroll: true,
      onSuccess: () => {
        alert("Message sent successfully!");
        form.reset();
        emit('close');
      },
      onError: (errors) => {
        console.error("Form errors:", errors);
        // Validation errors are automatically available in form.errors
      }
    });
  };

  // Lock body scroll when modal is open
  watch(() => props.show, (val) => {
    if (typeof document !== 'undefined') {
      document.body.style.overflow = val ? 'hidden' : 'auto';
    }
  });
</script>

<template>
  <Teleport to="body">
    <Transition enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0">
      <div v-if="show" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-gray-900 bg-opacity-60 backdrop-blur-sm" @click.self="emit('close')">

        <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-hidden relative animate-fade-in-up">

          <button @click="emit('close')" class="absolute top-5 right-5 text-gray-400 hover:text-gray-600 transition z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
          </button>

          <div class="p-8 md:p-12">
            <div class="mb-8">
              <span class="text-xs font-bold text-gray-800 uppercase tracking-wide">Any Questions?</span>
              <h2 class="text-4xl font-extrabold text-gray-900 mt-1">Drop us a line</h2>
            </div>

            <form @submit.prevent="submit" class="space-y-6">

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-gray-600 text-sm mb-2">First Name*</label>
                  <input v-model="form.firstName" type="text" placeholder="Your first name"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-900 focus:border-blue-900 outline-none transition text-gray-700"
                         :class="{'border-red-500': form.errors.firstName}" required>
                  <div v-if="form.errors.firstName" class="text-red-500 text-xs mt-1">{{ form.errors.firstName }}</div>
                </div>
                <div>
                  <label class="block text-gray-600 text-sm mb-2">Last Name*</label>
                  <input v-model="form.lastName" type="text" placeholder="Your last name"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-900 focus:border-blue-900 outline-none transition text-gray-700"
                         :class="{'border-red-500': form.errors.lastName}" required>
                  <div v-if="form.errors.lastName" class="text-red-500 text-xs mt-1">{{ form.errors.lastName }}</div>
                </div>
              </div>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-gray-600 text-sm mb-2">Email*</label>
                  <input v-model="form.email" type="email" placeholder="Your working email"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-900 focus:border-blue-900 outline-none transition text-gray-700"
                         :class="{'border-red-500': form.errors.email}" required>
                  <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>
                </div>
                <div>
                  <label class="block text-gray-600 text-sm mb-2">Phone</label>
                  <input v-model="form.phone" type="tel" placeholder="Your phone number"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-900 focus:border-blue-900 outline-none transition text-gray-700"
                         :class="{'border-red-500': form.errors.phone}">
                  <div v-if="form.errors.phone" class="text-red-500 text-xs mt-1">{{ form.errors.phone }}</div>
                </div>
              </div>

              <div>
                <label class="block text-gray-600 text-sm mb-2">Message*</label>
                <textarea v-model="form.message" rows="4" placeholder="Your message"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-900 focus:border-blue-900 outline-none transition text-gray-700 resize-none"
                          :class="{'border-red-500': form.errors.message}" required></textarea>
                <div v-if="form.errors.message" class="text-red-500 text-xs mt-1">{{ form.errors.message }}</div>
              </div>

              <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 pt-2">
                <label class="flex items-start gap-3 cursor-pointer max-w-xs">
                  <input v-model="form.agree" type="checkbox" class="mt-1 w-4 h-4 text-blue-900 border-gray-300 rounded focus:ring-blue-900">
                  <span class="text-sm text-gray-500 leading-snug">
                    I agree to receive communications from Goodwill Language Solution
                  </span>
                </label>

                <button type="submit" :disabled="form.processing" class="bg-blue-900 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-800 transition shadow-lg w-full md:w-auto whitespace-nowrap disabled:opacity-50 disabled:cursor-not-allowed">
                  {{ form.processing ? 'Sending...' : 'Send message' }}
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </Transition>
  </Teleport>
</template>

<style scoped>
  .animate-fade-in-up {
    animation: fadeInUp 0.3s ease-out;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px) scale(0.98);
    }

    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }
</style>
