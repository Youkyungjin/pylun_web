
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.Grid = require('tui-grid'); /* CommonJS in Node.js */

// console.log(Grid);

// console.log('test');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// var tuieditor = require('tui-editor');





Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('tui-grid',require('tui-grid'));
Vue.component('tui-editor',require('tui-editor'));
Vue.component('tui-grid', require('tui-grid'));

// Vue.use (tuieditor);
const app = new Vue({
    el: '#page-wrapper'
});