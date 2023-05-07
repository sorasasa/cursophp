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
    $frase = "Estou aprendendo PHP no Curso em Video de PHP";
    $cont = substr_count($frase,"PHP");
    echo "PHP encontrado $cont vezes";
    ?>
    </div>
    </body>
</html>