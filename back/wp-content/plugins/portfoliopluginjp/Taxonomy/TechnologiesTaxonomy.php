<?php

namespace Portfolio\Taxonomy;

use Portfolio\PostType\AchievementPostType;

class TechnologiesTaxonomy extends Taxonomy {

    const TAXONOMY_KEY = 'technologies';
    const TAXONOMY_NAME = 'Technologies';
    const POST_TYPE_KEY = AchievementPostType::POST_TYPE_KEY;

     const CAPABILITIES =  [
        'manage_terms' => 'manage_technologies',
        'edit_terms' => 'edit_technologies',
        'delete_terms' => 'delete_technologies',
        'assign_terms' => 'assign_technologies'
    ];

    const DEFAULT_ROLES_CAPS =  [
        'administrator' => [
            'manage_technologies' => true,
            'edit_technologies' => true,
            'delete_technologies' => true,
            'assign_technologies' => true,
        ],
    ];
}