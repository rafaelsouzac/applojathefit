<?php 
header("Content-type: text/html; charset=utf-8");

$dir = dirname(__FILE__);
$dir = substr($dir, 0,-8);
$dir .="modelo\\mdl_relatorio_vendas.php"; 

include("{$dir}");


if($_SERVER['REQUEST_METHOD'] == "POST"){

	$intAcao = $_POST['action'];

	switch ($intAcao) {
		case 1:
			$arrInfo = buscaRelatorioDia();
			$strUrl = "relatorio_detalhado_vendas.php?info=".urlencode(serialize($arrInfo));
			header("Location: ../{$arrInfo}");
			break;

		default:
			header("Location: ../erros?indice=5");
			break;
	}
}