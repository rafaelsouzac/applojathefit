<div class="div_principal">
		<div class="codigobarra">
			<p>Código de Barras: <?php echo("{$int_codigobarras}");?> </p>
		</div>
	<div class="linhaprincipal">
		<form action="controle/con_cadastro_produto_atualiza.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="atualiza_codigobarras" value="<?php echo("{$int_codigobarras}");?>">
			<input type="hidden" name="cor" value="<?php echo("{$int_codigobarras}");?>">
			<div class="procura_imagem">
				<label for="imagem">Imagem:</label>
				<input type="file" id="imagem" name="imagem" accept="image/*"><br>
			</div>
			<div class="linha_form_cadastro_produto">
				<div class="titulo">
					<label for="titulo">Título:</label>
					<input type="text" id="titulo" name="titulo" value="<?php echo("{$str_titulo}"); ?>"><br>
				</div>
			</div>
			<div class="linha_form_cadastro_produto">
				<label for="descricao">Descrição:</label>
				<textarea id="descricao" name="descricao"><?php echo("{$str_descricao}"); ?></textarea><br>
			</div>
			<div class="linha_form_cadastro_produto">
				<span>Tamanhos</span>
				<div class="coluna_tamanhos">
					<div class="colunas_tamanhos_esquerda">
						<label for="tamanho-unico">Único (UN)</label>
						<input type="checkbox" id="tamanho-un" name="tamanho[]" value="un" <?php echo("{$arr_tamanhos['un']}"); ?>>
						<label for="tamanho-p">P (Pequeno)</label>
						<input type="checkbox" id="tamanho-p" name="tamanho[]" value="p" <?php echo("{$arr_tamanhos['p']}"); ?>>
						<label for="tamanho-m">M (Médio)</label>
						<input type="checkbox" id="tamanho-m" name="tamanho[]" value="m" <?php echo("{$arr_tamanhos['m']}"); ?>>
						<label for="tamanho-g">G (Grande)</label>
						<input type="checkbox" id="tamanho-g" name="tamanho[]" value="g" <?php echo("{$arr_tamanhos['g']}"); ?>>
						<label for="tamanho-gg">GG (Extra Grande)</label>
						<input type="checkbox" id="tamanho-gg" name="tamanho[]" value="gg" <?php echo("{$arr_tamanhos['gg']}"); ?>>
					</div>
					<div class="colunas_tamanhos_centro">
					<label for="tamanho-34">34</label>
						<input type="checkbox" id="tamanho-34" name="tamanho[]" value="34" <?php echo("{$arr_tamanhos['34']}"); ?>>
						<label for="tamanho-36">36</label>
						<input type="checkbox" id="tamanho-36" name="tamanho[]" value="36" <?php echo("{$arr_tamanhos['36']}"); ?>>
						<label for="tamanho-38">38</label>
						<input type="checkbox" id="tamanho-38" name="tamanho[]" value="38" <?php echo("{$arr_tamanhos['38']}"); ?>>			
						<label for="tamanho-40">40</label>
						<input type="checkbox" id="tamanho-40" name="tamanho[]" value="40" <?php echo("{$arr_tamanhos['40']}"); ?>>
					</div>
					<div class="colunas_tamanhos_direita">
					<label for="tamanho-42">42</label>
						<input type="checkbox" id="tamanho-42" name="tamanho[]" value="42" <?php echo("{$arr_tamanhos['42']}"); ?>>
						<label for="tamanho-44">44</label>
						<input type="checkbox" id="tamanho-44" name="tamanho[]" value="44"<?php echo("{$arr_tamanhos['44']}"); ?>>
						<label for="tamanho-46">46</label>
						<input type="checkbox" id="tamanho-46" name="tamanho[]" value="46" <?php echo("{$arr_tamanhos['46']}"); ?>>
						<label for="tamanho-48">48</label>
						<input type="checkbox" id="tamanho-48" name="tamanho[]" value="48" <?php echo("{$arr_tamanhos['48']}"); ?>>
					</div>
				</div>
			</div>
			<div class="linha_form_cadastro_produto">
				<span>Cores:</span>
				<div class="coluna_cores">
					<div class="coluna_esquerda_cores">
						<label for="cor-branco">Branco</label>
						<input type="checkbox" id="cor-branco" name="cor[]" value="20"  <?php echo("{$arr_cores['20']}"); ?> disabled>
						<label for="cor-preto">Preto</label>
						<input type="checkbox" id="cor-preto" name="cor[]" value="21" <?php echo("{$arr_cores['21']}"); ?> disabled>
						<label for="cor-vermelho">Vermelho</label>
						<input type="checkbox" id="cor-vermelho" name="cor[]" value="22"  <?php echo("{$arr_cores['22']}"); ?> disabled>
						<label for="cor-branco">Azul</label>
						<input type="checkbox" id="cor-azul" name="cor[]" value="23"  <?php echo("{$arr_cores['23']}"); ?> disabled>
						<label for="cor-preto">Verde</label>
						<input type="checkbox" id="cor-verde" name="cor[]" value="24"  <?php echo("{$arr_cores['24']}"); ?> disabled>
						<label for="cor-preto">Bege</label>
						<input type="checkbox" id="cor-bege" name="cor[]" value="35"  <?php echo("{$arr_cores['35']}"); ?>disabled>
 <label for="cor-verAz">Azul Bic</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="41"  <?php echo("{$arr_cores['41']}"); ?> disabled>
 <label for="cor-verdeneom">Verde Bandeira</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="42"  <?php echo("{$arr_cores['42']}"); ?> disabled>

					</div>
					<div class="coluna_centro_cores">
						<label for="cor-amarelo">Amarelo</label>
						<input type="checkbox" id="cor-amarelo" name="cor[]" value="25"  <?php echo("{$arr_cores['25']}"); ?>>
						<label for="cor-rosaclaro">Rosa Claro</label>
						<input type="checkbox" id="cor-rosaclaro" name="cor[]" value="26"  <?php echo("{$arr_cores['26']}"); ?>>
						<label for="cor-rosapink">Rosa Pink</label>
						<input type="checkbox" id="cor-rosapink" name="cor[]" value="27"  <?php echo("{$arr_cores['27']}"); ?>>
						<label for="cor-rosaciclete">Rosa Ciclete</label>
						<input type="checkbox" id="cor-rosaciclete" name="cor[]" value="28"  <?php echo("{$arr_cores['28']}"); ?> disabled>
						<label for="cor-rose">Rose</label>
						<input type="checkbox" id="cor-rose" name="cor[]" value="29"  <?php echo("{$arr_cores['29']}"); ?> disabled>
 <label for="cor-verdeneom">Azul Bêbe </label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="43"  <?php echo("{$arr_cores['43']}"); ?> disabled>
 <label for="cor-verdeneom">Rosa Bêbe</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="44"  <?php echo("{$arr_cores['44']}"); ?> disabled>
 <label for="cor-verdeneom">Verde Musgo</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="45"  <?php echo("{$arr_cores['45']}"); ?> disabled>
 <label for="cor-verdeneom">Lilas</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="46"  <?php echo("{$arr_cores['46']}"); ?> disabled>
					</div>
						<div class="coluna_direita_cores">				
						<label for="cor-preto">Cinza</label>
						<input type="checkbox" id="cor-cinza" name="cor[]" value="30"  <?php echo("{$arr_cores['30']}"); ?>>
						<label for="cor-vermelho">Estampado</label>
						<input type="checkbox" id="cor-estampado" name="cor[]" value="31" <?php echo("{$arr_cores['31']}"); ?>>
						<label for="cor-roxo">Roxo</label>
						<input type="checkbox" id="cor-roxo" name="cor[]" value="32"  <?php echo("{$arr_cores['32']}"); ?>>
						<label for="cor-jeans">Jeans</label>
						<input type="checkbox" id="cor-jeans" name="cor[]" value="33"  <?php echo("{$arr_cores['33']}"); ?> disabled>
						<label for="cor-nude">Nude</label>
						<input type="checkbox" id="cor-nude" name="cor[]" value="34"  <?php echo("{$arr_cores['34']}"); ?> disabled>
						<label for="cor-chumbo">Cinza Chumbo</label>
						<input type="checkbox" id="cor-chumbo" name="cor[]" value="36"  <?php echo("{$arr_cores['36']}"); ?> disabled>
						<label for="cor-rosaneom">Rosa Neom</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="38"  <?php echo("{$arr_cores['38']}"); ?> disabled>
                        <label for="cor-verdeneom">Verde Neom</label>
						<input type="checkbox" Rosaneom"cor-" name="cor[]" value="37"  <?php echo("{$arr_cores['37']}"); ?> disabled>
 <label for="cor-verdeneom">Verde Agua</label>
						<input type="checkbox"Verdeneom"cor-" name="cor[]" value="40"  <?php echo("{$arr_cores['40']}"); ?> disabled>
					</div>
				</div>
			</div>
		<div class="campos_extras">		
			<div class="linha_quantidade">
				<label for="quantidade">Quantidade:</label>
				<input type="number" id="quantidade" name="quantidade" value="<?php echo("{$int_quantidade}"); ?>"><br>
			</div>
			<div class="linha_valorproduto">
				<label for="valorproduto">Valor de venda:  &nbsp; &nbsp; &nbsp;</label>
				<input type="number" id="valorproduto" name="valorproduto"  value="<?php echo("{$dbl_valor_produto}"); ?>" required><br>
			</div>
			<?php
				if($_SESSION['vendas']['nivelacesso'] != 1){
			?>
			<div class="linha_custoproduto">
				<label for="custoproduto">Custo do Produto:</label>
				<input type="number" id="custoproduto" name="custoproduto" value="<?php echo("{$dbl_custo_produto}"); ?>" required><br>
			</div>
			<?php
				}
			?>
			<div class="linha_botao_submit">
				<input id="botaoenvio" type="submit" value="Cadastrar">
			</div>
		</div>
	</form>
	</div>
</div>