<template>
    
    <body class="body__404">
        <main class="main__404">
            
            <h1 class="h1__404">
                4
                <router-link tag="a" to="/home" class="logo__404">
                  <img class="img__404Logo" src="../assets/images/JP.png" alt="">
                </router-link>
                <!--<a class="logo__404" href="#">
                    <img class="img__404Logo" src="../assets/images/JP.png" alt="">
                </a>-->
                4
            </h1>
            
            <p class="p__404">page not found</p>
        </main>
    </body>

</template>

<script setup>


</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement et de ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

//@import "../assets/scss/components/notFound404.scss";

</style>