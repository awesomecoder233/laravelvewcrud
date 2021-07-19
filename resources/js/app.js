import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'vuejs-datatable/dist/themes/bootstrap-4.esm'
import { VuejsDatatableFactory } from 'vuejs-datatable'
import '~/plugins'
import '~/components'
import VueGoodTablePlugin from 'vue-good-table';
import 'vue-good-table/dist/vue-good-table.css'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.config.productionTip = false
Vue.use(VuejsDatatableFactory)
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use(VueGoodTablePlugin);
Vue.component('datatable-component', require('./components/DatatableComponent.vue').default)
Vue.component('itemtable-component', require('./components/ItemtableComponent.vue').default)
Vue.component('add-component', require('./components/AddComponent.vue').default)
Vue.component('update-component', require('./components/UpdateComponent.vue').default)


/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
