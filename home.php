<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca de Jogos</title>
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-tertiary-color">
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="mx-auto">
        <a class="nav-link active text-warning fw-bold" href="#">GAMELIST</a>
      </div>
      <div>
       <a href="profile.php"> <button class="btn btn-outline-warning" type="button" id="perfil">PROFILE</button> </a>
      </div>
    </div>
  </nav>
  <div class="row">
  <div class="text-center mt-5 text-primary fs-4" >
    EXPLORAR JOGOS EM DESTAQUE 
  </div>
</div>
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-inner mt-5 " id=Dixit>
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/Dixit.png" class="d-block w-25 mx-auto" alt="Dixit">
      <ul class="list-group list-group-horizontal justify-content-center gap-2">
  <li class="list-group-item border-0 p-1 mt-3 bg-warning">
    <input class="form-check-input me-0" type="checkbox" value="" id="Tenho">
    <label class="form-check-label" for="firstCheckbox">TENHO</label>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="DESEJADO">
    <label class="form-check-label" for="firstCheckbox">DESEJADO</label>
  </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="JOGADO">
    <label class="form-check-label" for="firstCheckbox">JÁ JOGUEI</label>
  </li>
    </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="FAVORITO">
    <label class="form-check-label" for="firstCheckbox">FAVORITO</label>
  </li>

</ul>
    </div>
    <div class="carousel-item" id="jogo_da_vida" data-bs-interval="2000">
      <img src="images/JogoVida.png" class="d-block w-25 mx-auto" alt="Jogo da Vida">
            <ul class="list-group list-group-horizontal justify-content-center gap-2">
  <li class="list-group-item border-0 p-1 mt-3 bg-warning">
    <input class="form-check-input me-0" type="checkbox" value="" id="Tenho">
    <label class="form-check-label" for="firstCheckbox">TENHO</label>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="DESEJADO">
    <label class="form-check-label" for="firstCheckbox">DESEJADO</label>
  </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="JOGADO">
    <label class="form-check-label" for="firstCheckbox">JÁ JOGUEI</label>
  </li>
    </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="FAVORITO">
    <label class="form-check-label" for="firstCheckbox">FAVORITO</label>
  </li>
</ul>
      <div class="carousel-caption d-none d-md-block">
        
         
      </div>
    </div>
    <div class="carousel-item" id="uno">
      <img src="images/Uno.png" class="d-block w-25 mx-auto" alt="Uno">
            <ul class="list-group list-group-horizontal justify-content-center gap-2">
  <li class="list-group-item border-0 p-1 mt-3 bg-warning">
    <input class="form-check-input me-0" type="checkbox" value="" id="Tenho">
    <label class="form-check-label" for="firstCheckbox">TENHO</label>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="DESEJADO">
    <label class="form-check-label" for="firstCheckbox">DESEJADO</label>
  </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="JOGADO">
    <label class="form-check-label" for="firstCheckbox">JÁ JOGUEI</label>
  </li>
    </li>
    <li class="list-group-item border-0 p-1 mt-3 bg-warning" >
    <input class="form-check-input me-0" type="checkbox" value="" id="FAVORITO">
    <label class="form-check-label" for="firstCheckbox">FAVORITO</label>
  </li>

</ul>
      <div class="carousel-caption d-none d-md-block">
         
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="text-center mt-5 text-primary fs-4" >
    ADICIONAR JOGOS
  </div>
  <br>
  <br>
  <div class="row g-3 align-items-center position-absolute start-50 translate-middle">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label text-primary">Nome</label>
  </div>
  <div class="col-auto ">
    <input type="text" id="nome" class="form-control border border-primary" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 1-50 characters long.
    </span>
  </div>
</div>
<br>
<div class="row g-3 justify-content-center align-items-center">
  <div class="col-auto">
    <label class="col-form-label text-primary" id="tenho">Tenho: </label>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
      <label class="form-check-label" for="radioDefault1">Sim</label>
    </div>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
      <label class="form-check-label" for="radioDefault2">Não</label>
    </div>
  </div>
</div>
<div class="row g-3 justify-content-center align-items-center">
  <div class="col-auto">
    <label class="col-form-label text-primary " id="desejado">Desejado: </label>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault1" id="radioDefault3">
      <label class="form-check-label" for="radioDefault3">Sim</label>
    </div>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault1" id="radioDefault4" checked>
      <label class="form-check-label" for="radioDefault4">Não</label>
    </div>
  </div>
</div>
<div class="row g-3 justify-content-center align-items-center">
  <div class="col-auto">
    <label class="col-form-label text-primary" id="favorito">Favorito: </label>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault2" id="radioDefault5">
      <label class="form-check-label" for="radioDefault5">Sim</label>
    </div>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radioDefault2" id="radioDefault6" checked>
      <label class="form-check-label" for="radioDefault6">Não</label>
    </div>
  </div>
</div>
<br>
  <div class="row g-3 align-items-center position-absolute start-50 translate-middle">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label text-primary">Número de jogadores</label>
  </div>
  <div class="col-auto ">
    <input type="number" class="form-control border-primary" min="0" max="50" step="1" value="5">
  </div>
</div>


<br>
<br>
<br>
<br>
<div class="d-flex justify-content-center"> 
<button type="button" class="btn btn-outline-warning">Warning</button>
</div>
<br>
<br>
</body>
</html>

<script>
  <?php if (isset($_SESSION['usuario'])): ?>
    document.getElementById("perfil").textContent = "PROFILE";
  <?php endif; ?>
</script>

