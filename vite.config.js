import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import { resolve } from 'path';
import { homedir } from 'os';

let host = 'srvn-dash.test';
let homeDir = homedir();

let serverConfig = {};

if (homeDir) {
    serverConfig = {
        https: {
            key: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.key`)),
            cert: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.crt`)),
        },
        hmr: {
            host: 'srvn-dash.test',
        },
        host: 'srvn-dash.test',
    };
}

export default defineConfig({
    plugins: [laravel([
      'resources/js/app.js',
      'resourses/css/app.css',
      ])],

    server: serverConfig,
});
