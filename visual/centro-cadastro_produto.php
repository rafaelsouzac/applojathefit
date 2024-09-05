<?php
	$intCodigoBarra = "";
	if(isset($_GET['cdob'])){
		$intCodigoBarra = $_GET['cdob'];
?>
<div class="div_principal">
		<div class="codigobarra">
			<p>Número Código de Barras: <?php echo("{$intCodigoBarra}");?> </p>
		</div>
	<?php		
		}
	?>
	<div class="linhaprincipal">
		<form action="controle/con_cadastro_produto.php" method="post" enctype="multipart/form-data">
			<div class="procura_imagem">
				<label for="imagem">Imagem:</label>
				<input type="file" id="imagem" name="imagem" accept="image/*"><br>
			</div>
			<div class="linha_form_cadastro_produto">
				<div class="titulo">
					<label for="titulo">Título:</label>
					<input type="text" id="titulo" name="titulo" value="<?php echo("{$strTitulo}"); ?>"><br>
				</div>
			</div>
			<div class="linha_form_cadastro_produto">
				<label for="descricao">Descrição:</label>
				<textarea id="descricao" name="descricao"><?php echo("{$strDescricao}"); ?></textarea><br>
			</div>
			<div class="linha_form_cadastro_produto">
				<span>Tamanhos</span>
				<div class="coluna_tamanhos">
					<div class="colunas_tamanhos_esquerda">
						<label for="tamanho-unico">Único (UN)</label>
						<input type="checkbox" id="tamanho-un" name="tamanho[]" value="un">
						<label for="tamanho-p">P (Pequeno)</label>
						<input type="checkbox" id="tamanho-p" name="tamanho[]" value="p">
						<label for="tamanho-m">M (Médio)</label>
						<input type="checkbox" id="tamanho-m" name="tamanho[]" value="m">
						<label for="tamanho-g">G (Grande)</label>
						<input type="checkbox" id="tamanho-g" name="tamanho[]" value="g">
						<label for="tamanho-gg">GG (Extra Grande)</label>
						<input type="checkbox" id="tamanho-gg" name="tamanho[]" value="gg">
					</div>
					<div class="colunas_tamanhos_centro">
					<label for="tamanho-34">34</label>
						<input type="checkbox" id="tamanho-34" name="tamanho[]" value="34">
						<label for="tamanho-36">36</label>
						<input type="checkbox" id="tamanho-36" name="tamanho[]" value="36">
						<label for="tamanho-38">38</label>
						<input type="checkbox" id="tamanho-38" name="tamanho[]" value="38">			
						<label for="tamanho-40">40</label>
						<input type="checkbox" id="tamanho-40" name="tamanho[]" value="40">
					</div>
					<div class="colunas_tamanhos_direita">
					<label for="tamanho-42">42</label>
						<input type="checkbox" id="tamanho-42" name="tamanho[]" value="42">
						<label for="tamanho-44">44</label>
						<input type="checkbox" id="tamanho-44" name="tamanho[]" value="44">
						<label for="tamanho-46">46</label>
						<input type="checkbox" id="tamanho-46" name="tamanho[]" value="46">
						<label for="tamanho-48">48</label>
						<input type="checkbox" id="tamanho-48" name="tamanho[]" value="48">
					</div>
				</div>
			</div>
			<div class="linha_form_cadastro_produto">
				<span>Cores:</span>
				<div class="coluna_cores">
					<div class="coluna_esquerda_cores">
						<label for="cor-branco">Branco</label>
						<input type="checkbox" id="cor-branco" name="cor[]" value="20">
						<label for="cor-preto">Preto</label>
						<input type="checkbox" id="cor-preto" name="cor[]" value="21">
						<label for="cor-vermelho">Vermelho</label>
						<input type="checkbox" id="cor-vermelho" name="cor[]" value="22">
						<label for="cor-branco">Azul</label>
						<input type="checkbox" id="cor-azul" name="cor[]" value="23">
						<label for="cor-preto">Verde</label>
						<input type="checkbox" id="cor-verde" name="cor[]" value="24">
						<label for="cor-preto">Bege</label>
						<input type="checkbox" id="cor-bege" name="cor[]" value="35">
 <label for="cor-verAz">Azul Bic</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="41">
 <label for="cor-verdeneom">Verde Bandeira</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="42">

					</div>
					<div class="coluna_centro_cores">
						<label for="cor-amarelo">Amarelo</label>
						<input type="checkbox" id="cor-amarelo" name="cor[]" value="25">
						<label for="cor-rosaclaro">Rosa Claro</label>
						<input type="checkbox" id="cor-rosaclaro" name="cor[]" value="26">
						<label for="cor-rosapink">Rosa Pink</label>
						<input type="checkbox" id="cor-rosapink" name="cor[]" value="27">
						<label for="cor-rosaciclete">Rosa Ciclete</label>
						<input type="checkbox" id="cor-rosaciclete" name="cor[]" value="28">
						<label for="cor-rose">Rose</label>
						<input type="checkbox" id="cor-rose" name="cor[]" value="29">
 <label for="cor-verdeneom">Azul Bêbe </label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="43">
 <label for="cor-verdeneom">Rosa Bêbe</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="44">
 <label for="cor-verdeneom">Verde Musgo</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="45">
 <label for="cor-verdeneom">Lilas</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="46">
					</div>
						<div class="coluna_direita_cores">				
						<label for="cor-preto">Cinza</label>
						<input type="checkbox" id="cor-cinza" name="cor[]" value="30">
						<label for="cor-vermelho">Estampado</label>
						<input type="checkbox" id="cor-estampado" name="cor[]" value="31">
						<label for="cor-roxo">Roxo</label>
						<input type="checkbox" id="cor-roxo" name="cor[]" value="32">
						<label for="cor-jeans">Jeans</label>
						<input type="checkbox" id="cor-jeans" name="cor[]" value="33">
						<label for="cor-nude">Nude</label>
						<input type="checkbox" id="cor-nude" name="cor[]" value="34">
						<label for="cor-chumbo">Cinza Chumbo</label>
						<input type="checkbox" id="cor-chumbo" name="cor[]" value="36">
						<label for="cor-rosaneom">Rosa Neom</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="38">
                        <label for="cor-verdeneom">Verde Neom</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="37">
 <label for="cor-verdeneom">Verde Agua</label>
						<input type="checkbox"Verdeneom"cor-" name="cor[]" value="40">
					</div>
				</div>
			</div>
		<div class="campos_extras">		
			<div class="linha_quantidade">
				<label for="quantidade">Quantidade:</label>
				<input type="number" id="quantidade" name="quantidade" required><br>
			</div>
			<div class="linha_valorproduto">
				<label for="valorproduto">Valor de venda:  &nbsp; &nbsp; &nbsp;</label>
				<input type="number" id="valorproduto" name="valorproduto"  value="<?php echo("{$dblValorVenda}"); ?>" required><br>
			</div>
			<div class="linha_custoproduto">
				<!--
				<label for="custoproduto">Custo do Produto:</label>
				<input type="number" id="custoproduto" name="custoproduto" value="<?php echo("{$dblCusto}"); ?>" required><br>
				-->
			</div>
			<div class="linha_botao_submit">
				<input id="botaoenvio" type="submit" value="Cadastrar">
			</div>
		</div>
	</form>
	</div>
</div>