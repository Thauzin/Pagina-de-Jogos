<?php
session_start(); // para pegar o ID do usuário logado
$id_usuario = $_SESSION['usuario']; 

$servername = "localhost"; 
$username = "vscode_user";
$password = "senha123";
$database = "gamelist";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT *
        FROM usuario_jogo uj
        JOIN jogos j ON uj.id_jogo = j.nome
        WHERE uj.id_usuario = ?
        AND desejado = true";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biblioteca de Jogos</title>
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="bg-tertiary-color">
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="mx-auto">
        <a class="nav-link active text-warning fw-bold" href="#">GAMELIST</a>
      </div>
      <div>
        <a href="home.php"><button class="btn btn-outline-warning" type="button" id="perfil">HOME</button></a>
      </div>
    </div>
  </nav>
  <br>
  <br>
      <?php if (!empty($id_usuario)) : ?>
      <h3 class="text-center"> Jogos que <?php echo htmlspecialchars($id_usuario);  ?> quer comprar!</h3>
  <div class="container list-group list-group-horizontal">
      <?php if ($result->num_rows > 0): ?>
              <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="card ms-5 mt-3 " style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($row['nome']); ?></h5>
            <hr>
            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>       
            <p class="card-text">Número de jogadores: <?php echo htmlspecialchars($row['numJogadores']);  ?> </p>
            <p class="card-text">Tempo (em minutos):  <?php echo htmlspecialchars($row['tempo']); ?> </p>
            <p class="card-text">Categoria:  <?php echo htmlspecialchars($row['categoria']); ?> </p>
            </div>
        </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="text-center mt-4">Você não tem jogos cadastrados.</p>
      <?php endif; ?>
    <?php else: ?>
      <p class="text-center">Usuário não logado.</p>
    <?php endif; ?>
  </div>
    <a href="profile.php"><button class="ms-5 text-xxl-end btn btn-outline-warning" type="button" id="perfil">VOLTAR</button></a>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
