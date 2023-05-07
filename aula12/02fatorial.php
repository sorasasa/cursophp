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
    $v = isset($_GET["val"]) ? $_GET["val"]:1; //vai pegar o valor na url e o isset garantir q nao vai dar erro se abrir a pag errada//
    echo "<h1>Calculando o fatorial de $v </h1>";
    $c = $v; //$c = contador  $v = valor, começar o contador com o valor digitado
    $fat = 1; //fatorial começa com 1
    do {
        $fat = $fat * $c; //essa variavel vai receber o resultado multiplicado pelo numero selecionado
        $c--; // a cada vez vai tirar um valor (descrescente)
    }while ($c>=1); //do maior pro menor ex 5!= x5 x4 x3 x2 x1
    echo "<h2>$v! = $fat </h2>"; //numero! = resultado
    ?>
    <p><a href="02index.html" class="botao">Voltar</a></p>
    </div>
    </body>
</html>