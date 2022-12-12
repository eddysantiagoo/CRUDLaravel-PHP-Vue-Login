require('./bootstrap');

import {createApp} from 'vue'
import * as VueRouter from 'vue-router'

import HomeComponent from './components/HomeComponent.vue'
import CategoryComponent from './components/CategoryComponent.vue'
import PostComponent from './components/PostComponent.vue'

import LoaderComponent from './components/LoaderComponent.vue'

const routes = [
    {path: '/', component: HomeComponent},
    {path: '/categorias', component: CategoryComponent},
    {path: '/posts', component: PostComponent},
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/crud/public/'),
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",
})

const app = createApp({})

window.url = '/crud/public/'

var Emitter = require('tiny-emitter')
window.emitter = new Emitter()

app.component('loader-component', LoaderComponent)

app.use(router)

app.mount('#app')
