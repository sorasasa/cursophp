<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title></title>
    </head>
    <body>
    <div>
    <?php 
     $frase = "Estou aprendendo PHP";
     $pos = strpos($frase, "php"); //adicionar o  i em strpos e vai ignorar o jeito q foi digitado
     echo "$frase<br/>A string foi encontrada na posição $pos";
    ?>
    </div>
    </body>
</html>