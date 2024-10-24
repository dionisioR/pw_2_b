<?php
class Database{
    private $host = 'localhost';
    private $db_name = 'pwii_b';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{

            $this->conn = new PDO(
                "mysql:host=" . $this->host . 
                ";dbname=". $this->db_name, 
                              $this->username, 
                              $this->password
            );
            $this->conn->exec("set names utf8"); // Para ler caracteres especiais como acentos

        }catch(PDOException $error){
            echo "Opss!!! " . $error->getMessage();
        }

        return $this->conn;
    }
}