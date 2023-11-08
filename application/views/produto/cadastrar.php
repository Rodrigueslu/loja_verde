
<?php
    $base = __DIR__;
    //debug_print_backtrace();
    include $base .'\..\layout\menu.php';
?>
<hr/>
<form action="/produto/" method="POST">
    
    <label > Nome Produto</label>
    <input type="text"name="nome_produto"/>
    <label for=""> Marca </label>
    <input type="text" name="marca"/>
    <input type="submit" value="Cadastrar"/>
</form>