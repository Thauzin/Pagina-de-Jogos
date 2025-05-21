<?php
session_start(); // para pegar o ID do usuário logado
$id_usuario = $_SESSION['usuario']; // Exemplo: você deve ter salvo isso ao logar

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca de Jogos</title>
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <body class="bg-tertiary-color">
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="mx-auto">
        <a class="nav-link active text-warning fw-bold" href="#">GAMELIST</a>
      </div>
      <div>
       <a href="home.php"> <button class="btn btn-outline-warning" type="button" id="perfil">HOME</button> </a>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="row">
    <?php if (!empty($id_usuario)) : ?>
    <div class="text-center fs-3" id="errou">Boa Tarde, <?php echo $id_usuario; ?></div>
 <?php endif; ?>
 <br>
 <br>
 <br>
 <div class="text-center text-primary fs-3">ACESSAR BIBLIOTECA </div>
 <br>
 <br>
 <br>
 
 <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="tenho" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="tenho">TENHO</label>

  <input type="radio" class="btn-check" name="btnradio" id="desejado" autocomplete="off">
  <label class="btn btn-outline-primary" for="desejado">DESEJADO</label>

  <input type="radio" class="btn-check" name="btnradio" id="jogado" autocomplete="off">
  <label class="btn btn-outline-primary" for="jogado"> JOGADO </label>

   <input type="radio" class="btn-check" name="btnradio" id="favorito" autocomplete="off">
  <label class="btn btn-outline-primary" for="favorito">FAVORITO</label>
</div>

    
</body>
</html>