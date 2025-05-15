<?php

session_start();
$servername = "localhost"; 
$username = "vscode_user";
$password = "senha123";
$database = "gamelist";

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$mensagemErro = "";
$loginfeito = false;

    if (isset($_POST['login'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $stmt = $conn->prepare("Select * from login where nome = ? and senha = ?");
        $stmt->bind_param("ss", $nome, $senha); 
        $stmt->execute();                 
        $result = $stmt->get_result();     

        if ($result->num_rows > 0 ){
          $_SESSION['usuario'] = $nome;  
          $loginfeito = true; 
          header("Location: home.php");       
          exit();  
        }
        else {
        $mensagemErro = "Usuário ou senha incorretos! ";}
    } 
?>

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
               <a href="profile.php"> <button class="btn btn-outline-warning" type="button">LOGIN</button> </a>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="text-center mt-5 text-warning bg-primary fs-4 w-25 mx-auto" >
            REALIZAR LOGIN
        </div>
    </div>
    <form action="" method="post" class="mt-4">
        <div class="mb-3 mx-auto text-center">
            <label for="nome" class="form-label text-primary fs-4">Nome de user</label>
            <input type="text" class="form-control w-50 mx-auto" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3 mx-auto text-center">
            <label for="senha" class="form-label text-primary fs-4">Password</label>
            <input type="password" id="senha" name="senha" class="form-control w-50 mx-auto" placeholder="Senha">
            <?php if (!empty($mensagemErro)) : ?>
            <div class="text-center text-primary "id="errou"><?php echo $mensagemErro; ?></div>
             <?php endif; ?>
        </div>
        <div class="text-center">
            <a href="#">Esqueceu a senha?</a>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-outline-primary" name="login">REALIZAR LOGIN</button>
        </div>

    </form>
    </body>
</html>


