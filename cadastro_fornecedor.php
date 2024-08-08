<?php 
header("Content-type: text/html; charset=utf-8");

session_start();



if(session_status() !== PHP_SESSION_ACTIVE)
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
        <link href="incluir/css/cadastro_fornecedor.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- PARTE SUPERIOR -->
            <?php require_once './visual/parte-superior-cadastro_fornecedor.php'; ?>
            <hr>

        <!-- SCROLL DOS PRODUTOS DAS VENDAS -->
        
            <?php require_once './visual/centro-cadastro_fornecedor.php'; ?>
        
        <!-- PARTE FIXA FECHAMENTO PEDIDO -->
            <?php require_once './visual/parte-inferior-fornecedor.php'; ?>
    </body>
</html>