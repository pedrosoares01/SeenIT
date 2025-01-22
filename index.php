<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>SeenIT</title>
</head>
<body>
    <h1>SeenIT - a organização melhora tudo</h1>
    <p>
        Assistir filmes não precisa ser complicado se organize para que
        possa assisti-los sem atrapalhar sua rotina.Crie categorias e
        separe quais filmes deseja ver, ou ja assistiu. Aperte o botao
        "criar categoria" e começe que começe a organização.
    </p>
    <div id="organizar">
        <label for="">Digite o nome da categoria:<input type="text" id="nomecategoria"></input></label>
        <input type="color" id="corcategoria" value="#000000">
        <input type="button" id="criar" value="criar categoria"> <br>
        <button class="minimizarcategorias">minhas categorias</button>

        <button id="LogarIndex"><a href="signUp.php">Cadastrar-se</a></button>
        <button id="LogarIndex"><a href="login.php">Logar</a></button>

    </div>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="categorias.js"></script>
</body>
</html>