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
    $t = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At tempor commodo ullamcorper a lacus.";
    $r = wordwrap($t, 5, "<br/>\n", true); //20 vai quebrar só na fonte da pagina,"<br>" vai quebrar só na parte vizualizada e \n vai quebrar nos dois//
    //em palavras com mais de 5 letras FALSE nao vai quebrar, e TRUE vai quebrar sempre 
     echo $r;
    ?>
    </div>
    </body>
</html>