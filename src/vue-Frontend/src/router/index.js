import { createRouter, createWebHistory } from 'vue-router'
import Index from "@/views/Index.vue";
import Review from "@/views/Review.vue";
import Registration from "@/views/Registration.vue";
import Login from "@/views/Login.vue";
import Game from "@/views/Game.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'index',
      component: Index
    },
    {
      path: '/review',
      name: 'review',
      component: Review
    },
    {
      path: '/registration',
      name: 'registration',
      component: Registration
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/game/index',
      name: 'game',
      component: Game
    },
  ]
})

export default router
