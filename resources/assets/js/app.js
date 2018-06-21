
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('prop-component', require('./components/PropComponent.vue'));
Vue.component('ajax-component', require('./components/AjaxComponent.vue'));
Vue.component('line-chart-component', require('./components/LineChartComponent.vue'));
Vue.component('pie-chart-component', require('./components/PieChartComponent.vue'));
Vue.component('random-chart-component', require('./components/RandomChartComponent.vue'));
Vue.component('realtime-chart-component', require('./components/RealtimeChartComponent.vue'));
Vue.component('realtime-chat-component', require('./components/RealtimeChatComponent.vue'));

const app = new Vue({
    el: '#app'
});
