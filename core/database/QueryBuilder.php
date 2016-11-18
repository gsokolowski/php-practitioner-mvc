<?php

namespace App\Core\Database;
use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {


        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_CLASS);

        return $data;
    }

    public  function insert($table, $paramiters) {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($paramiters)),
            ':'.implode(', :', array_keys($paramiters))
        );

        try {

            $statement = $this->pdo->prepare($sql);
            //$statement->bindParam(':name', 'Joe');
            $statement->execute($paramiters);
        }
        catch (Exception $e) {

            echo 'Something went wrong';
            die($e->getMessage());
        }
    }

}