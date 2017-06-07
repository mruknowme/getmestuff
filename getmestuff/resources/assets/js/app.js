
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 window.Vue = require('vue');

require('./bootstrap');
require('parsleyjs');
require('./validation');
require('owl.carousel');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('tabs', require('./components/Tabs.vue'));
Vue.component('tab', require('./components/Tab.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('wallet', require('./components/user/Wallet.vue'));
Vue.component('login', require('./components/auth/Login.vue'));
Vue.component('register', require('./components/auth/Register.vue'));
Vue.component('website-header', require('./components/WebsiteHeader.vue'));
Vue.component('user-info', require('./components/user/Userinfo.vue'));

const app = new Vue({
    el: '#app'
});
