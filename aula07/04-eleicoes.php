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
    $ano = $_GET["an"];
    $idade = 2023 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos. ";
    $tipo = ($idade>=18 && $idade<65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
    echo "<br/> E dessa forma, seu voto é $tipo";
    ?>
    </div>
    </body>
</html>