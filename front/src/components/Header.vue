<template>

        <header class="header">      
            
            <nav id="nav">

                <router-link tag="a" to="/" class="logo">
                  <img class="logo__img" src="../assets/images/JP.png" alt="">
                </router-link>
                <!--<a class="logo" href="#">
                  <img class="logo__img" src="../assets/images/JP.png" alt="">
                </a>-->
                         
                <input type="checkbox" class="toggler"/>

                <div class="hamburger">
                  <div id="middleLineOfTheHamburger"></div>
                </div>
                
                <div class="menu">
                    <div id="burger__open">
                        <ul class="nav__ul">
                            <li class="ul__li">
                                <a class="li__a" href="#">Présentation</a>
                            </li>
                            <li class="ul__li">
                                <a class="li__a" href="#profile">Profil</a>
                            </li>
                            <li class="ul__li">
                                <a class="li__a" href="#skills">Compétences</a>
                            </li>
                            <li class="ul__li">
                                <a class="li__a" href="#achievements">Réalisations</a>
                            </li>
                            <li class="ul__li">
                                <a class="li__a" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            
            </nav>
            
        </header>

</template>

<script setup>


</script>

<style lang="scss" scoped>

    // scoped permet limiter les effets du style à ce composant uniquement et de ne pas avoir de conflit avec les autres composants
    // => on le "bride" en le contextualisant à ce composant uniquement
    // => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord

</style>