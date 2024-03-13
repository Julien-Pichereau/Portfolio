<?php

namespace Portfolio\Classes;

class Database {

    /**
     * generateTables
     *
     * Creates the custom mysql tables for portfolio_plugin
     * 
     * @return void
     */
    static public function generateTables()
    {
        // on récupère l'objet $wpdb => une globale déclarée par WP
        global $wpdb;

        // définir le nom de la table custom, on n'oublie pas d'utiliser le préfixe défini dans wp_config pour dynamiser le nom de la table
        $tableName = $wpdb->prefix . 'news';
        $tablePost = $wpdb->prefix . 'posts';

        // on récupère le jeu de caractère géré par la base
        $charsetCollate = $wpdb->get_charset_collate();

        // écrire la requête à exécuter
        // on crée une table (si elle n'existe pas déjà => IF NOT EXSITS), avec les champs suivants :
        // developer_id => post de cpt developer
        // technology_id => term de la taxo technology
        // grade => note (niveau de maîtrise)
        $sql = "
            CREATE TABLE IF NOT EXISTS `{$tableName}` (
                `news_id` BIGINT(20) UNSIGNED PRIMARY KEY NOT NULL  AUTO_INCREMENT,
                `rating` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
                `post_id` BIGINT(20) UNSIGNED NOT NULL ,
                FOREIGN KEY (`post_id`) REFERENCES " . $tablePost . " (`id`)
            ) {$charsetCollate};
        ";

        // on utlise l'objet wpdb pour faire la requête
        $wpdb->query($sql);
    }
}