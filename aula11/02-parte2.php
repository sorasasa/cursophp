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
    $i = 1; // primeiro while pega os dados da url
    while ($i <= 5) {
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url]) ? $_GET[$url]:0;
        $i++;
    }
    /*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/
    $i=1;
    while($i <= 5) {
        $v = "num".$i;
        echo "Valor $i:".$$v. "<br/>";
        $i++;
    }
    ?>
    </div>
    </body>
</html>