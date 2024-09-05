<?php
header("Content-type: text/html; charset=utf-8");

include_once 'mdl_banco.php';

function cadastraProduto($titulo, $tamanho, $cor, $descricao, $categoria){

	$execSql = acesso();
	
	$strSql = "INSERT INTO produtos(titulo, tamanho, cor, descricao, categoria) VALUES('{$titulo}', '{$tamanho}', '{$cor}', '{$descricao}', '{$categoria}')";

	$execSql->query($strSql);

	finalizar($execSql);

	return;
}

function selecionaUltimoProdutoInserido(){

	$strSql = "SELECT idproduto FROM produtos ORDER BY idproduto DESC LIMIT 0,1";

	$execSql = acesso();

	$retSql = $execSql->query($strSql)->fetch_assoc();

	return $retSql['idproduto'];
}

function cadastrValorProduto($intIdProduto, $valorProduto, $custoProduto){

	$dataHoje = date('Y-m-d');

	$execSql = acesso();

	$strSql = "SET time_zone = '-03:00'";
	$execSql->query($strSql);
	
	$strSql = "INSERT INTO `valorprodutos`(`idproduto`,`tipopagamento`,  `dataregistro`, `ativo`, `valorproduto`, `custoproduto`) VALUES ({$intIdProduto}, 'DI','{$dataHoje}','1','{$valorProduto}','{$custoProduto}')";
	$execSql->query($strSql);

	$strSql = "SELECT idvalorproduto from valorprodutos ORDER BY idvalorproduto DESC LIMIT 0,1";
	$retSql = $execSql->query($strSql)->fetch_assoc();
	
	finalizar($execSql);

	return $retSql['idvalorproduto'];
}

function cadastroImagemProduto($idProduto, $nomeImagem){

	$strSql = "INSERT INTO `produtoimagem`( `idproduto`, `nomeimagem`) VALUES ('{$idProduto}','{$nomeImagem}')";

	$execSql = acesso();
	$execSql->query($strSql);
	
	finalizar($execSql);

	return;
}

function cadastroQuantidadeProduto($idProduto, $quantidadeProduto){
	$dataHoje = date('Y-m-d');
	$strSql = "INSERT INTO `produtoquantidade`( `idproduto`, `quantidade`, `dataregistro`) VALUES ('{$idProduto}','{$quantidadeProduto}', '{$dataHoje}')";

	$execSql = acesso();
	$execSql->query($strSql);
	
	finalizar($execSql);

	return;
}

function geraCodigoBarra($idProduto, $idValorProduto, $cor){

	$intCodigoBarra = "{$idProduto}"."{$cor}"."{$idValorProduto}";
	$strSql = "UPDATE `produtos` SET `codigobarras`='{$intCodigoBarra}' WHERE `idproduto` = {$idProduto}";

	$execSql = acesso();
	$execSql->query($strSql);
	
	finalizar($execSql);

	return;
}
