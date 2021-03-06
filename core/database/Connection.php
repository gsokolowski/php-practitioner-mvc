<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection {

    public static function make($config) {

        try {
            return $pdo = new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e) {
            die('Could not connect...');
        }
    }
}
