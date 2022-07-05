require('./bootstrap');

import vue, { h } from 'vue'
window.Vue = vue

import App from './components/App.vue'

// importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

// importamos y configuramos el vue-router
import VueRouter from 'vue-router'
import { routes } from './routes'
import Vue from 'vue'
Vue.use(VueRouter)
Vue.use(VueAxios, axios)
// creamos instancia de vueRouters
const router = new VueRouter({
    mode: 'history',
    routes: routes
})

// creamos instancia de Vue
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
})