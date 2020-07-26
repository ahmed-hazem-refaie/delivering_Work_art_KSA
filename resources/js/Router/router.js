import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Home from '../components/Page/Home';
import Shop from '../components/Page/ShopArt';
import About from '../components/Page/AboutUs';
import Terms from '../components/Page/Terms';
import Privacy from '../components/Page/Privacy';
import Refund from '../components/Page/Refund';
import Payment from '../components/Page/Payment';
const routes = [
    { path: '/', component: Home,name:'home' },
    { path: '/shop', component: Shop , name:'shop' },
    { path: '/about', component: About },
    { path: '/terms', component: Terms },
    { path: '/privacy', component: Privacy },
    { path: '/refund', component: Refund },
    { path: '/payment', component:Payment}
]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
})


export default router;
