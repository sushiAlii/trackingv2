
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
import router from './router'
import Vuetify from "../plugins/vuetify"
import chartist from "../plugins/chartist"
import Vue from 'vue';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('navbar-component', require('./components/Navbar.vue').default);
Vue.component('welcome-component', require('./components/Welcome.vue').default);

//base components

Vue.component('base-material-card', require('./components/base/MaterialCard.vue').default);
Vue.component('base-material-chart-card', require('./components/base/MaterialChartCard.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);

const app = new Vue({
    vuetify: Vuetify,
    chartist: chartist,
    el: '#app',
    router
});



