import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
     theme: {
    extend: {
      fontFamily: {
        mono: ['"JetBrains Mono"', 'monospace'], // Use 'mono' as the key
      },
    },
  },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
