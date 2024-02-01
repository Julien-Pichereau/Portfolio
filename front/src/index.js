// index.js
import { createApp } from 'vue';

import 'reset-css'; // CSS Reset pour ne pas avoir de différence entre les navigateurs et ne pas avoir la marge par défaut de body npm i -s reset-css

import App from '/App.vue';
import customRouter from '/router.js'; // on utilise le router défini dans router.js


const app = createApp(App);


app.use(customRouter); // avec app.use on rend le router accessible partout dans l'application

app.mount("#app")