import Vue from 'vue';
import VueRouter from 'vue-router';
import { BootstrapVue } from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.use(BootstrapVue);
Vue.use(VueRouter);

import App from './views/App';
import Home from './views/Home';
import Login from './views/Login';
import Products from './views/Products';
import Cart from './views/Cart';

const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/',
        name: 'home',
        component: Home
    }, {
        path: '/login',
        name: 'login',
        component: Login,
    },{
        path: '/products',
        name: 'products',
        component: Products,
    },
    {
        path: '/cart',
        name: 'cart',
        component: Cart,
    }],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
