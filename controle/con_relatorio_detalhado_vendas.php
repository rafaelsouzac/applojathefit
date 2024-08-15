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


function Relatorio_detalhado_vendas(){
	
	$arr_retorno = array("tabela_pedidos"=>array(), "produto_pedido_quantidade"=>array(), "tabela_valores_pedidos"=>array());
	$arr_retorno['tabela_pedidos'] = Tabela_Pedidos();
	$int_fim_loop = count($arr_retorno['tabela_pedidos']['idpedidos']);
	$int_inicio_loop = 0;

	while($int_inicio_loop < $int_fim_loop){
		$arr_retorno['produtos_pedidos_quantidade'][] = Produtos_Pedido_Quantidade($arr_retorno['tabela_pedidos']['idpedidos'][$int_inicio_loop]);
		$arr_retorno['tabela_valores_pedidos'][] = Tabela_Valores_Pedidos($arr_retorno['tabela_pedidos']['idpedidos'][$int_inicio_loop]);
		$int_inicio_loop++;
	}

	return $arr_retorno;
}