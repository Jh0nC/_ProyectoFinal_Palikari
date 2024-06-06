<?php

class connectionDatabase
{

    public static function UseConnectionDatabase()
    {

        $dsn = 'mysql:dbname=sql10711488;host=sql10.freemysqlhosting.net;port=3306';
        $user = 'sql10711488';
        $password = '1zguasDgja';

        $dataBase = new PDO($dsn, $user, $password);
        $dataBase->exec("set names utf8");
        return $dataBase; 
    }
}
