<?php

header("Content-type: text/html; charset=utf-8");

require_once "mdl_banco.php";

date_default_timezone_set('America/Sao_Paulo');

function buscaRelatorioDiaVendedor($str_usuario = ''){

	$execSql = acesso();

	$dataHoje = date("Y-m-d");

	$strSql = "	SELECT tipopagamento, 
			SUM(valor) as total_valor 
			FROM valorespedidos 
			WHERE idpedido IN (SELECT idpedido FROM pedidos 
			WHERE aberto = 'F' 
			AND dataregistro =  '{$dataHoje}'  
			and usuario = '{$str_usuario}' ) 
			GROUP BY tipopagamento order by field(tipopagamento , 'din', 'pix', 'deb', 'cre')";

		$retExec = $execSql->query($strSql);
		$recLinha = 0;
		$arrRetorno = array();

		while($recLinha = $retExec->fetch_assoc()){
			$arrRetorno['tipopagamento'][] = $recLinha['tipopagamento'];
			$arrRetorno['total_valor'][] = $recLinha['total_valor'];
		}
		return $arrRetorno;
}