<?php
/*
* Mysql database class - only one connection alowed
*/
class Database {
    private $connection;
    private static $instance; //The single instance
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "root";
    private $database = "skcd";
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    // Constructor
    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database",
                       "$this->username", "$this->password");
        } catch (PdoException $e) {
            echo 'Error: '.$e->getMessage();
        }
    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection
    public function getConnection() {
        return $this->connection;
    }

    public function query($query, $bindding = [])
    {
        $prepareStatement = $this->connection->prepare($query);
        $prepareStatement->execute($bindding);
        return $prepareStatement;
    }
}
