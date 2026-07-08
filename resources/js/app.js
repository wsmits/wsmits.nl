import './bootstrap';
import '../css/app.css';
import 'boxicons/css/boxicons.min.css';
import 'highlight.js/styles/default.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import VueSmoothScroll from 'vue3-smooth-scroll';
import confetti from "canvas-confetti"

import dayjs from "dayjs";
import relativeTimePlugin from "dayjs/plugin/relativeTime";
import 'dayjs/locale/nl';
dayjs.extend(relativeTimePlugin);
dayjs.locale('nl');

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const VueApp = createApp({ render: () => h(App, props) });

        VueApp.config.globalProperties.$date = dayjs;

        VueApp.use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VueSmoothScroll)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

const fireConfetti = (amount = 300) => {
    confetti({
        particleCount: amount,
        startVelocity: 80,
        angle: 60,
        spread: 55,
        origin: {x: 0, y: 1},
    });
    confetti({
        particleCount: amount,
        startVelocity: 80,
        angle: 120,
        spread: 55,
        origin: {x: 1, y: 1},
    });
}
window.fireConfetti = fireConfetti;
