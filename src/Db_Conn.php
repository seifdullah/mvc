<?php

namespace Seif;

use Exception;
use PDO;

class Db_Conn
{
    private string $servername = 'localhost';
    private string $dbname = 'sample_db';
    private string $username = 'root';
    private string $password = '';

    private array $params = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    
    private $conn;

    public function __construct()
    {
        $this->connect_db();
    }

    private function connect_db()
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password, $this->params);
        } catch (Exception $e) {
            $this->conn = null;
            throw new Exception('DB connection failed');
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    private function disconnect()
    {
        $this->conn = null;
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}
