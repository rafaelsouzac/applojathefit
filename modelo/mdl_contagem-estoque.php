<?php
header("Content-type: text/html; charset=utf-8");

if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}


include_once 'mdl_banco.php';

function BuscaContagem(){

    $strSql = "SELECT produtoquantidade.*, produtos.titulo FROM 
    produtoquantidade INNER JOIN produtos ON
    produtoquantidade.idproduto = produtos.idproduto
    WHERE produtoquantidade.dataregistro = CURDATE()";

    $execSql = acesso();

    $retSql = $execSql->query($strSql);

    $arrRet = array("produto"=>array(), "quantidade"=>array());

    while($linha = $retSql->fetch_assoc()){
        $arrRet["produto"][] = $linha['titulo'];
        $arrRet["quantidade"][] = $linha['quantidade'];
    }

    finalizar($execSql);

    return $arrRet;

}

function BuscaIdproduto($intCodigoBarra = -1){

	$execSql = acesso();

    $strSql = "Select idproduto from produtos where codigobarras = '". $intCodigoBarra ."'";

    $retSql = $execSql->query($strSql);

    $arrRet = $retSql->fetch_assoc();

    $intIdProduto = $arrRet['idproduto'];

    finalizar($execSql);

    return $intIdProduto;
}

function VerificaContagemDia($intCodigoBarra = -1){

    $execSql = acesso();

	if($intCodigoBarra == -1){
        return -1;
    }
    else{

        $intIdProduto = BuscaIdproduto($intCodigoBarra);

        $strSql = "SELECT  COALESCE((SELECT COUNT(`idproduto`) 
                        FROM `appthefit`.`produtoquantidade` 
                        WHERE `dataregistro` = CURDATE() AND `idproduto` = $intIdProduto), 0) 
                        as contproduto";            
        
        $retSql = $execSql->query($strSql);

        $arrRet = $retSql->fetch_assoc();

        finalizar($execSql);

        return $arrRet['contproduto'];
    }
}

function IniciaContagemDia($intCodigoBarra = -1){

    $intIdProduto = BuscaIdproduto($intCodigoBarra);

    $strSql = "insert into produtoquantidade(idproduto, quantidade, dataregistro) 
                     values($intIdProduto, 1, curdate())";

    $execSql = acesso();

    if($execSql->query($strSql) == True){
        
        finalizar($execSql);
        return True;
    }
    else{
        finalizar($execSql);
        return False;
    }
}

function AtualizaContagemDia($intCodigoBarra = -1){

    $intIdProduto = BuscaIdproduto($intCodigoBarra);

    $strSql = "update produtoquantidade set quantidade = quantidade + 1 
                     where idproduto = $intIdProduto and dataregistro = curdate()";

    $execSql = acesso();

    if($execSql->query($strSql) == True){
        finalizar($execSql);
        return True;
    }
    else{
        finalizar($execSql);
        return False;
    }
}