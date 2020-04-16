require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";

import App from "./App.vue";
Vue.use(VueAxios, axios);

import IndexComponent from "./components/page/Index.vue";

const routes = [
    {
        name: "posts",
        path: "/",
        component: IndexComponent,
    },
];

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");
