//Mode HTML5

// on importe les fonctions de vue router depuis la dépendance vue-router
import { createRouter, createWebHistory } from 'vue-router';

// on récupère les composants à utiliser avec notre router
import NotFound from '/views/NotFoundView.vue';
import Home from '/views/HomeView.vue';

// on définit des routes. C'est un array qui contient des objets sours la forme {path, component} (on ne choisit pes les noms de propriétés)
// chaque objet est une correspondance entre un chemin et un composant
const routes = [

    // on définit une route par défaut qui redirige vers la page d'accueil
    { path: '/', redirect: '/home', name: 'redirecthome'},
    { path: '/home', component: Home, name: 'home'},
    { path: '/:pathMatch(.*)*', component: NotFound, name: 'not-found'},
  ]   

// on instancie VueRouter avec la fonction createRouter
const router = createRouter({
    // on utilise le mode d'historique "HTML5" => urls classiques ex. /register
    history: createWebHistory(process.env.APP_URL),
    routes, // short for `routes: routes`
  })

// on exporte l'instance de VueRouter créée
export default router;  