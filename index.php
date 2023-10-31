<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de casa</title>
    <!-- import css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['titulo']) == false) {
        $titulo = array(
            "Adicione o seu texto aqui!",
            "Adicione aqui o seu subtitulo!!!!"
        );
    } else {
        $titulo = $_GET['titulo'];
        $titulo = str_replace("[", "", $titulo);
        $titulo = str_replace("]", "", $titulo);
        $titulo = explode(",", $titulo);
    }

    if (isset($_GET['descricao']) == false) {
        $descricao = array(
            "Escreva sua descricao aqui:",
            "Descricao 1 aqui",
            "Descricao 2 aqui",
            "Descricao 3 aqui",
            "Descricao 4 aqui",
            "Descricao 5 aqui",
            "Descricao 6 aqui",
            "Descricao 7 aqui",
        );
    } else {
        $descricao = $_GET['descricao'];
        $descricao = str_replace("[", "", $descricao);
        $descricao = str_replace("]", "", $descricao);
        $descricao = explode(",", $descricao);
    }

    if (isset($_GET['page']) == false) {
        $status = 0;
    } else {
        $status = $_GET['page'];
    }

    if ($status == 0) {
    ?>


        <div class="scene-1" id="scene-1">
            <div class="logo" id="logo"></div>
            <div class="text-1">
                <h1 id="text-1"><?= $titulo[0] ?></h1>
            </div>
            <div class="text-2">
                <h1 id="text-2"><?= $descricao[0] ?></h1>
            </div>
            <div class="text-3">
                <h1 id="text-3"><?= $descricao[1] ?></h1>
            </div>
            <div class="text-4">
                <h1 id="text-4"><?= $descricao[2] ?></h1>
            </div>
            <div class="text-5">
                <h1 id="text-5"><?= $descricao[3] ?></h1>
            </div>
            <div class="text-6">
                <h1 id="text-6"><?= $descricao[4] ?></h1>
            </div>

            <div class="text-7">
                <h1 id="text-7"><?= $titulo[1] ?></h1>
            </div>
            <div class="image-1">
                <div id="image-1"></div>
            </div>


        </div>

    <?php
    }
    ?>


    <script src="./assets/js/anime.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>