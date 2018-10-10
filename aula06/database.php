<?php
class Database{

    private $db_server = "curso_php_db_1";
    private $db_user = "root";
    private $db_password = "phprs";
    private $db_database = "academia";

    public function conectar(){
        $conn = new mysqli($this->db_server, $this->db_user, $this->db_password, $this->db_database);
        if($conn->connect_error){
            die("Erro ao tentar conectar no banco de dados: ". $conn->connect_error);
        }

        return $conn;
    }
}