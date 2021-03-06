<?php

declare(strict_types=1);

namespace App\Connection;

abstract class Connection 
{
    public static function getConnection(): \PDO
    {
        $database = 'db_store';
        $user = 'root';
        $password = '123456';
    
        return new \PDO('mysql:host=localhost;dbname='.$database, $user, $password);
    }
}