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
    $frase = "eu vou estudar php agora";
    $cont = str_word_count($frase,1); //0 conta as palavras, 1 mostra array (um vetor), 2 o vetor mostra posição na string
    //echo $cont;
    print_r($cont);
    ?>
    </div>
    </body>
</html>