import Vue from "vue";
import Router from "vue-router";
import Home from "./components/pages/Home.vue";
import Login from "./components/pages/Auth.vue";
import Error404 from "./components/pages/Auth.vue";

Vue.use(Router);

const routes = [
    {
        path: '*',
        component: Error404
    },
    {
        path: "/home",
        name: "home",
        component: Home
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('./components/pages/Auth.vue')
    }
];

const router = new Router({
    // base: '/Dev/assignment_v2/public',
    base: process.env.MIX_VUE_APP_ENDPOINT,
    mode: 'history',
    routes: routes,
    linkActiveClass: "active"
});

router.beforeResolve((to, from, next) => {
    if (to.name) {
        NProgress.start()
    }
    next();
});

router.afterEach((to, from) => {
    NProgress.done()
});

export default router;
