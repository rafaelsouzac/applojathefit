<?php
header("Content-type: text/html; charset=utf-8");

include_once 'mdl_banco.php';

function ExecutaSql($strQuerySql = ""){

	$execSql = acesso();

	$retSql = $execSql->query($strQuerySql);

	finalizar($execSql);

	return $retSql;

}

function listaDeProdutosAtivos($intCodigoBarras = NULL){

	if(is_null($intCodigoBarras)){
		$strSql = "SELECT * FROM listadeprodutos";
	}else{
		$strSql = "SELECT * FROM listadeprodutos where codigobarras = $intCodigoBarras";
	}
	
	
	$retExecSql = ExecutaSql($strSql);

	return $retExecSql;
}

function UltimaContagem($idproduto){
	
	$strSql = "SELECT COALESCE((SELECT quantidade FROM produtoquantidade
	WHERE idproduto = ".$idproduto." ORDER BY dataregistro DESC LIMIT 1), 0) as quantidade";

	$retExecSql = ExecutaSql($strSql);

	return $retExecSql;

}
