<?php

    class Login{
        private $login;
        private $senha;

        function __construct($login, $senha){
            $this->login = $login;
            $this->senha = $senha;
        }

        function getLogin(){
            return $this->login;
        }

        function getSenha(){
            return $this->senha;
        }

        function setLogin($login){
            $this->login = $login;
        }

        function setSenha($senha){
            $this->senha = $senha;
        }
    }

?>