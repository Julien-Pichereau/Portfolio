<template>
    
    <!-- un seul élément par template (div, section, etc.). Par exemple, ici on met une div pour englober le reste du code ùais on pet avoir un header seulement, un footer, etc... -->
    <body>
        <Header/>
        <main class="main">
            <Presentation/>
            <Profile/>
            <Skills/>
            <Achievements/>
            <Contact/>
        </main>
        <Footer/>
    </body>


</template>

<script setup>
    import Header from "/components/Header.vue";
    import Presentation from "/components/Presentation.vue";
    import Profile from "/components/Profile.vue";
    import Skills from "/components/Skills.vue";
    import Achievements from "/components/Achievements.vue";
    import Contact from '/components/Contact.vue';
    import Footer from "/components/Footer.vue";

</script>