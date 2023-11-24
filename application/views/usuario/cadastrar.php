<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<?php
    $base = __DIR__;
    include $base .'\..\layout\menu.php'; 
    //debug_print_backtrace();
 ?>
  <?php 
    if(isset($data["msg"])){
  ?>
    <div class="alert alert-success" role="alert"> Sucesso </div>
  <?php } ?>
 <hr/>
 <h1 style="text-align:center">Cadastrar</h1>
 
<form class="row g-3" action="/usuario/validarcadastro" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="E-mail" required id="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Usuario</label>
    <input type="text" class="form-control"  placeholder="Usuario" required id="usuario" name="usuario">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Senha</label>
    <input type="password" class="form-control"  placeholder="Senha" required id="senha" name="senha">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Confirmar senha</label>
    <input type="password" class="form-control"  placeholder="Confirmar senha" required  id="confirmasenha" name="confirmasenha">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
      Li e concordo os termos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<hr/>
</body>
</html>