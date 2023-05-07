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
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0 ;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8: 
                echo "Descanse, pequeno garfanhoto! ;)";
                break; #se nao tiver break aq vai dar erro pq 0 nao é um case valido
            default:
            echo "Dia da semana inválido";
        }
    ?>
    <br/> <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    <!--js:history.go(-1)significa volte 1 pagina do historico de navegação-->
    </div>
    </body>
</html>