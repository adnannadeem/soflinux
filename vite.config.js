import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

// this is for development
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/sass/app.scss',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//         vue({
//             template: {
//                 transformAssetUrls: {
//                     base: null,
//                     includeAbsolute: false,
//                 },
//             },
//         }),
//     ],
//     resolve: {
//         alias: {
//             vue: 'vue/dist/vue.esm-bundler.js',
//             '@': '/resources/js',
//         },
//     },
//     server: { 
//         hmr: {
//             host: 'localhost',
//         },
//         watch: {
//             usePolling: true,
//         },
//         host: '0.0.0.0',
//         port: 5173,
//     },
//     build: {
//         manifest: true,
//         outDir: 'public/build',
//         rollupOptions: {
//             output: {
//                 assetFileNames: (assetInfo) => {
//                     let extType = assetInfo.name.split('.')[1];
//                     if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
//                         extType = 'images';
//                         return `assets/${extType}/[name]-[hash][extname]`;
//                     }
//                     else if (assetInfo.name.endsWith('.ttf') || 
//                         assetInfo.name.endsWith('.woff') || 
//                         assetInfo.name.endsWith('.woff2')) {
//                         return 'fonts/[name][extname]';
//                     }
//                     return 'assets/[name]-[hash][extname]';
//                 },
//                 chunkFileNames: 'assets/js/[name]-[hash].js',
//                 entryFileNames: 'assets/js/[name]-[hash].js',
//             },
//         },
//     },
// });

/// this is for production
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@': '/resources/js',
        },
    },
    
});


