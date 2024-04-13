<?php
class Database {
    private $host = "localhost";
    private $db_name = "asok_ap4";
    private $username = "root";
    private $password = "";
    public $conn;
    
    public function getConnexion(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        return $this->conn;
    }
}

