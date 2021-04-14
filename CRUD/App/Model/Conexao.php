<?php

namespace App\Model;

class Conexao {
    private static $intance;
    
    public static function getConn() {
        if(!isset(self::$intance)):
            self::$intance = new PDO('mysql:host=localhost,dbname=pdo,charset=utf8', 'root', '');
        endif;
            
        return self::$intance;
            
    }
}