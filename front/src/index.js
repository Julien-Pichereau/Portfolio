import { createApp } from "vue";
import 'reset-css'; // CSS Reset pour ne pas avoir de différence entre les navigateurs et ne pas avoir la marge par défaut de body npm i -s reset-css
import App from "./App.vue";


const app = createApp(App);
app.mount("#app")