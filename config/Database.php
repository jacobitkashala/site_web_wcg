<?php
class Database{
    // Connexion à la base de données


    private $host = "127.0.0.1";
    private $db_name = "wcg_site_web_databases";
    private $username = "jaco";
    private $password = "1234";
    public $connexion;

    // getter pour la connexion
    public function getConnection(){

        $this->connexion = null;

        try{
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->connexion;
    }   
}