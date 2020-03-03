import Vue from 'vue';
import VueRouter from 'vue-router'

const routes = [
    { path: '/eui', component: require('./../components/IndexRouteComponent').default, name:'index' },
    { path: '/eui/Compliance', component: require('./../components/ComplianceRouteComponent').default, name:'Compliance' },
    { path: '/eui/reseller/:id', component: require('./../components/ResellerTaskRouteComponent').default, name:'task' },
];

Vue.use(VueRouter);

export const router = new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'has-active'
});