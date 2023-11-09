<?php
namespace application\models;
class Produto{
    private $codigo;
    private $nome;
    private $marca;
    private $preco;
    
    public function __construct($nome, $marca, $preco){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->preco = $preco;
    }

    public function setCodigo($codigo){
        $this->$codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    public function setNome($nome){
        $this->$nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setMarca($marca){
        $this->$marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setPreco($preco){
        $this->$preco = $preco;
    }
    public function getPreco(){
        return $this->preco;
    }

}

?>