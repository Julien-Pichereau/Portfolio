<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <section id="profil" class="profil">
        <h1 class="profil__title">Profil</h1>
        <div class="profil__tabs">
            <div class="tabs__text">
                <span>
                    <h1>Salut les p'tits z'amis du code !</h1>
                    <p>Moi, c'est Julien. Un developpeur web fullstack fun et bigarré, frais et bien formé en quête de nouvelles aventures dans le monde merveilleux du dev.</p>
                    <p>Que vous dire sur mes compétences... J'en ai trop ! Plus sérieusement, je vous parlais de quête précédemment. Cette dernière passe par la découverte des nouvelles technologies et leur mise en partique, la volonté permanente d'améliorer l'écriture de mon code à travers la qualité, l'accessibilité et l'évolutivité. </p>
                </span>
            </div>
            <div class="tabs__canvas">
                <div  id = "myCanvasContainer"> 
                    <canvas width ="1200" height ="1200" id="myCanvas"> 
                        <p> Tout ce qui s'y trouve sera remplacé sur les navigateurs prenant en charge l'élément canvas </p>
                    </canvas> 
                </div> 
                <div id="tags"> 
                    <ul > 
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/devicon/devicon-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/debian/debian-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/eslint/eslint-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/markdown/markdown-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ssh/ssh-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" />
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0)">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/yarn/yarn-original.svg" />
                            </a>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </section>

</template>

<script>
    import "/assets/js/tagcanvas.js";

    export default {
        
    }

</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement etde ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>