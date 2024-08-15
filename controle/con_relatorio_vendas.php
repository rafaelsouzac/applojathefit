<?php 
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);

$dir = dirname(__FILE__);

$dir = substr($dir, 0,-8);

if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}

$dirinclude = $dir;
$dirinclude .="modelo".$barra."mdl_relatorio_vendas.php"; 
include("{$dirinclude}");


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