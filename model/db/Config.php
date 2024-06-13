<?php

class connectionDatabase
{

    public static function UseConnectionDatabase()
    {

        $dsn = 'mysql:dbname=sql10713403;host=sql10.freemysqlhosting.net;port=3306';
        $user = 'sql10713403';
        $password = 'bxwVk4V7bn';

        $dataBase = new PDO($dsn, $user, $password);
        $dataBase->exec("set names utf8");
        return $dataBase; 
    }
}
