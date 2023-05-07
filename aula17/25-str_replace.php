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
    $frase = "Gosto de estudar Historia, Historia é mt legal";
    $novafrase = str_ireplace("historia","PHP", $frase);
    echo "$novafrase";
    ?>
    </div>
    </body>
</html>