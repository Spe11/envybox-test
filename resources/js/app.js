require('./bootstrap');
import Form from './components/Form.vue';

window.Vue = require('vue');

Vue.component('pageForm', Form);

const app = new Vue({
    el: '#app',
});