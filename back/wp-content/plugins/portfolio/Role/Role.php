<?php

namespace Portfolio\Role;

class Role {

    /**
     *  Registers the role to WP
     *
     * @return void
     */
    static public function register()
    {
        add_role(
            static::ROLE_KEY, // key => permet d'identifier le rôle
            static::ROLE_DISPLAY_NAME, // nice name => nom lisible, pour l'affichage en backoffice par ex.
            // capabilities
            static::CAPABILITIES
        );
    }

    /**
     *  Remove the role from WP
     *
     * @return void
     */
    static public function unregister()
    {
        remove_role(static::ROLE_KEY);
    }
}