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
}
