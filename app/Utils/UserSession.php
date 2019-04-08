<?php

namespace App\Utils;

use App\Models\User;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     * 
     * @param \App\Models\User $user
     */
    public static function connect(User $user) {
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
        
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() {
        if (self::isConnected()) 
        unset($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     * 
     * @return bool
     */
    public static function isConnected() : bool {
        // !empty() va vérifier la présence d'une case 'connectedUser' dans le tableau de session 
        // Si la case est présente (donc l'uilisateur est connecté), le test renverra true
        // Sinon si l'utilisateur n'est pas connecté, il renverra false
        return !empty($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     * 
     * @return \App\Models\User
     */
    public static function getUser() {
        if (self::isConnected())
            return $_SESSION[self::SESSION_INDEX_NAME];
        else
            return false;
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     * 
     * @return bool
     */
    public static function isAdmin() : bool {
        if (self::isConnected())
            return true;

        return false;
        // Dans le cas où on aurait plusieurs utilisateurs, certains admin, d'autres non 
        // Attention, pour pouvoir accéder à une propriété role, il faut un champ role dans la DB
        // Return self::getUser()->role == 'admin';
    }
}

