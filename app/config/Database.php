<?php 
namespace App\config;
use PDO;
use PDOException;
class Database {
    private $connection;
    private static $instance;

    private function __construct() {
        $host = 'localhost';
        $dbname = 'your_database_name';
        $username = 'your_username';
        $password = 'your_password';

        try {
            $dsn = "mysql:host={$host};dbname={$dbname}";
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function conn() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connection;
    }
}
