import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import fs from 'fs';
import { resolve } from 'path';
import { homedir } from 'os';

let host = 'srvn.test';
let homeDir = homedir();

let serverConfig = {};

if (homeDir) {
    serverConfig = {
        https: {
            key: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.key`)),
            cert: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.crt`)),
        },
        hmr: {
            host: 'srvn.test',
        },
        host: 'srvn.test',
    };
}

export default defineConfig({
    plugins: [
        vue(),
        laravel([ 'resources/js/app.js' ])],

    server: serverConfig,
});
