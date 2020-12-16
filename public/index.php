<?php
session_start();
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

include './../app/configuracao.php';
include './../app/autoload.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">

</head>
<body>
    <div id="sideBar">
        <ul>
            <a href="<?=URL?>"><li>Home</li></a>
            <a href="<?=URL?>/paginas/sobre"><li>Sobre</li></a>
            <a href="#"><li>Layouts</li></a>
            <a href="#"><li>Contatos</li></a>
            <a href="<?=URL?>/posts/cadastrar"><li>Mensagem</li></a>
            <!-- <?php/*
                if($situacao == 1) {
                    echo "
                        <a href=\"/produtos\"><li>Produtos</li></a>
                        <a href=\"/clientes\"><li>Usuarios</li></a>
                        <a href=\"/mensagens\"><li>Mensagem</li></a>
                    
                    ";
                }
            */?> -->
        </ul>
    </div>

    <div id="container">
        <?php
            include '../app/Views/header.php';
            $rotas = new Rota();
            include '../app/Views/footer.php';
        ?>
    </div>

    <script src="<?=URL?>/public/js/javascript.js"></script>
</body>
</html>