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
if(isset($_GET['ip'])){
    $str_pagina = "centro-cadastro_produto_atualiza.php";
    $arr_recepcao = unserialize(urldecode($_GET['ip']));
    $str_titulo = $arr_recepcao['titulo'];
    $str_descricao = $arr_recepcao['descricao'];
    $int_codigobarras = $arr_recepcao['codigobarras'];
    $arr_tamanhos = array('un' => '', 'p' => '','m' => '', 'g' => '', 'gg' => '', '34' => '','36' => '', '38' => '', '40' => '', '42' => '', '44' => '', '46' => '', '48' => '' );
    $arr_tamanhos[$arr_recepcao['tamanho']] = 'checked';
    $arr_cores = array();
    $int_inicio = 20;
    $int_fim = 47;
    while($int_inicio < $int_fim){
        $arr_cores["{$int_inicio}"] = '';
        $int_inicio++;
    }
    $arr_cores[$arr_recepcao['cor']] = 'checked';
    $int_num_cor = $arr_recepcao['cor'];
    $dbl_custo_produto = $arr_recepcao['custoproduto'];
    $dbl_valor_produto = $arr_recepcao['valorproduto']; 
    $int_quantidade = $arr_recepcao['quantidade'];
}
else{
    $str_pagina = "centro-cadastro_produto.php";
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
        
            <?php require_once './visual/'. $str_pagina.''; ?>
        
        <!-- PARTE FIXA FECHAMENTO PEDIDO -->
    </body>
</html>