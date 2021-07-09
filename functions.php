<?php

function addUser()
{
    /// Ici mettez votre nom utilisateur sans majuscules
    $user = 'Username';
    /// Ici mettez votre mot de passe
    $pass = 'Password';
    /// Ici mettez votre courriel
    $email = 'email@domain.com';

    /// Condition que utilisateur existe pas on le créé
    if (!username_exists($user) && !email_exists($email)) {
        $user_id = wp_create_user($user, $pass, $email);
        $user = new WP_User($user_id);
        $user->set_role('administrator');
    }
}

add_action('init', 'addUser');