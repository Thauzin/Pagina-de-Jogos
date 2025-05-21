<?php
session_start();

$servername = "localhost"; 
$username = "vscode_user";
$password = "senha123";
$database = "gamelist";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$mensagemErro = "";

if (isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($senha)) {
        $mensagemErro = "Complete todos os campos!";
    } 
    else {
        $verifica = $conn->prepare("SELECT * FROM login WHERE nome = ?");
            if (!$verifica) {
            die("Erro no prepare da verificação: " . $conn->error);
        }

        $verifica->bind_param("s", $nome);
        $verifica->execute();
        $result = $verifica->get_result();

        if ($result->num_rows > 0) {
            $mensagemErro = "Já existe um cadastro com esse nome";
        } 
        else {
            $stmt = $conn->prepare("INSERT INTO login (nome, senha) VALUES (?, ?)");
            if (!$stmt) {
                die("Erro no prepare: " . $conn->error);
            }

            if (!$stmt->bind_param("ss", $nome, $senha)) {
                die("Erro no bind_param: " . $stmt->error);
            }

            if (!$stmt->execute()) {
                die("Erro no execute: " . $stmt->error);
            } else {
                $_SESSION['usuario'] = $nome;
                header("Location: home.php");
                exit();
            }
        }
    }
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
        <div class="text-center mt-5 text-warning bg-primary fs-4 w-25 mx-auto">
            FAZER CADASTRO
        </div>
    </div>

    <form action="" method="post" class="mt-4">
        <div class="mb-3 mx-auto text-center">
            <label for="nome" class="form-label text-primary fs-4">Nome de usuário</label>
            <input type="text" class="form-control w-50 mx-auto" id="nome" name="nome" placeholder="Nome">
        </div>

        <div class="mb-3 mx-auto text-center">
            <label for="email" class="form-label text-primary fs-4">Email</label>
            <input type="email" class="form-control w-50 mx-auto" id="email" name="email" placeholder="seuemail@...">
        </div>

        <div class="mb-3 mx-auto text-center">
            <label for="senha" class="form-label text-primary fs-4">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control w-50 mx-auto" placeholder="Senha">
            <?php if (!empty($mensagemErro)) : ?>
                <div class="text-center text-danger" id="errou"><?php echo $mensagemErro; ?></div>
            <?php endif; ?>
        </div>

        <div class="text-center">
            <a href="index.php">Já é cadastrado? Faça seu Login aqui</a>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-outline-primary" name="cadastro">CADASTRAR</button>
        </div>
    </form>
</body>
</html>
