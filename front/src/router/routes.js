
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: '/plats', component: () => import('pages/PagePlats.vue') },
      { path: '/calendrier', component: () => import('pages/PageCalendrier.vue') },
      { path: '/reglages', component: () => import('pages/PageReglages.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
