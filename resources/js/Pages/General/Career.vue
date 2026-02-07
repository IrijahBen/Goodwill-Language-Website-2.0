<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

// 1. State for the current step
const currentStep = ref(1);
const totalSteps = 4;

// 2. The Form Data (Consolidated from all 4 files)
const form = useForm({
    // Step 1: Personal Info
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    nationality: '',
    country: '',
    maritalStatus: '',
    address: '',

    // Step 2: Education
    academicQualification: '',
    mainField: '',
    institution: '',
    otherQualification: '',
    otherField: '',
    otherInstitution: '',

    // Step 3: Experience
    employer1: '',
    position1: '',
    duration1: '',
    roleDesc1: '',
    employer2: '',
    position2: '',
    duration2: '',
    roleDesc2: '',

    // Step 4: Skills & File
    lang1: '',
    lang1Level: '',
    lang2: '',
    lang2Level: '',
    finalRoleDesc: '',
    cv: null, // For the file upload
});

// 3. Navigation Logic
const nextStep = () => {
    // Optional: Add validation logic here (e.g., check if fields are empty)
    if (currentStep.value < totalSteps) {
        currentStep.value++;
        window.scrollTo(0, 0); // Scroll to top
    }
};

const prevStep = () => {
    if (currentStep.value > 1) {
        currentStep.value--;
        window.scrollTo(0, 0);
    }
};

// 4. Submit Logic
const submit = () => {
    // In a real app, you would post to your Laravel backend
    console.log("Submitting Application:", form);
    alert("Application Submitted! (This is a demo)");

    // form.post(route('career.store'));
};
</script>

