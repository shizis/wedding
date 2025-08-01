import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import simplyCountdown from 'simplycountdown.js';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        simplyCountdown()
    ],
    server: {
        usePolling: true,
        hmr: false,
    }
});
