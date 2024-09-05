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
        if(strlen($Linha['codigobarras']) == 6){
           $int_cor = substr($Linha['codigobarras'], 2, 2);
        }elseif(strlen($Linha['codigobarras']) == 8){
           $int_cor = substr($Linha['codigobarras'], 3, 2);
        }
		
		switch($int_cor){
			case 20:
				$str_cor = "Branco";
				break;
			case 21:
				$str_cor = "Preto";
				break;
			case 22:
				$str_cor = "Vermelho";
				break;
			case 23:
				$str_cor = "Azul";
				break;
			case 24:
				$str_cor = "Verde";
				break;
			case 25:
				$str_cor = "Amarelo";
				break;
			case 26:
				$str_cor = "Rosa Claro";
				break;
			case 27:
				$str_cor = "Rosa Pink";
				break;
			case 28:
				$str_cor = "Rosa Ciclete";
				break;
			case 29:
				$str_cor = "Rose";
				break;
			case 30:
				$str_cor = "Cinza";
				break;
			case 31:
				$str_cor = "Estampado";
				break;
			case 32:
				$str_cor = "Roxo";
				break;
			case 33:
				$str_cor = "Jeans";
				break;
			case 34:
				$str_cor = "Nude";
				break;					
			case 35:
				$str_cor = "Bege";
				break;
			case 36:
			    $str_cor = "Cinza Chumbo";
				break;	
            case 37:
			    $str_cor = "Verde Neom";
				break;					
            case 38:
			    $str_cor = "Rosa Neom";
				break;	
            case 39:
			    $str_cor = "Verde Água";
				break;	
            case 40:
			    $str_cor = "Azul Bic";
				break;	
            case 41:
			    $str_cor = "Verde Bandeira";
				break;	
            case 42:
			    $str_cor = "Azul Bêbe";
				break;	
            case 43:
			    $str_cor = "Rosa Bêbe";
				break;	
            case 44:
			    $str_cor = "Verde Musgo";
				break;
            case 45:
			    $str_cor = "Lilas";
				break;	
			default:
				$str_cor = "";
				break;					
	
		}
?>

	<table>
		<tr>
			<td class="esquerda">
				<img src="incluir/mult/img/<?php echo("{$Linha['nomeimagem']}"); ?>">
				<span>Estoque:<?php echo("".$linhaQuantidadeEstoque['quantidade']."");?></span>
			</td>
			<td class="direita">
				<div class="textospan">Cód. de barra: <?php echo("{$Linha['codigobarras']}"); ?></div>
				<div class="textospan"><?php echo("{$Linha['titulo']} {$Linha['tamanho']} $str_cor"); ?></div>
				<div class="textospan">Valor Ven. R$ <?php echo("{$Linha['valorproduto']}"); ?>
				</div>
				<div class="textospan">Custo R$ <?php echo("{$Linha['custoproduto']}"); ?></div>
				<div class="textospan"><a href="controle/con_lista_produto.php?cb=<?php echo("{$Linha['codigobarras']}"); ?>">Apagar Produto</a></div>
			</td>
		</tr>
	</table>
<?php
}
?>
</div>
