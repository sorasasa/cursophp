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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e terá $i anos. <br/>";
    if ($i >= 18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else {
        $v = "nao pode votar";
        $d = "nao pode dirigir";
    }
    echo "Com essa idade voce $v e tambem $d";
    ?>
    </div>
    </body>
</html>