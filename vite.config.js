import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/skin.css',
                'resources/js/app.js',
                'resources/js/jquery.waypoints.min.js',
                'resources/js/bootstrap-input-spinner.js',
                'resources/js/jquery.plugin.min.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
