import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: 'https://dashboard-kuliah-coral.vercel.app/',
    plugins: [
        laravel({
            input: ['resources/images/logo.ico', 'resources/images/STAI.png','resources/images/tes.jpg'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/dist',
        assetsDir: 'images',
        assetsInlineLimit: 4096,
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (/\.(gif|jpe?g|png|svg|ico)$/.test(assetInfo.name)) {
                        return 'images/[name]-[hash][extname]';
                    }
                    return 'assets/[name]-[hash][extname]';
                },
            },
        },
    },
});
