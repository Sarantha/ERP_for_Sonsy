
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./edit');

//importing vue router
window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform'
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.Toast = Toast;
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

window.Fire = new Vue();
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/dashboard', component:  require('./components/dashboard.vue').default },
    { path: '/users', component:  require('./components/users.vue').default },
    { path: '/Stock', component:  require('./components/Stock.vue').default },
    { path: '/addOrder', component:  require('./components/addorder.vue').default },
    { path: '/addStock', component:  require('./components/addStock.vue').default },
    { path: '/addPeople', component:  require('./components/addPeople.vue').default },
    { path: '/customers', component:  require('./components/customers.vue').default }
  ]

const router = new VueRouter({
    mode:'history',
    routes
})
window.Fire = new Vue();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data:{
      search: ''
    },
    methods:{
      searchit(){
        Fire.$emit('searching');
      }
    }
});
