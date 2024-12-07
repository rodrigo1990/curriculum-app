import { createMemoryHistory, createRouter } from 'vue-router'

import Content from './components/Content/Content.vue'

const routes = [
  { path: '/content/:id', component: Content },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router