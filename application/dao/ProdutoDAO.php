<?php
namespace application\dao;
class ProdutoDAO{
    // CRUD
    // Create (C)
    public function salvar($produto){
        //1 - Instancia o objeto
        $conexao = new Conexao();
        //2 - Recebe a conexão.
        $conn = $conexao->getConexao();
        // 3 - Receber os dados da outra camada
        $conn = $produto->getNome();
        $conn = $produto->getMarca();
        $conn = $produto->getPreco();
        // 4 - Monta o SQL
        $SQL = "INSERT INTO produtos (codigo,nome,marca,preco) VALUES (null,'$nome','$marca','$preco')";
        if($conn->query($SQL) === TRUE){
            return true;
        }else{ echo "Error: " . $SQL."<br/>".$conn->error;
            return false;
        }
    }
    public function pegaTodos(){}
    // Retrieve (R)
    public function pegaPorId($id){}
    // Update (U)
    public function atualizar($produto){}
    // Delete (D)
    public function apagar($id){}
}

?>