<template>
  <Head title="Careers" />

  <div class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <section class="bg-blue-900 pt-32 pb-20 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
      <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4 border border-blue-700">
          Join Our Team
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
          Career at Goodwill
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto">
          Translation Jobs in Nigeria & Africa
        </p>
      </div>
    </section>

    <section class="py-16 max-w-4xl mx-auto px-4">

      <div class="mb-10">
        <div class="flex justify-between mb-2 text-sm font-bold text-gray-600 uppercase tracking-wide">
          <span>Step {{ currentStep }}</span>
          <span>of {{ totalSteps }}</span>
        </div>
        <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
          <div class="h-full bg-blue-600 transition-all duration-500 ease-out"
               :style="{ width: (currentStep / totalSteps) * 100 + '%' }"></div>
        </div>
      </div>

      <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-gray-100">
        <form @submit.prevent="submit">

          <div v-if="currentStep === 1" class="space-y-6">
            <h2 class="text-2xl font-bold text-gray-900 border-b pb-4 mb-6">Personal Information</h2>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">First Name</label>
                <input v-model="form.firstName" type="text" class="input-field" placeholder="John" required>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Last Name</label>
                <input v-model="form.lastName" type="text" class="input-field" placeholder="Doe" required>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                <input v-model="form.email" type="email" class="input-field" placeholder="john@example.com" required>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Phone</label>
                <input v-model="form.phone" type="tel" class="input-field" placeholder="+234..." required>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Nationality</label>
                <input v-model="form.nationality" type="text" class="input-field" placeholder="Nigerian" required>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Country of Residence</label>
                <input v-model="form.country" type="text" class="input-field" placeholder="Nigeria" required>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Marital Status</label>
                <select v-model="form.maritalStatus" class="input-field" required>
                  <option value="" disabled>Select Status</option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Address</label>
                <input v-model="form.address" type="text" class="input-field" placeholder="Full Address" required>
              </div>
            </div>
          </div>

          <div v-if="currentStep === 2" class="space-y-6">
            <h2 class="text-2xl font-bold text-gray-900 border-b pb-4 mb-6">Education Background</h2>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Highest Qualification</label>
                <input v-model="form.academicQualification" type="text" class="input-field" placeholder="B.Sc / Masters / PhD" required>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Field of Study</label>
                <input v-model="form.mainField" type="text" class="input-field" placeholder="Linguistics" required>
              </div>
            </div>

            <div>
              <label class="block text-sm font-bold text-gray-700 mb-2">University / Institution</label>
              <input v-model="form.institution" type="text" class="input-field" placeholder="University of Lagos" required>
            </div>

            <div class="pt-4 border-t border-gray-100">
              <p class="text-sm text-gray-500 mb-4 uppercase font-bold tracking-wide">Other Qualifications (Optional)</p>
              <div class="grid md:grid-cols-2 gap-6 mb-4">
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Other Qualification</label>
                  <input v-model="form.otherQualification" type="text" class="input-field" placeholder="Diploma">
                </div>
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Field of Study</label>
                  <input v-model="form.otherField" type="text" class="input-field" placeholder="French">
                </div>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Institution</label>
                <input v-model="form.otherInstitution" type="text" class="input-field" placeholder="Institution Name">
              </div>
            </div>
          </div>

          <div v-if="currentStep === 3" class="space-y-6">
            <h2 class="text-2xl font-bold text-gray-900 border-b pb-4 mb-6">Work Experience</h2>

            <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
              <h3 class="font-bold text-blue-800 mb-4">Most Recent Employment</h3>
              <div class="grid md:grid-cols-2 gap-6 mb-4">
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Employer/Org</label>
                  <input v-model="form.employer1" type="text" class="input-field" required>
                </div>
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Position Held</label>
                  <input v-model="form.position1" type="text" class="input-field" required>
                </div>
              </div>
              <div class="mb-4">
                <label class="block text-sm font-bold text-gray-700 mb-2">Duration</label>
                <input v-model="form.duration1" type="text" class="input-field" placeholder="e.g. 2020 - Present" required>
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Role Description</label>
                <textarea v-model="form.roleDesc1" rows="3" class="input-field" required></textarea>
              </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
              <h3 class="font-bold text-gray-800 mb-4">Previous Employment (Optional)</h3>
              <div class="grid md:grid-cols-2 gap-6 mb-4">
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Employer/Org</label>
                  <input v-model="form.employer2" type="text" class="input-field">
                </div>
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">Position Held</label>
                  <input v-model="form.position2" type="text" class="input-field">
                </div>
              </div>
              <div class="mb-4">
                <label class="block text-sm font-bold text-gray-700 mb-2">Duration</label>
                <input v-model="form.duration2" type="text" class="input-field" placeholder="e.g. 2018 - 2020">
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Role Description</label>
                <textarea v-model="form.roleDesc2" rows="3" class="input-field"></textarea>
              </div>
            </div>
          </div>

          <div v-if="currentStep === 4" class="space-y-8">
            <h2 class="text-2xl font-bold text-gray-900 border-b pb-4 mb-6">Languages & CV</h2>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
              <label class="block text-sm font-bold text-gray-700 mb-2">Primary Language</label>
              <input v-model="form.lang1" type="text" class="input-field mb-4" placeholder="e.g. English" required>

              <label class="block text-sm font-bold text-gray-700 mb-2">Proficiency Level</label>
              <div class="flex flex-wrap gap-4">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang1Level" value="Elementary" class="accent-blue-600 w-5 h-5"> <span>Elementary</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang1Level" value="Professional" class="accent-blue-600 w-5 h-5"> <span>Professional</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang1Level" value="Native" class="accent-blue-600 w-5 h-5"> <span>Native</span>
                </label>
              </div>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
              <label class="block text-sm font-bold text-gray-700 mb-2">Secondary Language</label>
              <input v-model="form.lang2" type="text" class="input-field mb-4" placeholder="e.g. French" required>

              <label class="block text-sm font-bold text-gray-700 mb-2">Proficiency Level</label>
              <div class="flex flex-wrap gap-4">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang2Level" value="Elementary" class="accent-blue-600 w-5 h-5"> <span>Elementary</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang2Level" value="Professional" class="accent-blue-600 w-5 h-5"> <span>Professional</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" v-model="form.lang2Level" value="Native" class="accent-blue-600 w-5 h-5"> <span>Native</span>
                </label>
              </div>
            </div>

            <div>
              <label class="block text-sm font-bold text-gray-700 mb-2">Final Role Description / Cover Note</label>
              <textarea v-model="form.finalRoleDesc" rows="4" class="input-field" required></textarea>
            </div>

            <div class="border-2 border-dashed border-blue-200 rounded-xl p-8 text-center bg-blue-50">
              <svg class="w-12 h-12 text-blue-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
              <label for="cv-upload" class="bg-blue-600 text-white font-bold py-2 px-6 rounded-lg cursor-pointer hover:bg-blue-700 transition">
                Upload CV (PDF/DOC)
              </label>
              <input @input="form.cv = $event.target.files[0]" id="cv-upload" type="file" class="hidden" accept=".pdf,.doc,.docx">
              <p class="mt-4 text-sm text-gray-500" v-if="form.cv">Selected: {{ form.cv.name }}</p>
              <p class="mt-4 text-sm text-gray-400" v-else>No file selected</p>
            </div>

          </div>

          <div class="mt-10 flex justify-between items-center pt-6 border-t border-gray-100">
            <button v-if="currentStep > 1"
                    type="button"
                    @click="prevStep"
                    class="text-gray-600 font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
              &larr; Back
            </button>
            <div v-else></div> <button v-if="currentStep < totalSteps"
                                       type="button"
                                       @click="nextStep"
                                       class="bg-blue-600 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
              Next Step &rarr;
            </button>

            <button v-else
                    type="submit"
                    class="bg-green-600 text-white font-bold px-8 py-3 rounded-lg hover:bg-green-700 transition shadow-lg">
              Submit Application
            </button>
          </div>

        </form>
      </div>

    </section>

  </div>
</template>

<style scoped>
  /* Simple utility class for inputs to keep HTML clean */
  .input-field {
    @apply w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition;
  }
</style>
