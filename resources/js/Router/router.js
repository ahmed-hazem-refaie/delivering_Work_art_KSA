import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Home from '../components/Page/Home';
import Shop from '../components/Page/ShopArt';
import About from '../components/Page/AboutUs';
const routes = [
     { path: '/', component: Home },
    { path: '/shop', component: Shop },
    { path: '/about', component: About },
    // { path: '/forum', component: Forum , name:'forum' },
]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
})


export default router;