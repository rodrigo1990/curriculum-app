import { createApp } from 'vue'
import { Row, Column, Hidden } from 'vue-grid-responsive';
import App from './App.vue'

createApp(App).mount('#app')
App.component('row', Row);
App.component('column', Column);
App.component('hidden', Hidden);