<?php
    use application\core\controller;
    use application\dao\ProdutoDAO;
    use application\models\Produto;
    class ProdutoController extends Controller{
        public function index (){
            $this->view('produto/index');
        }
        public function cadastrar(){
            $this->view('produto/cadastrar');
        }
        public function salvar(){
            $nome = $_POST['nome_produto'];
            $marca = $_POST['marca'];
            $preco = $_POST['preco'];
            // Como construir um objeto produto aqui
            $produto = new Produto($nome,$marca,$preco);
            


            $produtoDAO = new ProdutoDAO();
            $produtoDAO->salvar($produto);

        }
    }

?>