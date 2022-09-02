import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import TestComponent from './components/Test.vue'

const app = createApp({
    components: {
        'test-component': TestComponent
    }
})
app.mount("#app")
