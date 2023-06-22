import './bootstrap';
import '../sass/app.scss'
import Router from '@/router'
import store from '@/store'
import { createApp } from 'vue';
import App from './App.vue'
const app = createApp(App)
app.use(Router)
app.use(store)
app.mount('#app')
