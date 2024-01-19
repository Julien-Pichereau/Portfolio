<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <section id="achievements" class="achievements">

        <h1 class="achievements__title">Mes Réalisations</h1>

        <div class="achievements__articles">

            <article class="article profile-card">
                <header class="header__achievements">
                    <img onclick="openPopup" class="img btnPopup" src="../assets/images/FemmeSavantes.png">

                    <h1 class="h1__achievements">FemmeSavantes</h1>

                    <div class="article__tools">
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" />
                        <img class="tools__logo" src="../assets/images/logo_divi.png">
                    </div>
                </header>

                <div class="profile-bio">
                    <a class="a__achievements" href="https://femmesavantes.com/" target="blank">On va voir ?</a>
                    <p class="p__achievements">Site de la compagnie FemmeSavantes réalisé sur une base Wordpress avec le thème Divi. Ce site est ma première expérience de conception d'un site. Divi permet la construction de la partie front-end de sites internet en no-code.</p>
                </div>
            </article>

            <article class="article profile-card">
                <header class="header__achievements">
                    <img onclick="openPopup" class="img btnPopup" src="../assets/images/Bricol__Help.png">

                    <h1 class="h1__achievements">Bricol'Help</h1>

                    <div class="article__tools">
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"/>
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" />
                    </div>
                </header>

                <div class="article profile-bio">
                    <a class="a__achievements" href="https://www.youtube.com/live/api6Qm4WWSM?feature=shared&t=1980" target="blank">On va voir ?</a>
                    <p class="p__achievements">Mon projet de fin d’études lors ma formation chez O'clock. Durant 4 semaine intensives, notre équipe de quatre développeurs a pu réaliser ce site communautaire d’aide à la réalisation de travaux de bricolage. Il est construit sur la base de Wordpress en headless pour la partie back-end et Vue.js pour la partie front-end.</p>
                </div>
            </article>

            <article class="article profile-card">
                <header class="header__achievements">
                    <img onclick="openPopup" class="img btnPopup" src="../assets/images/portfolio.png">

                    <h1 class="h1__achievements">Portfolio</h1>

                    <div class="article__tools">
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"/>
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/devicon/devicon-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" />
                        <img class="tools__logo" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" />
                    </div>
                </header>

                <div class="profile-bio">
                    <a class="a__achievements" href="#" target="blank">On va voir ?</a>
                    <p class="p__achievements">Ben... C'est mon portfolio quoi ! C'est mon troisième projet après celui de la fin de ma formation chez O'clock : Bricol'Help. Il est construit sur la base de Wordpress en headless pour la partie back-end et Vue.js pour la partie front-end.</p>
                </div>
            </article>

            <article class="article profile-card">
                <header class="header__achievements">
                    <img onclick="openPopup" class="img btnPopup" src="../assets/images/vue-mysterieuse-boite-carton.jpg">

                    <h1 class="h1__achievements">?</h1>

                    <div class="article__tools">
                        <p>?</p>
                        <p>?</p>
                    </div>
                </header>

                <div class="profile-bio">
                    <a class="a__achievements" shref="#" target="blank">Mais où peut-on voir se projet fabuleux ?</a>
                    <p class="p__achievements">Et bien... Venez échanger avec moi ! Nous pourrons construire ensemble un projet de site qui ne manquera pas de.... Bon j'ai pas les mots là tout de suite là maintenant mais c'est sûre il va... Bref avec un peu d'humour on peut tout faire quoi ! &#129304;</p>
                </div>
            </article>
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