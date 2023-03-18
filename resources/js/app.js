require('./bootstrap');

import { createApp } from 'vue'
import Accueil from './components/Accueil'

const app = createApp({})

app.component('accueil', Accueil)

app.mount('#app')
