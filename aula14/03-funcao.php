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
    function soma() {//vetores($p) sao variaveis compostas, com indices vulgo $p[0]
        $p = func_get_args(); // pega todos os argumentos e coloca dentro de um vetor $p
        //quando essa linha for executada ele vai criar um vetor $p com as posiçoes $p[0],$p[1],$p[2]etc respectivamente
        $t = func_num_args(); //retorna o numero de argumentos q foram passados ex digitou 3 valores a variavel $t recebe a quantidade de vezes q foram digitados algum valor
        $s = 0; //soma 
        //uma variavel com total de parametros e sabemos q esta dentro de um vetor
        //estrutura de repetição for pra tratar tudo isso
        for($i=0; $i<$t; $i++) { #i de indice, 
            $s += $p[$i]; //$s = $s + $p[$i]; $p é a variavel composta(vetor), e $i que vai de 0 a 3 (q foi digitado)
            //vai totalizar o a soma de todos os valores digitados
        }
        return $s;
    }
        $r = soma(3,5,2);
        echo "A soma dos valores é $r";
    ?>
    </div>
    </body>
</html>