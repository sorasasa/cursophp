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
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ". number_format($preco,2);
    $preco += $preco * 10/100;
    echo "<br/>O preço com 10% de aumento será R$ " . number_format($preco,2);
    ?>
    </div>
    </body>
</html>