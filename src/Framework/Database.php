<?php

declare (strict_types= 1);

namespace Framework;

use PDO, PDOException;

class Database
{
    public PDO $connection;
    public function __construct(private string $driver, private array $config, private string $username = 'root', private string $password = '')
    {
        $config = http_build_query(data: $config, arg_separator: ';');

        $dsn = "{$driver}:{$config}";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            echo "Connected to the database successfully.";
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }   
}
