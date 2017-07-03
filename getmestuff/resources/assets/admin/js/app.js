window.Vue = require('vue');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.events = new Vue();

window.flash = function (message, type = 'success') {
    window.events.$emit('flash', [message, type]);
};

Vue.component('my-table', require('./components/MyTable.vue'));
Vue.component('settings', require('./components/settings/Settings.vue'));
Vue.component('create', require('./components/forms/Create.vue'));
Vue.component('tabs', require('./components/Tabs.vue'));
Vue.component('tab', require('./components/Tab.vue'));

const app = new Vue({
    el: '#app'
});