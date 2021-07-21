function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}
function components (path) {
  return () => import(/* webpackChunkName: '' */ `~/components/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'items', component: page('items.vue') },

  { path: '/checkadminpassword', name: 'login', component: page('auth/login.vue') },
  

  { path: '/home', name: 'home', component: page('home.vue') },
  { path: '/users', name: 'users', component: page('users.vue') },
  { path: '/items', name: 'items', component: page('items.vue') },
  { path: '/add', name: 'add', component: page('add.vue') },
  { path: '/update/:id', name: 'update', component: components('UpdateComponent.vue'), props: true },
  {
    path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ]
  },

  { path: '*', component: page('errors/404.vue') }
]
