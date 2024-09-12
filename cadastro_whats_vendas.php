<?php 
header("Content-type: text/html; charset=utf-8");

// Ativa a exibição de erros
ini_set('display_errors', 1);

// Define o nível de relatório de erros
error_reporting(E_ALL);

session_start();

if(session_status() !== PHP_SESSION_ACTIVE)
{
    header("Location: erros.php?indice=4");
}
if(isset($_GET['p'])){
    $int_id_pedido = $_GET['p']; 
    $str_campo_extra = '';
}
else{
    $int_id_pedido = "";
    $str_campo_extra = "        <div class=\"form-group\">
            <label for=\"textoextra\">Compra do Cliente:</label>
            <textarea id=\"textoextra\" name=\"textoextra\"></textarea>
        </div>";

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Loja The Fit - Centro Popular de Compra - Corredor 6 - Loja 454 - Porto Alegre - RS</title>
        <link href="incluir/css/cadastro_whats.css" rel="stylesheet" type="text/css" />
        <link href="incluir/css/vendas.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <!-- PARTE SUPERIOR -->
            <?php require_once './visual/parte-superior-cadastro-whats.php'; ?>
            <hr>
        <!-- SCROLL DOS PRODUTOS DAS VENDAS -->
        
            <?php require_once './visual/centro-cadastro-whats.php' ?>
        
        <!-- PARTE FIXA FECHAMENTO PEDIDO -->
        <script src="incluir/js/cadastro_whats_venda.js"></script>
    </body>
</html>