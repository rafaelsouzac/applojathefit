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
$dirinclude .="modelo".$barra."mdl_vendas.php"; 
include("{$dirinclude}");

/*
    funcaocarrinho = 1 => adiciona produto que esta sendo comprado

    funcaocarrinho = 2 => altera quantidade do produto que esta sendo comprado

    funcaocarrinho = 3 => apaga produto que esta sendo comprado (toda quantidade)

    funcaocarrinho = 4 => recebe as formas de pagamento e seus respectivos valores
    
*/


/*pega valor do código*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST['funcaocarrinho'])){
        
        $intFuncao = $_POST['funcaocarrinho'];

        switch ($intFuncao) {
            case 1:
                $intIdProduto = $_POST['codigobarra'];

                //verifica se código de barras esta vazio
                if(empty($intIdProduto)){
                    //envia para página vendas e emite o alerta
                    header("Location: ../vendas.php?erropg=1");
                }
                else{
                    //verifica se codigo é válido.
                    $bolTemCodigo = codigoValido($intIdProduto);
                    if($bolTemCodigo){
                        adicionavendas($intIdProduto);
                        header("Location: ../vendas.php?v=ok");
                    }
                    else{
                        header("Location: ../vendas.php?erropg=2");
                    }
                }
                break;
            /****************************************************/
            case 2:
                $intIdProduto = $_POST['codigobarra'];
                $intQuantidade = $_POST['quantidade'];
                alterarQuantidade($intIdProduto, $intQuantidade);
                header("Location: ../vendas.php");
                break;            
            /****************************************************/

            /****************************************************/
            case 3:
                $intIdProduto = $_POST['codigobarra'];
                apagaProduto($intIdProduto);
                header("Location: ../vendas.php");
                break;            
            /****************************************************/
            /****************************************************/
            case 4:
                $arrTipoPagamento = array();
                
                if(isset($_POST['pagamento'])){
                    $arrCheckbox = $_POST['pagamento'];
                    foreach($arrCheckbox as $valor){
                        if($valor == 'din'){
                            if(isset($_POST['din'])){
                                $arrTipoPagamento['tipo'][] = 'din';
                                $arrTipoPagamento['valor'][] = $_POST['din'];               
                            }
                        }
                        elseif($valor == 'pix'){
                            if(isset($_POST['pix'])){
                                $arrTipoPagamento['tipo'][] = 'pix'; 
                                $arrTipoPagamento['valor'][] = $_POST['pix'];   
                            }
                        }
                        elseif($valor == 'deb'){
                            if(isset($_POST['deb'])){
                                $arrTipoPagamento['tipo'][] = 'deb';                         
                                $arrTipoPagamento['valor'][] = $_POST['deb'];   
                            }
                        }
                        elseif($valor == 'cre'){
                            if(isset($_POST['cre'])){
                                $arrTipoPagamento['tipo'][] = 'cre';
                                $arrTipoPagamento['valor'][] = $_POST['cre'];   
                            }
                        }
                    }
                }

                finalizarvenda($arrTipoPagamento);                
                break;            
            /****************************************************/

            default:
                // code...
                break;
        }

    }
    else{
        header("Location: ../erros.php?indice=3");
    }
}