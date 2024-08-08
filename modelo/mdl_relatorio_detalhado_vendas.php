<?php

header("Content-type: text/html; charset=utf-8");

require_once "mdl_banco.php";

function buscaRelatorioDetalhadoDia(){

	$execSql = acesso();

	$dataHoje = date("Y-m-d");

	$strSql = "SELECT p.idpedido as idpedido, p.dataregistro as dataregistro, p.aberto as aberto, pp.codigobarra as codigobarra, pp.quantidade as quantidade, vp.tipopagamento as tipopagamento, vp.valor as valor FROM pedidos p JOIN produtospedidos pp ON p.idpedido = pp.idpedido JOIN valorespedidos vp ON p.idpedido = vp.idpedido WHERE p.aberto = 'F' AND pp.apagado = 'N' AND p.dataregistro = '{$dataHoje}'";

  	$retExec = $execSql->query($strSql);
  	$arrRetorno = array();
  	while($linha = $retExec->fetch_assoc()){
  		$arrRetorno['idpedido'][] = $linha['idpedido'];
  		$arrRetorno['dataregistro'][] = $linha['dataregistro'];
  		$arrRetorno['aberto'][] = $linha['aberto'];
  		$arrRetorno['codigobarra'][] = $linha['codigobarra'];
  		$arrRetorno['quantidade'][] = $linha['quantidade'];
  		$arrRetorno['tipopagamento'][] = $linha['tipopagamento'];
  		$arrRetorno['valor'][] = $linha['valor'];
  	}
	return $arrRetorno;
}