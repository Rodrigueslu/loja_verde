<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    $base = __DIR__;
    include $base .'\..\layout\menu.php'; 
    //debug_print_backtrace();
 ?>
<form >
<hr />
<h1 style="text-align:center">Login</h1>
<form >
  <div class="mb-3" style="text-align:center">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
  </div>
  <div class="mb-3"style="text-align:center">
    <label for="exampleInputPassword1" class="form-label" >Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="mb-3 form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Permanecer conectado</label>
  </div >
  <button type="submit" class="btn btn-primary">Logar</button>
</form>
Caso não tenha uma conta <a href="/usuario/cadastrar">Cadastrar</a>
<hr />
</body>
</html>