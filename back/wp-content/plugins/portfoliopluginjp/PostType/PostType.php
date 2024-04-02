<?php

// Cette classe sert de classe générique pour tous les PostType. Dans chaque classe enfant, on viendra modifier seulement les informations nécessaires.

namespace Portfolio\PostType;

class PostType {

    /**
     * Register the post type
     *
     * @return void
     */
    static public function register()
    {
        // on déclare un nouveau type de contenu (CPT)
        // https://developer.wordpress.org/reference/functions/register_post_type/
        register_post_type (
            // on veut récupérer la constante POST_TYPE_KEY définie sur la classe fille avec static::
            static::POST_TYPE_KEY, // handle
            [
                'label' => static::POST_TYPE_LABEL, // donne un nom d'affichage à notre CPT
                'public' => true, // ce CPT est-il visible ?
                'has_archive' => true, // ce CPT aura-t-il une page d'archive => une liste
                'rewrite' => ['slug' => static::POST_TYPE_SLUG], // à chaque fois qu'on change cette valeur (ou à la création du CPT) il faut régénerer les permaliens depuis le backoffice
                //'capabilities' => static::CAPABILITIES,// on définit le NOM des capabilities qui sont utilisées par ce CPT
                /*'supports' => [
                    'title', // Ce CPT gérera les titres
                    'editor', // Ce CPT gérera l'éditeur de texte
                    'thumbnail', // On autorise l'utilisation d'images mises en avant (featured images)
                    'author', // Ce CPT utilisera les auteurs
                    'comments', // Ce CPT gérera les commentaires
                ],*/
                'show_in_rest' => true,
            ]
        );

    }

    /**
     * Automatically attach current CPT custom caps to default roles
     *
     * @return void
     */
    static public function addCaps()
    {
        // pour chaque rôle défini dans la liste des rôles custom pour le CPT courant
        foreach (static::DEFAULT_ROLES_CAPS as $roleSlug => $capsArray) {
            // on utilise la fonction get_role pour récupérer le role courant
            $currentRole = get_role($roleSlug);
    
            // pour chaque capability custom dans ce CPT, on l'ajoute au role courant
            foreach ($capsArray as $cap => $grant) {
                // on peut associer une cap à un role avec WP_Role::add_cap()
                $currentRole->add_cap($cap, $grant);
            }
        }
    }

    /**
     * Automatically detach current CPT custom caps from default roles
     *
     * @return void
     */
    static public function removeCaps()
    {
        // pour chaque rôle défini dans la liste des rôles custom pour le CPT courant
        foreach (static::DEFAULT_ROLES_CAPS as $roleSlug => $capsArray) {
            // on utilise la fonction get_role pour récupérer le role courant
            $currentRole = get_role($roleSlug);
    
            // pour chaque capability custom dans ce CPT, on la retire du role courant
            foreach ($capsArray as $cap => $grant) {
                // on peut associer une cap à un role avec WP_Role::add_cap()
                $currentRole->remove_cap($cap);
            }
        }
    }
}