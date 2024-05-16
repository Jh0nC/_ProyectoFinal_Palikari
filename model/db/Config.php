<?php

class connectionDatabase {
    
    public static function UseConnectionDatabase () {
        
        $currentHost = $_SERVER['SERVER_NAME'];

        $dataBase = new PDO("mysql:host=$currentHost; dbname=palikari","root","root");
        $dataBase->exec("set names utf8");
        return $dataBase;
    }
}