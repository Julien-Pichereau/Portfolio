<?php

namespace Portfolio\PostType;

// cette classe récupère toutes les méthodes et propriétés (public et protected) de la classe parente
class AchievementPostType extends PostType {

    // ici, dans la classe fille, on définit les données qui sont spécifiques à ce CPT
    const POST_TYPE_KEY = 'achievements';
    const POST_TYPE_LABEL = 'Achievements';
    const POST_TYPE_SLUG = 'réalisations';

    const CAPABILITIES = [
        // [cap par défaut, existante dans WP] => [cap custom qui correpond à la même action mais pour ce CPT distinct]
        'edit_posts' => 'edit_achievements', // on décide du nom de la capability à associer au comportement par défaut "edit_posts"
        'publish_posts' => 'publish_achievements',
        'edit_post' => 'edit_achievement',
        'read_post' => 'read_achievement',
        'delete_post' => 'delete_achievement',
        'edit_others_posts' => 'edit_others_achievements',
        'delete_others_posts' =>  'delete_others_achievements', // la notion "others" s'appuie sur l'auteur du post, il faut donc que ce CPT déclare le support de la feature "author"
        'delete_published_posts' => 'delete_published_achievements',
    ];

    // la liste des custom caps pour ce CPT que je veux associer à l'administrateur
    const DEFAULT_ROLES_CAPS = [
        'administrator' => [
            'edit_achievements' => true, 
            'publish_achievements' => true,
            'edit_achievement' => true,
            'read_achievement' => true,
            'delete_achievement' => true,
            'edit_others_achievements' => true,
            'delete_others_achievements' => true,
        ],
        'contributor' => [
            'edit_achievements' => true, 
            'publish_achievements' => false,
            'edit_achievement' => true,
            'read_achievement' => true,
            'delete_achievement' => true,
            'edit_others_achievements' => false,
            'delete_others_achievements' => false,
        ]
    ];
}