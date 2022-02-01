/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//Importar vue
window.Vue = require('vue');  

//Impotar Bootstrap Vue
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue' 

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
  el: '#app',
  methods: {
    logout() {
      document.getElementById('logout-form').submit();
    }
  }
});
