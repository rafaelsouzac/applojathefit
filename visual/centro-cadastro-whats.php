<div class="form-container">
    <h3>Cadastro do whats clientes</h3>
    <form action="controle/con_cadastro_whats_vendas.php" method="post">
        <input type="hidden" id="idpedido" name="idpedido" value="<?php echo($int_id_pedido); ?>">
        <div class="form-group">
            <label for="phone">Número de Telefone:</label>
            <input type="text" id="phone" name="phone" placeholder="(xx)xxxxx-xxxx" maxlength="15">
        </div>
        <div class="form-group">
            <label for="nomecliente">Nome do Cliente:</label>
            <input type="text" id="nomecliente" name="nomecliente" required>
        </div>
        <?php echo($str_campo_extra); ?>
        <div class="form-group-button">
            <button type="submit">Cadastrar</button>
            <a href="vendas.php"> Não Cadastrar </a>
        </div>
    </form>
</div>