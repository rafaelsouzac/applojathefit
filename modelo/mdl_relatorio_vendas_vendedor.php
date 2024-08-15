<?php

header("Content-type: text/html; charset=utf-8");

require_once "mdl_banco.php";


function buscaRelatorioDiaVendedor($str_usuario = ''){

	$execSql = acesso();

	$dataHoje = date("Y-m-d");
 	
	$strSql = "SELECT dataregistro, MIN(idpedido) as inicio,
    		   MAX(idpedido) as fim FROM pedidos 
			   WHERE aberto = 'F' AND dataregistro = '{$dataHoje}' 
               and usuario = '{$str_usuario}'";
	
   $retExec = $execSql->query($strSql)->fetch_assoc();

	if(empty($retExec['dataregistro'])){
		return ;
	}
	else{
		$strSql = "SELECT tipopagamento, 
		SUM(valor) as total_valor 
		FROM valorespedidos WHERE idpedido 
		BETWEEN {$retExec['inicio']} AND {$retExec['fim']} 
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
}