<template>
    <div> <!-- un seul élément par template (div, section, etc.) donc ici on met une div pour englober le header, le footer, etc... -->
        <Header/>
        <Home/>
        <Footer/>
    </div>
</template>

<script>
// import des composants dans une variable
    import Header from "/components/Header.vue";
    import Home from "/components/Home.vue";
    import Footer from "/components/Footer.vue";

// export du composant
    export default {

        data() {

            return {
            };

        },
// déclaration des composants externes qui seront utilisés dans le template (composant courant)
        components: {

            Header,
            Home,
            Footer,

        },
        
    };

</script>

<style lang="scss">

    @import "./assets/scss/main.scss";

</style>