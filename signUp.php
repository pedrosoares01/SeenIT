<?php

$db = mysqli_connect("localhost", "root", "", "organizador_filmes");
$db->set_charset("utf8");

if (!$db) {
    $descricaoErro = "Erro! Detalhes: " . mysqli_connect_error();
    die($descricaoErro);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["user"];
    $senha = $_POST["password"];
    $birth_date = $_POST["dateB"];

    if (empty($username) || empty($senha) || empty($birth_date)) {
        echo "<p>Por favor, preencha todos os campos.</p>";
    } else {
        $senha_hashed = password_hash($senha, PASSWORD_BCRYPT);

        $sql = "INSERT INTO cadastro_usuarios (nome_usuario, senha, data_nascimento) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sss", $username, $senha_hashed, $birth_date);

        $stmt->execute();

        $stmt->close();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeenIT</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=lock" />


<body>
    <h1 id="titleHigh">SEENIT: A ORGANIZAÇÃO MELHORA TUDO</h1>
    <div id="boxLogin">
        <div id="boxLogin2">
            <h1 id="loginTitle">Cadastre-se</h1>

            <form action="signUp.php" method="POST">
                <input placeholder="Nome de usuário" type="text" id="user" name="user" class="idUsuario" required>
                <span id="lock" class="material-symbols-outlined">
                    lock
                </span>

                <input placeholder="Senha" type="password" id="password" name="password" class="idUsuario" required>
                <i id="person" class="fa-solid fa-person"></i>

                <span id="dateText">Data de nascimento</span>
                <input type="date" id="dateB" name="dateB" class="idUsuario" required>

                <input type="submit" id="submit" value="Cadastrar">
            </form>

            <p id="dontAccount">Já tem uma conta? &nbsp <a href="login.php">Logar</a></p>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/b62ded8c0c.js" crossorigin="anonymous"></script>


</html>