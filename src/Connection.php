<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

use mysqli;
use App\Connection;

class Connection
{
    private static $instance = null;
    /**
     * On utilise un singleton pour éviter d'instancier plusieurs pour un même utilisateur
     * @return mysqli
     */
    public static function getConnection(): mysqli
    {
        if(self::$instance === null){
            self::$instance = new mysqli('localhost', 'root', 'root', 'spotifalsy');
        }
        return self::$instance;
    }
}