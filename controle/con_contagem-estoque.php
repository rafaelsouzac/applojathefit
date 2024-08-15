<?php
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);
if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}
$dir = dirname(__FILE__);
$dir = substr($dir, 0,-8);

$dirinclude = $dir;
$dirinclude .="controle".$barra."con_relatorio_vendas.php"; 

$strCaminho = __DIR__;
$intTamanho = strlen($strCaminho);
$subString = $intTamanho - 8;
$strCaminho = substr($strCaminho, 0, $subString);
if($so == 'linux'){
    $strCaminho = str_replace("'\'","'/'",$strCaminho);
    $strCaminho = $strCaminho."/modelo/mdl_contagem-estoque.php";
}else{
    $strCaminho = $strCaminho."\\modelo\\mdl_contagem-estoque.php";
}

require_once($strCaminho);

/*
    funcaocarrinho = 1 => 

    funcaocarrinho = 2 => 

    funcaocarrinho = 3 => 

    funcaocarrinho = 4 => 
    
*/


/*pega valor do código*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['funcaocarrinho'])){
        
        $intFuncao = $_POST['funcaocarrinho'];
        $intCodigobarra = $_POST['codigobarra'];

        switch ($intFuncao) {
            case 1:
                $intContagem = VerificaContagemDia($intCodigobarra);
                
                $_SESSION['contagem']['aberta'] = 's';
                $_SESSION['contagem']['numitens'] = $intContagem;

                if($intContagem == 0){
                                       
                    $retContagem = IniciaContagemDia($intCodigobarra);
                    
                    if($retContagem){
                        header('Location: ../contagem_estoque.php?q=1');
                    }
                    else{
                        header('Location: ../contagem_estoque.php?r=ei');
                    }
                }
                elseif($intContagem > 0){
                    $retContagem = AtualizaContagemDia($intCodigobarra);
                    if($retContagem){
                        header('Location: ../contagem_estoque.php?q=2');
                    }
                    else{
                        header('Location: ../contagem_estoque.php?r=ea');
                    }

                }
             break;
            
            default:
                // code...
                break;
        }

    }
    else{
        header("Location: ../erros.php?indice=3");
    }
}

function RelatorioContagem(){
    $arrRetContagem = BuscaContagem();
    return $arrRetContagem;
}