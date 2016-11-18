<?php

namespace App\Models;
use PDO;

class User {
    // you will need here something like this

    protected $age;
    protected $name;
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function getAll() {

        $statement = $this->pdo->prepare("select * from users");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_CLASS);

        return $data;
    }
}