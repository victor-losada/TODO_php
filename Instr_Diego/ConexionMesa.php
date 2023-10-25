<?php

    class ConexionMesa{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "diego_php";
        private $conect;

        public function __construct(){
            try {
                $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e) {
                $this->conect = "Error de conexión";
                echo "ERROR: ". $e->getMessage();
            }

        }
        public function connect(){
            return $this->conect;
        }
    }


?>