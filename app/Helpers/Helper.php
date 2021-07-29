<?php

namespace App\Helpers;

class Helper
{
    /**
     * Check if there's a session, indicating that a user has been logged in
     */
    public static function isLoggedIn()
    {
        return isset($_SESSION) && 
            isset($_SESSION['user']) && 
            isset($_SESSION['user']['uid']) &&
            (int)$_SESSION['user']['uid'] > 0 ? true : false;
    }


    /**
     * Get the user ID from session from the user that is logged in
     */
    public static function getUserIdFromSession()
    {
        if (self::isLoggedIn()) {
            return (int)$_SESSION['user']['uid'];
        }

        return false;
    }

}