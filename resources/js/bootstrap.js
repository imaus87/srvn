import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Alpine from 'alpinejs'

import mask from '@alpinejs/mask'
import collapse from '@alpinejs/collapse'
import focus from '@alpinejs/focus'
import intersect from '@alpinejs/intersect'
import persist from '@alpinejs/persist'
import ui from '@alpinejs/ui'

import AutoAnimate from '@marcreichel/alpine-auto-animate';

window.Alpine = Alpine

Alpine.plugin(mask)
Alpine.plugin(collapse)
Alpine.plugin(focus)
Alpine.plugin(intersect)
Alpine.plugin(persist)
Alpine.plugin(ui)

Alpine.plugin(AutoAnimate)

Alpine.start()

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
    wsHost: window.location.hostname,
    disableStats: true,
});
