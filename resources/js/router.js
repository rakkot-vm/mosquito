import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'

import Payment from './pages/Payment.vue'
import Registration from './pages/Registration.vue'
import ErrorPage from './pages/404.vue'

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
      component: Payment
    },
      {
      path: '/registration',
      name: 'registration',
      component: Registration
    },
    {
      path: '/404',
      name: '404',
      component: ErrorPage
    }
  ]
})
