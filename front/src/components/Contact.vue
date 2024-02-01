<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <section id="contact" class="contact">
        <div v-if="showContact">
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
                <button class="details__link button" href="mailto::wavy_dash:@hotmail.fr" @click="showContactForm = true, showContact = false">
                    <img class="link__logo" src="../assets/images/1904660-email-envelope-letter-mail-message-post-send-white_122510.png" alt="mail" placeholder="Open popup">
                </button>
            </div>
        </div>

         
        <div v-if="showContactForm" @submit.prevent="submitForm" class="contactForm">

                <div id="div__crossClose">
                    <button @click="showContactForm = false, showContact = true" id="button__crossClose" class="button">X</button>
                </div>
                <h1 class="contactForm__title">Formulaire de contact</h1>
                <form class="form" method="POST">
                    <div class="form__fields">
                        <label for="name">Nom*</label>
                        <input type="text" id="name" class="form__fields__container" name="name" placeholder="Engus McGuiver" required>
                    </div>

                    <div class="form__fields">
                        <label for="email">Email*</label>
                        <input type="email" id="email" class="form__fields__container" name="email" placeholder="mc.guiver@phxfdation.com" required>
                    </div>

                    <div class="form__fields">
                        <label for="telephone">Téléphone</label>
                        <input type="text" id="telephone" class="form__fields__container" name="telephone" placeholder="+33 6 5X 0X 4Y 84">
                    </div>

                    <div class="form__fields">
                        <label for="company">Entreprise</label>
                        <input type="text" id="company" class="form__fields__container" name="compagny" placeholder="Fondation Phoenyx">
                    </div>

                    <div class="form__fields">
                        <label for="message">Message*</label>
                        <textarea id="message" class="form__fields__container" name="message" placeholder="Hy Pet, Call me back. Engus" required></textarea>
                    </div>
                    <div class="form__mention">
                        <label id="label">* Champs obligatoires</label>
                    </div>
                    <div id="form__button">
                        <button class="form__button button" type="submit">Envoyer</button>
                    </div>
                </form>

                
                
            
                
                              

        </div>

        <div v-if="showNotification" id="notification">
            <p>Message envoyé !</p>
        </div>
        
    </section>

</template>

<script setup>
    import { ref } from 'vue';

    const showContact = ref(true);
    const showContactForm = ref(false);
    const showNotification = ref(false);

    const submitForm = () => {
        showContactForm.value = false;
        showContact.value = false;
        showNotification.value = true;
        setTimeout(() => {
            showNotification.value = false;
            showContact.value = true;
            
        }, 3000);
    }

    
</script>

<style lang="scss" scoped>

// scoped permet limiter les effets du style à ce composant uniquement et de ne pas avoir de conflit avec les autres composants
// => on le "bride" en le contextualisant à ce composant uniquement
// => on s'assure donc que notre style ne cassera pas l'affichage d'un autre composant par effet de bord
// => pour avoir les effets du style sur tout le site, on enlève le mot clé "scoped"

</style>