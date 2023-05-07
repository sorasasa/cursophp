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
    $p = "Leite";
    $pr = "4.5";
    //echo "O $p custa R$ " . number_format($pr,2);
    printf("O %s custa R$ %.2f", $p, $pr); //o %s é pra mostrar uma string %f de float(numero real)
    //pra formatar o %f com 2 casas coloca %.2 // uma string e um numero real com 2 casas decimais

    ?>
    </div>
    </body>
</html>