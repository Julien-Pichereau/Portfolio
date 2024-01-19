//Mode HTML5

// on importe les fonctions de vue router depuis la dépendance vue-router
import { createRouter, createWebHistory } from 'vue-router';

// on récupère les composants à utiliser avec notre router
import NotFoundView from '/views/NotFoundView.vue';
import Presentation from '/views/PresentationView.vue';
import AchievementsView from '/views/AchievementsView.vue';
import ContactView from '/views/ContactView.vue';
import ProfilView from '/views/ProfilView.vue';
import SkillsView from '/views/SkillsView.vue';

// on définit des routes. C'est un array qui contient des objets sours la forme {path, component} (on ne choisit pes les noms de propriétés)
// chaque objet est une correspondance entre un chemin et un composant
const routes = [

    // on définit une route par défaut qui redirige vers la page d'accueil
    { path: '/', redirect: '/home', name: "home"},
    { path: '/présentation', component: Presentation, name: "presentation"},
    { path: '/réalisations', component: AchievementsView, name: "achievements"},
    { path: '/contact', component: ContactView, name: "contact"},
    { path: '/profil', component: ProfilView, name: "profil"},
    { path: '/compétences', component: SkillsView, name: "skills"},
    { path: '/:pathMatch(.*)*', component: NotFoundView, name: 'not-found'},
  ]   

// on instancie VueRouter avec la fonction createRouter
const router = createRouter({
    // on utilise le mode d'historique "HTML5" => urls classiques ex. /register
    history: createWebHistory(process.env.APP_URL),
    routes, // short for `routes: routes`
  })

// on exporte l'instance de VueRouter créée
export default router;  