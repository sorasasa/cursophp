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
    $est = $_GET["se"] ? $_GET["se"]: 0;
    switch ($est) {
        case 1:
        case 2:
        case 3:
            echo "A região selecionada foi a <span class='foco'>Região Sudeste</span>";
            break;
        case 4:
        case 5:
        case 6:
            echo "A região selecionada foi a <span class='foco'>Região Centro-Oeste</span>";
            break;
        case 7:
        case 8:
        case 9:
            echo "A região selecionada foi a <span class='foco'>Região Nordeste</span>";
            break;
        case 10:
        case 11:
        case 12:
            echo "A região selecionada foi a <span class='foco'>Região Norte</span>";
            break;
        case 13:
        case 14:
        case 15:
            echo "A região selecionada foi a <span class='foco'>Região Sul</span>";
            break;
        default:
        echo "Região Invalida"; 
    }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
    </body>
</html>