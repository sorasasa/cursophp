<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title></title>
    </head>
    <body>
    <div>
    <?php 
    /*essa linha é pra demonstrar o uso de incremento e decremento no codigo */
    $atual = $_GET ["aa"]; # essa linha vai pegar o ano na URL
    echo "O ano atual é $atual e o ano anterior foi ". --$atual;
    ?>
    </div>
    </body>
</html>