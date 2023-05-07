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
    $nome = "   Jose da Silva   ";
    echo(strlen($nome)); //mostra 19 q é o total da string
    $novo = trim($nome); //vai eliminar os espaços do inicio e do final
    echo($novo);
    echo(strlen($novo)); //vai mostrar 13
    ?>
    </body>
</html>