<?php 
header("Content-type: text/html; charset=utf-8");

session_start();

if(session_status() !== PHP_SESSION_ACTIVE)
{
    header("Location: erros.php?indice=4");
}
else{
    if(isset($_GET['tit'] )){
        $strTitulo = $_GET['tit'];
        $strDescricao = $_GET['des'];
        $dblValorVenda = $_GET['val'];
        $dblCusto = $_GET['cus'];
    }else{
        $strTitulo = "";
        $strDescricao = "";
        $dblValorVenda = "";
        $dblCusto = "";
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Loja The Fit - Centro Popular de Compra - Corredor 6 - Loja 454 - Porto Alegre - RS</title>
        <link href="incluir/css/base_pagina.css" rel="stylesheet" type="text/css" />
        <link href="incluir/css/cadastro_produto.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- PARTE SUPERIOR -->
            <?php require_once './visual/parte-superior-cadastro_produto.php'; ?>
            <hr>

        <!-- SCROLL DOS PRODUTOS DAS VENDAS -->
        
            <?php require_once './visual/centro-cadastro_produto.php'; ?>
        
        <!-- PARTE FIXA FECHAMENTO PEDIDO -->
    </body>
</html>