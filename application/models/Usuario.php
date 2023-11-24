<?php 
namespace Application\models;
class Usuario{
    private $codigo;
    private $email;
    private $usuario;
    private $senha;
public function __construct($email, $usuario,$senha){
       $this->email = $email;
       $this->usuario = $usuario;
       $this->senha = $senha;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){return $this->email;}

    public function getMarca(){return $this->usuario;}
    public function getPreco(){return $this->senha;}
}