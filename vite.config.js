import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: null,
        }),
    ],
    base: process.env.VITE_ASSETS_URL || process.env.APP_URL,
});
