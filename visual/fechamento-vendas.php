<div class="fechamento">
    <form id="formulario" action="controle/con_vendas.php" method="post">
        <input type="hidden" name="funcaocarrinho" value="4">
        <div class="valor-pagamento"> 
            <input clas="campo-valor" id="din" name="din" value="<?php echo($dblValorTotalCompra); ?>" type="text">
            <input clas="campo-valor" id="pix" name="pix" value="<?php echo($dblValorTotalCompra); ?>" type="text"placehold="Qual o valor em Pix">
            <input clas="campo-valor" id="deb" name="deb" value="<?php echo($dblValorTotalCompra); ?>" type="text"placehold="Qual o valor em débito">
            <input clas="campo-valor" id="cre" name="cre" value="<?php echo($dblValorTotalCompraCredito); ?>" type="text" placehold="Qual o valor em crédito">
        </div>
        <div class="tipo-pagamento">
            <div class="labe-input">
                <label name="din">R$:</label>
                <input type="checkbox" checked="checked" name="pagamento[]" value="din" onchange="toggleField('din')">
            </div>
            <div class="labe-input">
                <label name="pix">Pix:</label>
                <input type="checkbox" name="pagamento[]" value="pix" onchange="toggleField('pix')">
            </div>
            <div class="labe-input">
                <label name="debito">Débito:</label>
                <input type="checkbox" name="pagamento[]" value="deb" onchange="toggleField('deb')">
            </div>
            <div class="labe-input">
                <label name="credito">Crédito:</label>
                <input type="checkbox" name="pagamento[]" value="cre" onchange="toggleField('cre')">
            </div>
        </div>
        <div class="botao-finalizar">
            <div class="bto-finaliza-compra">
                <button>Finalizar Venda - Itens: <?php echo($intItensTotal); ?> </button>
            </div>
        </div>
    </form>
</div>
