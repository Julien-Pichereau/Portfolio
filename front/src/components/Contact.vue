<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <section id="contact" class="contact">
        <h1 class="contact__title">Contact</h1>
        <div class="contact__details">
            <a class="details__link" href="https://github.com/Julien-Pichereau">
                <img class="link__logo" src="../assets/images/github-mark-white.png" alt="github">
            </a>
            <a class="details__link" href="https://www.linkedin.com/in/julienpichereau/">
                <img class="link__logo" src="../assets/images/Linkedin-Logo-Bug.png" alt="linkedin">
            </a>
            <a class="details__link" href="https://www.instagram.com/julien_pichereau/">
                <img class="link__logo" src="../assets/images/Instagram_Glyph_Gradient.png" alt="github">
            </a>
            <a class="details__link" href="https://twitter.com/PichereauJulien">
                <img class="link__logo" src="../assets/images/logo-twitter-white.png" alt="twitter">
            </a>
            <a class="details__link" href="mailto::wavy_dash:@hotmail.fr">
                <img class="link__logo" src="../assets/images/1904660-email-envelope-letter-mail-message-post-send-white_122510.png" alt="mail">
            </a>
        </div>
    </section>

</template>

<script>

    export default {
        
    }
    
</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement etde ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>