<?php 
header("Content-type: text/html; charset=utf-8");

if(session_status() !== PHP_SESSION_ACTIVE)
{
    
    session_start();
    $_SESSION['infolocais']['endereco'] = $_SERVER['SERVER_NAME'];

    $diretorio = $_SERVER['PHP_SELF'];
    $ncarcter = strrpos($diretorio, "/");
    $diretorio = substr($diretorio, 0, $ncarcter+1);
    $_SESSION['infolocais']['dir'] = $diretorio;
    
    if ($_SESSION['contagem']['aberta'] == 'n') {
        $strCorpo = './visual/corpo-sem-contagem-estoque.php';
    }
    else{
        $strCorpo = './visual/corpo-contagem-estoque.php';
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
        <link href="incluir/css/vendas.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- PARTE SUPERIOR -->
            <?php require_once './visual/parte-superior-contagem-estoque.php'; ?>
            <hr>
        <!-- SCROLL DOS PRODUTOS CONTATOS -->
        
            <?php require_once $strCorpo; ?>
        
        <!-- PARTE FIXA RODAPÉ DA PÁGINA -->

            <?php require_once './visual/fechamento-contagem-estoque.php'; ?>
    </body>
    <script src="incluir/js/vendas.js" type="text/javascript"></script>
</html>