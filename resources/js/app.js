import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import Layout from './Layouts/Layout.vue';
import '../css/app.css';

// FIXED: Import Ziggy from the npm package we just installed
import { ZiggyVue } from 'ziggy-js';

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]

    if (!page) {
      console.error(`❌ ERROR: Inertia could not find the file: "./Pages/${name}.vue"`);
      console.warn('📂 Available files:', Object.keys(pages));
      throw new Error(`Page not found: ./Pages/${name}.vue`);
    }

    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue) // This enables the route() function
      .mount(el)
  },
  progress: { color: '#1A56DB' },
});
