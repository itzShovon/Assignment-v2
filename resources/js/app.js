import Vue from 'vue';
import App from './App.vue';
import router from './router';
import BootstrapVue from 'bootstrap-vue';
import axios from 'axios'
import VueAxios from 'vue-axios'
import Vuelidate from 'vuelidate'
// import { required, minLength } from 'vuelidate/lib/validators'

// axios.defaults.baseURL = process.env.MIX_VUE_APP_ENDPOINT
// console.log(process.env.MIX_APP_AXIOS_PATH)
// console.log(process.env.MIX_VUE_APP_ENDPOINT)
// axios.defaults.baseURL = process.env.MIX_AXIOS_APP_ENDPOINT
axios.defaults.baseURL = './'
// console.log(axios.defaults.baseURL)


Vue.prototype.axios = axios

// console.log(process.env.MIX_VUE_APP_ENDPOINT)

// import 'bootstrap/dist/css/bootstrap.css';
// import 'bootstrap';
// import 'jquery-slimscroll';
// import 'jquery';


Vue.use( Vuelidate, axios, BootstrapVue, VueAxios );

// new Vue({
//     ...App
// }).$mount('#app')

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
