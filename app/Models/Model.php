<?php

namespace App\Models;

use Core\Config\Database;
use PDOStatement;

class Model
{
    protected string $table;
    protected $connection;
    private static $instance = null;

    // Запрещаем создание экземпляров класса извне
    protected function __construct() {
        $database = new Database('localhost', 'Maxvel', 'root','mysqli');
        $this->connection = $database->getConnection();
    }

    // Метод для получения экземпляра класса
    public static function getInstance()
    {
        // Проверяем, был ли создан экземпляр класса
        if (self::$instance === null) {

            self::$instance = new static();
        }

        return self::$instance;
    }
    protected function createTable()
    {
//        Лишний запрос каждый раз?
        $query = "CREATE TABLE IF NOT EXISTS $this->table (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(50) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
        $statement = $this->prepare($query);
        $this->execute($statement);
    }
    protected function prepare(string $query)
    {
        return $this->connection->prepare($query);
    }
    protected function execute(PDOStatement $statement)
    {
        $statement->execute();
    }
}