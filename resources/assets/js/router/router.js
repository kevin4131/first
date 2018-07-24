import Vue       from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            name: "select1",
            path: '/firstSelect',
            component: resolve => void(require(['../components/HeroSelectComponent.vue'], resolve))
        },
        {
            name: "list",
            path: '/tableList',
            component: resolve => void(require(['../components/ListComponent.vue'], resolve))
        },
        {
            name: "add",
            path: '/import',
            component: resolve => void(require(['../components/ImportComponent.vue'], resolve))
        },

    ]
})