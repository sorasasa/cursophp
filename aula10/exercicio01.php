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
     $n = isset($_GET["num"]) ? $_GET["num"] : 0; #campo do numero
     $o = isset($_GET["oper"]) ? $_GET["oper"] : 1; #as opçoes de radio
     switch ($o) {
        case 1:
            $r = $n * 2; #o dobro do numero
            break; #pra encerrar o processo, é obrigatorio se nao fica em loop
        case 2: 
            $r = $n ^ 3; #o cubo do numero
            break;
        case 3:
            $r = sqrt($n); #raiz quadrada do numero // tambem pode escrever como $n ^(1/2) p calcular 
     }
     echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
    ?>
    <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
    </body>
</html>