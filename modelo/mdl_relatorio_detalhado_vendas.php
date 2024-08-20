<?php

header("Content-type: text/html; charset=utf-8");

require_once "mdl_banco.php";

function Tabela_Pedidos(){

	$execSql = acesso();

	$dataHoje = date("Y-m-d");

	$strSql = "select idpedido,  usuario from pedidos where dataregistro = '{$dataHoje}' and aberto = 'F'";


  	$retExec = $execSql->query($strSql);

	while($linha = $retExec->fetch_assoc()){
		$arrRetorno['idpedido'][] = $linha['idpedido'];
		$arrRetorno['usuario'][] = $linha['usuario'];
	}

	return $arrRetorno;
}

function Produtos_Pedido_Quantidade($int_id_pedido = 0){

	$execSql = acesso();


	$strSql = "SELECT produtos.titulo AS titulo, produtospedidos.quantidade AS quantidade,
	valorprodutos.valorproduto AS valorproduto
	FROM produtos INNER JOIN produtospedidos ON produtos.codigobarras = produtospedidos.codigobarra
	INNER JOIN valorprodutos ON valorprodutos.idproduto = produtos.idproduto
	WHERE produtospedidos.idpedido = {$int_id_pedido}";

  	$retExec = $execSql->query($strSql);
	$int_cout = 0;
	while($linha = $retExec->fetch_assoc()){
		$arrRetorno['titulo'][$int_cout] = $linha['titulo'];
		$arrRetorno['quantidade'][$int_cout] = $linha['quantidade'];
		$arrRetorno['valorproduto'][$int_cout] = $linha['valorproduto'];
		$int_cout++;
	}
	return $arrRetorno;
}

function Tabela_Valores_Pedidos($int_id_pedido = 0){

	$execSql = acesso();


	$strSql = "select tipopagamento, valor from valorespedidos where idpedido =  {$int_id_pedido}";

  	$retExec = $execSql->query($strSql);

	while($linha = $retExec->fetch_assoc()){
		$arrRetorno['tipopagamento'][] = $linha['tipopagamento'];
		$arrRetorno['valor'][] = $linha['valor'];
	}

	return $arrRetorno;
}

function Apagar_Pedido($int_id_pedido = 0){
	
	$execSql = acesso();
	
	$str_sql = "Update pedidos set aberto = 'A' where idpedido = {$int_id_pedido} ";

	$execSql->query($str_sql);
	
	return $execSql->affected_rows;
}