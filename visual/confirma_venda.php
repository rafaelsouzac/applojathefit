<div class="corposemvenda">
	<p>Venda efetuada com sucesso.</p>
	<?php 
	$intItensTotal = 0;
	$dblValorTotalCompra = "R$ 0.00";
	$dblValorTotalCompraCredito = 'R$ 0.00';
	?>
	<p>Solicitar o número do telefone para caso de troca.</p>
	<div class="formulario">
		<div class="campotel">
			<label for="telefone">Telefone:</label>
			<input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>
			<small>Formato esperado: XX-XXXXX-XXXX</small>
		</div>
		<div class="botao-add">
			<input type="submit" name="Cadastrar">
		</div>
	</div>
</div>