<?php

class Database
{
    public $connection;



    public function __construct($config, $username = 'root', $password = 'RufusTolu,5#')
    {


        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query, $params = [])
    {


        // $pdo = new PDO("mysql:host=localhost;dbname=myqpp", 'root', 'RufusTolu,5#');

        $statement = $this->connection->prepare(query: $query);

        $statement->execute($params);

        return $statement;
    }
}

