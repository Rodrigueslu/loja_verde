<?php

use Application\core\Controller;
use Application\dao\UsuarioDAO;
use Application\models\Usuario;

class UsuarioController extends Controller{

        public function index(){
            $this->view('usuario/index');   
            
        }   

        public function cadastrar(){
            $this->view('usuario/cadastrar');  

        }   
        public function validarcadastro(){
                $email = $_POST['email'];
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $confirmasenha = $_POST['confirmasenha'];
                if($senha == $confirmasenha){
                    
                    $this->view('/usuario/cadastrar', ["msg" => "Sucesso"]);
                }else{
                    
                    $this->view('/usuario/cadastrar', ["msg" => "Senha ou email invalido"]);
                }
        }
}
?>