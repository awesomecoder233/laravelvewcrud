function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}
function components (path) {
  return () => import(/* webpackChunkName: '' */ `~/components/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'welcome', component: page('welcome.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
  { path: '/loginwithgithub', name: 'login.github', component: page('auth/loginwithgithub.vue') },

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
