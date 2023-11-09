
<?php
    $base = __DIR__;
    //debug_print_backtrace();
    include $base .'\..\layout\menu.php';
?>
<hr/>
<form action="/produto/salvar" method="POST">
    
    <label > Produto</label>
    <input type="text"name="nome_produto"/>
    <label for=""> Marca </label>
    <input type="text" name="marca"/>
    <label for=""> Preco </label>
    <input type="text" name="preco"/>
    <input type="submit" value="Cadastrar"/>
</form>