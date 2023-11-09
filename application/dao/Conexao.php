<?php
    class Conexao{
        private $dbName = "loja";
        private $usuario = "root";
        private $senha  = "sucesso";
        private $host = "localhost loja";
        // carrega a conexão realizada com o banco
        private $conn;
        public function __construct(){
            $this->conn = new \mysqli($this->host,$this->usuario,$this->senha,$this->$dbName);
        }

        public function conectar(){
            if($this->conn->connect_error){
                die("A conexão falhou.".$this->conn->connect_error);
            }
            return $this->conn;
        }
        public function desconectar(){
            $this->conn->close();
        }
        public function getConexoa(){}


    }


?>