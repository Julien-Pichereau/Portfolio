<template>

        <header class="header">      
            
            <nav id="nav">

                <a class="logo" href="#">
                <img class="logo__img" src="../assets/images/JP.png" alt="">
                </a>
                        
                <input type="checkbox" class="toggler" />

                <div class="hamburger">
                <div id="middleLineOfTheHamburger"></div>
                </div>
                
                <div class="menu">
                    <div id="burger__open">
                        <ul class="nav__ul">
                            <li class="ul__li">
                                <a class="li__a" href="#profil">Profil</a>
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
            
            <section class="presentation">
                <h1 class="presentation__name">Julien Pichereau</h1>
                <h2 class="presentation__jobTitle">DEVELOPPEUR WEB</h2>
                <h2 class="presentation__jobTitle">FULL STACK</h2>
                <p class="presentation__talentTags">Créatif &amp; Consciencieux</p>
            </section>
            
        </header>

</template>

<script>

    export default {
        
    }

</script>

<style lang="scss" scoped>

    // scoped permet limiter les effets du style à ce composant uniquement etde ne pas avoir de conflit avec les autres composants
    // => on le "bride" en le contextualisant à ce composant uniquement

</style>