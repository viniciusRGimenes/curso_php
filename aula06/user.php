<?php

require_once("database.php");


class User{

    private $email;
    private $password;

    public function setEmail($email){
        $this->email;
    }

    public function setPassword($password){
        $this->password;
    }

    public function autenticar_usuario($email = "", $password = ""){
        $retorno = false;

        if($email == "" || $password  == ""){
            return false;
        }
 
        $this->setEmail($email);
        $this->setPassword($password);

        $database = new Database();
        $conn = $database->conectar();        

        $sql = "SELECT * FROM users WHERE email = '".$email."' AND senha = '".$password."'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $retorno = true;
        }

        return $retorno;
    }
    
}