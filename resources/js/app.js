require('./bootstrap');

import { createApp } from 'vue'
import Accueil from './components/Accueil'
import Card_star from './components/Card_star'
import Card_star_edit from './components/Card_star_edit'

const app = createApp({})

app.component('accueil', Accueil)
app.component('card_star', Card_star)
app.component('card_star_edit', Card_star_edit)

app.mount('#app')
