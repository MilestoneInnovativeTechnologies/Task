window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap');
window.Popper = require('popper.js').default;

window.$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
$(function(){ $('#sidebarCollapse').on('click', function () { $('#sidebar').toggleClass('active'); }); });

import Vue from 'vue';

import { store } from './store';
import { router } from './router';

Vue.filter('date', function (value) {
    if (!value) return ''; value = value.toString().replace(/-/g,'/');
    let date = new Date(value), time = date.toTimeString().split(":",2).join(":");
    let dParts = date.toDateString().split(" "), dStr = [].join(" ");
    return [dParts[0]+',', dParts[2],dParts[1],dParts[3].substr(2),time].join(" ");
});

new Vue({
    router, store,
    el: '#app',
    components: { SideBarItem:require("../components/SideBarItem").default },
    computed: {
        reseller(){ return this.$route.params.id; },
        resellerName(){ return ADMIN ? this.$store.state.resellers[this.reseller] : NAME },
        ptsk(){ return this.$store.state.ptsk },
        h5(){ return this.$route.name !== 'index' },
        progress: {
            get(){ return (this.ptsk && this.ptsk.progress === 'Completed') ? 'Completed' : 'New'; },
            set(v){ return; }
        }
    },
    methods: {
        manageTasks(r){
            let vm = this;
            vm.$store.state.tasks = r;
            if(Array.isArray(r)) r.map(({ partner:{ id,name } }) => vm.$set(vm.$store.state.resellers,id,name))
        }
    },
    created(){
        if(!this.$store.state.tasks || !this.$store.state.tasks.length) $.post('/eui/tasks',this.manageTasks);
        this.$store.state.admin = !!ADMIN;
    },
});