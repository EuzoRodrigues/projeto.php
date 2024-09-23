<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOTÍCIAS </title>

    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="title-container">
        <div class="titulo">
            <h3> Bem vindo ao Site Web Design em Foco </h3>
        </div>
    </div>
    <div class="content-container">
        <div class="conteudo">
            <p> Escolha o idioma para entrar </p>

            <div class="icons-container">
                <img onclick="window.location.href = '/Projeto/processaIdioma.php?idioma=uk'" src="./img/uk.png">
                <img onclick="window.location.href = '/Projeto/processaIdioma.php?idioma=br'" src="./img/brazil.png">
                <img onclick="window.location.href = '/Projeto/processaIdioma.php?idioma=es'" src="./img/spain.png">
            </div>
        </div>
    </div>
</body>
</html>