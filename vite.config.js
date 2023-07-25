import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel([
            'resources/css/app.css',
			'resources/js/app.js',
			'resources/sass/theme.scss',
            'resources/js/meal/meal_create.js',
            'resources/js/weight/weight_create.js',
            'resources/js/poo/poo_create.js',
        ]),
    ],
});
