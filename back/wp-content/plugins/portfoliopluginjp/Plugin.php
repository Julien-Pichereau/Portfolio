<?php

namespace Portfolio;

use Portfolio\Api\Achievement;
use Portfolio\Classes\Database;
use Portfolio\PostType\AchievementPostType;
use Portfolio\Taxonomy\TechnologiesTaxonomy;

class Plugin {

    static public function run()
    {
        self::preInit();

        // on accroche une méthode pour gérer l'init
        add_action('init', [self::class, 'onInit']);
        
        // à l'init de l'api REST
        add_action('rest_api_init', [self::class, 'onRestInit']);

        // On accroche un hook à l'activation du plugin
        register_activation_hook(
            PORTFOLIO_PLUGIN_FILE,
            [self::class, 'onPluginActivation']
        );

        // Idem à la désactivation du plugin
        register_activation_hook(
            PORTFOLIO_PLUGIN_FILE,
            [self::class, 'onPluginDeactivation']
        );
    }

    static public function PreInit()
    {
        // on lance la customization de l'API pour la partie Achievement
        Achievement::run();
    }
    

    static public function onInit()
    {
        // lancer la déclaration des CPT
        AchievementPostType::register();

        // lancer la déclaration des Taxonomies
        TechnologiesTaxonomy::register();
    }

        /**
     * Regroups all the actions to perform on WordPress rest_api_init hook
     *
     * @return void
     */
    static public function onRestInit()
    {

        remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
        add_filter('rest_pre_serve_request', [self::class, 'setupCors']);

        // ajout du champ "metadata" qui contient toutes les méta pour un post
        register_rest_field(
            'post',
            'metadata',
            [
                'get_callback' => function ($data) {
                    return get_post_meta($data['id'], '', '');
                }
            ]
        );
    }

        /**
     * setupCors()
     * filters the Cross Origin Policy
     *
     * @return void
     */
    static public function setupCors()
    {
        header('Access-Control-Allow-Origin: *');
    }

    /** 
     * Actions to perfom on plugin activation
     * 
     * @return void
     */
    static public function onPluginActivation()
    {
        
        // Associer les caps customs de nos CPT à l'admin
        AchievementPostType::addCaps();
        TechnologiesTaxonomy::addCaps();
    }

    /**
     * Actions to perform on plugin deactivation
     *
     * @return void
     */
    static public function onPluginDeactivation()
    {

        // Dissocier les caps custom de nos CPT et CT de l'admin
        AchievementPostType::removeCaps();
        TechnologiesTaxonomy::removeCaps();


        // on déclenche la création de la table custom tutorial avec FK post_id
        Database::generateTables();
    }
}