import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default-dark.css' 

Vue.use(VueResource)
Vue.use(VueMaterial)

Vue.http.options.root = 'http://localhost/wordpress-rest-api/admin/wp-json/'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
