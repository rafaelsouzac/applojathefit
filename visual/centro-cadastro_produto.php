<?php
	$intCodigoBarra = "";
	if(isset($_GET['cdob'])){
		$intCodigoBarra = $_GET['cdob'];
?>
	<div class="codigobarra">
		<p>Número Código de Barras: <?php echo("{$intCodigoBarra}");?> </p>
	</div>
<?php		
	}
?>
<div class="linhaprincipal">
  <form action="controle/con_cadastro_produto.php" method="post" enctype="multipart/form-data">
  	<div class="linhaform">
	    <label for="imagem">Imagem:</label>
	    <input type="file" id="imagem" name="imagem" accept="image/*"><br>
	</div>
	<div class="linhaform">
		<label for="titulo">Título:</label>
	    <input type="text" id="titulo" name="titulo" value="<?php echo("{$strTitulo}"); ?>"><br>
	</div>
	<div class="linhaform">
	    <label for="descricao">Descrição:</label>
	    <textarea id="descricao" name="descricao"><?php echo("{$strDescricao}"); ?></textarea><br>
	</div>
	<div class="linhaform textoTamanho">
		  <div class="fundo">
	    	<label id="textoTamanho">Tamanho:</label><br>
	  	</div>
	    <div class="linhaform">
		    <label for="tamanho-unico">Único (UN)</label>
		    <input type="checkbox" id="tamanho-un" name="tamanho[]" value="un">
		</div>
		<div class="linhaform tamanho-p">
		    <label for="tamanho-p">P (Pequeno)</label>
		    <input type="checkbox" id="tamanho-p" name="tamanho[]" value="p">
		</div>
		<br>
	    <div class="linhaform">		
		    <label for="tamanho-m">M (Médio)</label>
		    <input type="checkbox" id="tamanho-m" name="tamanho[]" value="m">
		</div>
	    <div class="linhaform">
		    <label for="tamanho-g">G (Grande)</label>
		    <input type="checkbox" id="tamanho-g" name="tamanho[]" value="g">
		</div>
		<div class="linhaform">
	    	<label for="tamanho-gg">GG (Extra Grande)</label>
		    <input type="checkbox" id="tamanho-gg" name="tamanho[]" value="gg">
		</div>
		
		<div class="linhaform">
	    	<label for="tamanho-34">34</label>
		    <input type="checkbox" id="tamanho-34" name="tamanho[]" value="34">
		</div>
		<div class="linhaform">
	    	<label for="tamanho-36">36</label>
		    <input type="checkbox" id="tamanho-36" name="tamanho[]" value="36">
		</div>
		<br>
		<div class="linhaform">
	    	<label for="tamanho-38">38</label>
		    <input type="checkbox" id="tamanho-38" name="tamanho[]" value="38">
		</div>
		
		<div class="linhaform">
	    	<label for="tamanho-40">40</label>
		    <input type="checkbox" id="tamanho-40" name="tamanho[]" value="40">
		</div>
		<div class="linhaform">
	    	<label for="tamanho-42">42</label>
		    <input type="checkbox" id="tamanho-42" name="tamanho[]" value="42">
		</div>
		<div class="linhaform">
	    	<label for="tamanho-44">44</label>
		    <input type="checkbox" id="tamanho-44" name="tamanho[]" value="44">
		</div>
		
		<div class="linhaform">
	    	<label for="tamanho-46">46</label>
		    <input type="checkbox" id="tamanho-46" name="tamanho[]" value="46">
		</div>
		<div class="linhaform">
	    	<label for="tamanho-48">48</label>
		    <input type="checkbox" id="tamanho-48" name="tamanho[]" value="48">
		</div>
	</div>
    <div class="linhaform">
    	<div class="linhacor fundo">
	    	<label>Cores:</label>
	  	</div>
    	<div class="linhacor">
		    <label for="cor-branco">Branco</label>
		    <input type="checkbox" id="cor-branco" name="cor[]" value="20">
		    <label for="cor-preto">Preto</label>
		    <input type="checkbox" id="cor-preto" name="cor[]" value="21">
		    <label for="cor-vermelho">Vermelho</label>
		    <input type="checkbox" id="cor-vermelho" name="cor[]" value="22">
		  </div>
     	<div class="linhacor">
		    <label for="cor-branco">Azul</label>
		    <input type="checkbox" id="cor-branco" name="cor[]" value="23">
		    <label for="cor-preto">Verde</label>
		    <input type="checkbox" id="cor-preto" name="cor[]" value="24">
		    <label for="cor-vermelho">Amarelo</label>
		    <input type="checkbox" id="cor-vermelho" name="cor[]" value="25">
	    </div>
     	<div class="linhacor">
		    <label for="cor-branco">Rosa</label>
		    <input type="checkbox" id="cor-branco" name="cor[]" value="26">
		    <label for="cor-preto">Pink</label>
		    <input type="checkbox" id="cor-preto" name="cor[]" value="27">
		    <label for="cor-vermelho">Roxo</label>
		    <input type="checkbox" id="cor-vermelho" name="cor[]" value="28">
	    </div>
     	<div class="linhacor">
		    <label for="cor-branco">Lilas</label>
		    <input type="checkbox" id="cor-branco" name="cor[]" value="29">
		    <label for="cor-preto">Cinza</label>
		    <input type="checkbox" id="cor-preto" name="cor[]" value="30">
		    <label for="cor-vermelho">Estampado</label>
		    <input type="checkbox" id="cor-vermelho" name="cor[]" value="31">
	    </div>
     	<div class="linhacor">
		    <label for="cor-roxo">Roxo</label>
		    <input type="checkbox" id="cor-roxo" name="cor[]" value="32">
		    <label for="cor-jeans">Jeans</label>
		    <input type="checkbox" id="cor-jeans" name="cor[]" value="33">
	    </div>

	    <!-- Adicione outras cores conforme necessário -->
	</div>
	<div class="fundo">
	</div>
	<div class="linhaform">
	    <label for="quantidade">Quantidade:</label>
	    <br><input type="number" id="quantidade" name="quantidade" required><br>
	</div>
	<div class="linhaform">
	    <label for="valorproduto">Valor de venda:</label>
	    <input type="number" id="valorproduto" name="valorproduto"  value="<?php echo("{$dblValorVenda}"); ?>" required><br>
	</div>
	<div class="linhaform">
	    <label for="custoproduto">Custo do Produto:</label>
	    <input type="number" id="custoproduto" name="custoproduto" value="<?php echo("{$dblCusto}"); ?>" required><br>
	</div>
	<div class="linhaform">
		<div class="linhabotao">
		  <input id="botaoenvio" type="submit" value="Enviar">
		</div>
	</div>
  </form>
</div>