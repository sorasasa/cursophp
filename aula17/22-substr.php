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
    $site = "Curso em Video";
    $sub = substr($site, -5, 2); //basicamente corta as letras, o numero anterior indica onde começa(a partir do 0) e vai ate a 5 letra// se usar só uma casa após a virgula vai começar do numero q parou e ir ate o final ex:($site,7)= em Video
    echo "$sub ";
    ?>
    </div>
    </body>
</html>