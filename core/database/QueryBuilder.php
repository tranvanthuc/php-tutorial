<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // get tất cả các record trong table
    public function selectAll($table)
    {
        $sql = "select * from {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    // insert data vào table
    public function insert($table, $params)
    {
        // insert into users (name) values (:name)
        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $table,
            implode(", ", array_keys($params)),
            ":" . implode(", ", array_keys($params)),
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($params);
        } catch (Exception $e) {
            die("Something is wrong!");
        }
    }

    // delete record with id
    public function delete($table, $id)
    {
        $sql = sprintf(
            "delete from %s where id = %s",
            $table,
            $id
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (Exception $e) {
            die("Something is wrong!");
        }
    }
}
