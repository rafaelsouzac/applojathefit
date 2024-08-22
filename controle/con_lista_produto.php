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