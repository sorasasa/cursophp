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
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é <span class='foco'>$m</span> <br/>";
    if ($m <= 5) {
        $sit = "reprovado";
    }
    /*
     else ($m > 5 && $m <= 7) {
        $sit = "recuperação";
    }
    */
    elseif ($m < 7) {
        $sit = "aprovado";
    }
    echo "Situação do aluno: <span class='foco'>$sit</span>";
    ?>
    </div>
    </body>
</html>