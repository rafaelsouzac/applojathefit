<div class="corposemvenda">
<?php

if($_SESSION['vendas']['frase'] == "1"){
	$strFrase = "<p>Venda efetuada com sucesso.</p>";
}else{
	$strFrase = "<p>Aguardando adicionar um produto.</p>";
}
	echo($strFrase);
	$intItensTotal = 0;
	$dblValorTotalCompra = "0.00";
	$dblValorTotalCompraCredito = '0.00';
?>
</div>