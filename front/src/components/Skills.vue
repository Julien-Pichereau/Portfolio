<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <section id="skills" class="skills">
        <h1 class="skills__title">Compétences</h1>
        <div class="star-warsEffect">
            <div class="fade"></div>         
            <div class="star-wars">
                <div class="crawl">

                    <p class="subtitle">Compétences Techniques</p>
                    
                    <p>HTML 5</p>
                    <p>CSS 3</p>
                    <p>Javascript</p>
                    <p>PHP</p>
                    <p>MySQL</p>
                    <p>Github</p>
                    <p>Git</p>
                    <p>Wordpress</p>
                    <p>Vue.js</p>
                
                    <p class="subtitle">Soft Skills</p>

                    <p>Créatif</p>
                    <p>Organisé</p>
                    <p>Calme</p>
                    <p>Autonome</p>
                    <p>Consciencieux</p>
                    <p>Adaptable</p>
                </div>
                
            </div>
        </div>          
    </section>

</template>

<script setup>


</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement et de ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>