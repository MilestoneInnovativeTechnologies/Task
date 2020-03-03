import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        tasks: [],
        resellers: {},
        image: null,
        ptsk: null,
        admin: false,
    },
    getters: {
        luTime({ tasks }){ return tasks.sort((n,c) => new Date(c.updated_at).getTime() - new Date(n.updated_at).getTime())[0].updated_at }
    }
});
