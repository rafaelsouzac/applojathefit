<div class="linhaprincipal">
	<h4>Lista de Produtos</h4>
<?php 

	$dir = dirname(__FILE__);
	$dir = substr($dir, 0,-6);

	$so = php_uname('s');
	$so = strtolower($so);
	
	if($so == 'linux'){
	  $barra = "/";
	}else{
	  $barra = "\\";
	}

	$dirinclude = $dir;
	$dirinclude .="controle".$barra."con_lista_produto.php"; 
	include("{$dirinclude}");

	if(isset($_GET['cp'])){
		$intCodigoBarras = $_GET['cp'];
		if($intCodigoBarras == ""){
			$intCodigoBarras = NULL;
		}
		$retListaProdutos = listaProdutos($intCodigoBarras);
	}else{
		$retListaProdutos = listaProdutos();
	}

	while($Linha = $retListaProdutos->fetch_assoc()){

		// quantidade em estoque:
		$retQuantidadeEstoque = BuscaQuantidadeEstoque($Linha['idproduto']);
		$linhaQuantidadeEstoque = $retQuantidadeEstoque->fetch_assoc();
?>

	<table>
		<tr>
			<td class="esquerda">
				<img src="incluir/mult/img/<?php echo("{$Linha['nomeimagem']}"); ?>">
				<span>Estoque:<?php echo("".$linhaQuantidadeEstoque['quantidade']."");?></span>
			</td>
			<td class="direita">
				<div class="textospan">Cód. de barra: <?php echo("{$Linha['codigobarras']}"); ?></div>
				<div class="textospan"><?php echo("{$Linha['titulo']} {$Linha['tamanho']}"); ?></div>
				<div class="textospan">Valor Ven. R$ <?php echo("{$Linha['valorproduto']}"); ?>
				</div>
				<div class="textospan">Custo R$ <?php echo("{$Linha['custoproduto']}"); ?></div>
			</td>
		</tr>
	</table>
<?php
}
?>
</div>
