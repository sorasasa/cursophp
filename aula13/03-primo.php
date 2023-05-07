<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1; //o numero recebido pela url veio do index,que pegou com o name="num"
	   echo "<h1>Analisando o número $n ...</h1>"; //vai mostrar o numero q foi digitado
	   echo "Valores múltiplos: "; //agora vai mostrar quantos valores o numero digitado é multiplo

	   $mult = 0; //o multiplo começa com 0, porq ele pode nao ser multiplo por nenhum(acho)
	   for ($c=1; $c<=$n; $c++) { #$contador vai mostrar os numeros divisiveis
        ##enquanto o contador for menor ou igual a o numero digitado, vai adicionar mais 1
			if ($n % $c == 0) { //$n divide por $c, se o resto da divisao for IDENTICO a ZERO...
				$mult++; //vai adicionar mais um numero
				echo "$c "; // e vai mostrar $c="os valores que o $n é multiplo"
			}
		}
		echo "<p> Total de múltiplos: $mult </p>";
		echo "<h2> Resultado: $n <span class='foco'>"; //o numero digitado aparece
		if ($mult <= 2) { //e se o resto da divisao for menor ou igual a 2 
			echo " É PRIMO! ";
		} else {
			echo " NÂO É PRIMO! ";
		}
		 echo "</span></h2>";
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 