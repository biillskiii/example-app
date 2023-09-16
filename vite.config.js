import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets','public/css','public/js','public/picture'],
            refresh: true,
        }),
    ],
});
