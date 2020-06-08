/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';

import Gate from "./Gate";
Vue.prototype.$gate = new Gate(window.user);


window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component('b-form-datepicker', BFormDatepicker)

import VueRouter from 'vue-router';
import Dashboard from './components/Dashboard.vue';
import Profile from './components/Profile.vue';
import Ledger_user from './components/Ledger_user.vue';
import Ledger_admin from './components/Ledger_admin.vue';
import { BFormDatepicker } from 'bootstrap-vue';
import moment from 'moment'
  
Vue.config.productionTip = false
Vue.filter('formatDate', function(value) {
  if (value) {
    return moment(String(value)).format('MMMM DD, yyyy')
  }
});

Vue.use(VueRouter);

import Swal from 'sweetalert2';

// CommonJS
window.Swal = require('sweetalert2');

// window.toast = toast;

const routes = [
  { path: '/dashboard', component: Dashboard } ,
  { path: '/profile', component: Profile } , 
  { path: '/ledger_user', component: Ledger_user } ,
  { path: '/ledger_admin', component: Ledger_admin }

 
];

const router = new VueRouter({
  mode: 'history',
  routes // short for `routes: routes`
});

import VueProgressBar from 'vue-progressbar';

const options = {
  color: '#bffaf3',
  failedColor: '#874b4b',
  thickness: '5px',
  transition: {
    speed: '0.2s',
    opacity: '0.6s',
    termination: 300
  },
  autoRevert: true,
  location: 'left',
  inverse: false
};

Vue.use(VueProgressBar, options);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
