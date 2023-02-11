import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [ vue() ],

  server: {
    port: process.env.VITE_PORT || 5173,
  },

  build: {
    manifest: true,
    emptyOutDir: true,
  },
});
