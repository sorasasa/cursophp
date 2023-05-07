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
    $nome = "Guanabara";
    $novo = str_pad($nome,20,"x",STR_PAD_BOTH); //tudo errado essa porra
    echo "meu professor $novo é lindo";
    ?>
    </div>
    </body>
</html>