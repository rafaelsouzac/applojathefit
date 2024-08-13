<?php 
header("Content-type: text/html; charset=utf-8");

$dir = dirname(__FILE__);
$dir = substr($dir, 0,-8);
$dir .="modelo\\mdl_relatorio_vendas.php"; 

include("{$dir}");


function relatorioDia(){
	
	$arrRelatorio = array();

	$arrRelatorio = buscaRelatorioDia();
	
	return $arrRelatorio;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$intAcao = $_POST['action'];
	switch ($intAcao) {
		case 1:
			header("../relatorio_detalhado_vendas.php");
			break;

		default:
			header("../erros?indice=");
			break;
	}
}