<?php 
header("Content-type: text/html; charset=utf-8");

// Ativa a exibição de erros
ini_set('display_errors', 1);

// Define o nível de relatório de erros
error_reporting(E_ALL);

if(session_status() !== PHP_SESSION_ACTIVE)
{
    
    session_start();
    $_SESSION['infolocais']['endereco'] = $_SERVER['SERVER_NAME'];

    $diretorio = $_SERVER['PHP_SELF'];
    $ncarcter = strrpos($diretorio, "/");
    $diretorio = substr($diretorio, 0, $ncarcter+1);
    $_SESSION['infolocais']['dir'] = $diretorio;
    if ($_SESSION['vendas']['aberta'] == 's') {
        $strCorpo = './visual/corpo-vendas.php';
    }
    else{
        $strCorpo = './visual/corpo-sem-vendas.php';
    }
    if(isset($_GET['erropg'])){
        
        $intErro = $_GET['erropg'];
        echo("<script type='text/javascript'>\n");
        echo("function Alerta(){\n");

        switch ($intErro) {
            case 1:
                echo("  alert('Digite o código do produto'\n);");    
                break;                
            case 2:
                echo("  alert('Código do produto inválido.'\n);");
                break;                
            default:
                // code...
                break;
        }
        echo("}\n");
        echo("window.onload = Alerta();\n");
        echo("</script>\n");
    }

}
else
{
    echo("entrei no else");
    header("Location: erros.php?indice=4");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Loja The Fit - Centro Popular de Compra - Corredor 6 - Loja 454 - Porto Alegre - RS</title>
        <link href="incluir/css/base_pagina.css" rel="stylesheet" type="text/css" />
        <link href="incluir/css/trocas .css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <!-- PARTE SUPERIOR -->
            <?php require_once './visual/parte-superior-trocas.php'; ?>
            <hr>
        <!-- SCROLL DOS PRODUTOS DAS VENDAS -->
        
            <?php require_once $strCorpo; ?>
        
        <!-- PARTE FIXA FECHAMENTO PEDIDO -->

            <?php require_once './visual/fechamento-trocas.php'; ?>
    </body>
    <script src="incluir/js/vendas.js" type="text/javascript"></script>
</html>