<?php 
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);

$dir = dirname(__FILE__);

$dir = substr($dir, 0,-8);

if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}

$dirinclude = $dir;
$dirinclude .="modelo".$barra."mdl_lista_produto.php"; 
include("{$dirinclude}");


function listaProdutos($intCodigoBarra = NULL){
    if(!is_null($intCodigoBarra)){
        return listaDeProdutosAtivos($intCodigoBarra);
    }else{
        return listaDeProdutosAtivos(NULL);
    }
    
}

function BuscaQuantidadeEstoque($intIdproduto = 0){

    return UltimaContagem($intIdproduto);
    
}

if(isset($_POST['funcaocarrinho'])){
    $intCodigoBarra = $_POST['codigobarra'];
    $strUrl = "../lista_produto.php?cp=$intCodigoBarra";
    header("Location: $strUrl");
}

if(isset($_GET['cb'])){
    $int_codigo_barra_produto = $_GET['cb'];
    $ret_produto = listaProdutos($int_codigo_barra_produto);
    $arr_produto = $ret_produto->fetch_assoc();
    ApagaProduto($arr_produto['idproduto']);
    $strUrl = "../lista_produto.php";
    header("Location: $strUrl");
}