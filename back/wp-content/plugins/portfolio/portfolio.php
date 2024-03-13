<?php
/**
 * Plugin Name: Portfolio
 * Description: Adds 'Portfolio' specific content types and views.
 * Version: 1.0
 * Author: Julien Pichereau
 * Author URI: https://julienpichereau.fr
 */

 namespace Portfolio;

 // on charge l'autoload généré via composer avec composer dump-autoload
require __DIR__ . '/vendor/autoload.php';

 // ce fichier est le point d'entrée de notre plugin. WP impose que son nom soit le même que le nom du dossier du plugin.
 // => C'est ici que nous ferons appel au reste du code de notre plugin.

 // on garde le chemin absolu de ce fichier pour le fournir aux activation et deactivation hooks.
define('PORTFOLIO_PLUGIN_FILE', __FILE__);

// on démarre le plugin
Plugin::run();

 