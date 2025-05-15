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
        <button class="btn btn-outline-warning" type="button">PROFILE</button>
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
</body>
</html>
