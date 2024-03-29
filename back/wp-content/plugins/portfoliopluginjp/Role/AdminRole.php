<?php

namespace Portfolio\Role;

class AdminRole extends Role {

    // définition des éléments spécifiques
    const ROLE_KEY = "admin";
    const ROLE_DISPLAY_NAME = "Administrateur";
    const CAPABILITIES = [
        'read' => true,
        'edit_posts' => true,
        'edit_achievements' => true,
        'publish_achievements' => true,
        'edit_achievement' => true,
        'read_achievement' => true,
        'delete_achievement' => true,
        'edit_others_achievements' => true,
        'delete_others_achievements' => true,
        'delete_published_posts' => true,
        'manage_technologies' => true,
        'edit_technologies' => true,
        'delete_technologies' => true,
        'assign_technologies' => true,
        'manage_achievement_types' => true,
        'edit_achievement_types' => true,
        'delete_achievement_types' => true,
        'assign_achievement_types' => true,
    ];
}