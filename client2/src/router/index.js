import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import createView from '../views/createView.vue'
import editView from '../views/editView.vue'
import detailView from '../views/detailView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/patients/:id',
      name: 'detail',
      component: detailView
    },
    {
      path: '/createPatient',
      name: 'create',
      component: createView
    },
    {
      path: '/edit/:id',
      name: 'edit',
      component: editView
    },
  ]
})

export default router
