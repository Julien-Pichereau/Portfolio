<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    
    <Section class="presentation">
        <h1 class="presentation__title">Présentation</h1>
        <div class="presentation__box">
            <h1 class="presentation__name">Julien Pichereau</h1>
            <br>
            <h2 class="presentation__jobTitle">DEVELOPPEUR WEB</h2>
            <br>
            <p class="presentation__talentTags">Créatif &amp; Consciencieux</p>
        </div>
    </Section>


</template>

<script setup>

    
</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement et de ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>