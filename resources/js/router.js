import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/payment',
      name: 'payment',
      component: () => import( './pages/Payment.vue')
    },
    {
      path: '/404',
      name: '404',
      component: () => import( './pages/404.vue')
    }
  ]
})
