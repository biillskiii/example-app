import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'public/css/acara-informasi.css','public/css/header.css','public/css/homeLayout.css','public/css/karya.css','public/css/keanggotaan.css','public/css/navbar-footer.css',
            'public/js/aos.js','public/js/arrow.js','public/js/keanggotaan.js','public/js/landing.js'
            ],
            refresh: true,
        }),
    ],
});
