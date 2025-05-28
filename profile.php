<?php
session_start(); // para pegar o ID do usuário logado
$id_usuario = $_SESSION['usuario']; 

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
  <div class="row">
    <?php if (!empty($id_usuario)) : ?>
    <div class="text-center fs-3" id="errou">Boa Tarde, <?php echo $id_usuario; ?></div>
 <?php endif; ?>
 <br>
 <br>
 <div class="text-center text-primary fs-3">ACESSAR BIBLIOTECA </div>
 <br>
 <br>
<div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/Jogos_tenho.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tenho</h5>
    <p class="card-text">Esses já fazem parte da coleção. Só escolher e jogar!</p>
    <a href="tenho.php" class="btn btn-primary">        ACESSAR   </a>
  </div>
</div>
<div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/Desejado.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Desejado</h5>
    <p class="card-text">Jogos que estão na mira, só esperando a hora de chegar!</p>
    <a href="desejado.php" class="btn btn-primary">ACESSAR</a>
  </div>
</div>
<div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/Favorito.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Favorito</h5>
    <p class="card-text">Aqueles que não saem da mesa! Os queridinhos de sempre.</p>
    <a href="favorito.php" class="btn btn-primary">ACESSAR</a>
  </div>
</div>
<div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/Cartas.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cartas</h5>
    <p class="card-text">Baralho na mão e jogo na mesa. É hora de blefar e rir!</p>
    <a href="cartas.php" class="btn btn-primary">ACESSAR</a>
  </div>
</div>
<div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/Dois Jogadores.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dois jogadores</h5>
    <p class="card-text">Perfeitos pra jogar a dois. Rivalidade ou parceria, você escolhe!</p>
    <a href="#" class="btn btn-primary">ACESSAR</a>
  </div>
</div>
  <div class="card ms-5 mt-3" style="width: 18rem;">
  <img src="images/galera.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jogar com a galera</h5>
    <p class="card-text">Ideal para reunir a turma! Jogos para +6 jogadores</p>
    <a href="#" class="btn btn-primary">ACESSAR</a>
  </div>
    
</body>
</html>