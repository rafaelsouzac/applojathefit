<?php 
header("Content-type: text/html; charset=utf-8");

$dir = dirname(__FILE__);
$dir = substr($dir, 0,-8);
$dir .="modelo\\mdl_relatorio_vendas_vendedor.php"; 

include("{$dir}");


function relatorioDia($str_usuario = ''){

	$arrRelatorio = array();

	$arrRelatorio = buscaRelatorioDiaVendedor($str_usuario);
	
	return $arrRelatorio;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$intAcao = $_POST['action'];
	switch ($intAcao) {
		case 1:
			$str_usuario =  $_POST['vendedor']; 
			header("Location: ../relatorio_vendas_vendedor.php?pg={$str_usuario}");
			break;

		default:
			header("../erros?indice=");
			break;
	}
}else{
	$intAcao = "semacao";
}