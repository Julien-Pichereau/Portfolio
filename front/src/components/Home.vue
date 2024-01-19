<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <main class="main">
        <Presentation/>
        <Profil/>
        <Skills/>
        <Achievements/>
        <contact/>
    </main>


</template>

<script>
    import Presentation from "/components/Presentation.vue";
    import Profil from "/components/Profil.vue";
    import Skills from "/components/Skills.vue";
    import Achievements from "/components/Achievements.vue";
    import Contact from '/components/Contact.vue';

    export default {
        components: {
            Presentation,
            Profil,
            Skills,
            Achievements,
            Contact,
        }
    };
</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement etde ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>