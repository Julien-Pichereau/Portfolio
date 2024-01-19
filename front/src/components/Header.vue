<template>

        <header class="header">      
            
            <nav id="nav">

                <router-link  tag="a" class="logo" to="/">
                <img class="logo__img" src="../assets/images/JP.png" alt="">
                </router-link>
                        
                <input type="checkbox" class="toggler"/>

                <div class="hamburger">
                <div id="middleLineOfTheHamburger"></div>
                </div>
                
                <div class="menu">
                    <div id="burger__open">
                        <ul class="nav__ul">
                            <li class="ul__li">
                                <router-link tag="a" class="li__a" to="/présentation">Présentation</router-link>
                            </li>
                            <li class="ul__li">
                                <router-link tag="a" class="li__a" to="/profil">Profil</router-link>
                            </li>
                            <li class="ul__li">
                                <router-link tag="a" class="li__a" to="/compétences">Compétences</router-link>
                            </li>
                            <li class="ul__li">
                                <router-link tag="a" class="li__a" to="/réalisations">Réalisations</router-link>
                            </li>
                            <li class="ul__li">
                                <router-link tag="a" class="li__a" to="/contact">Contact</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            
            </nav>

            
        </header>

</template>

<script>

    export default {
        
    }

</script>

<style lang="scss" scoped>

    // scoped permet limiter les effets du style à ce composant uniquement etde ne pas avoir de conflit avec les autres composants
    // => on le "bride" en le contextualisant à ce composant uniquement
    // => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord

</style>