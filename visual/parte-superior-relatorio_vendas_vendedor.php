<div class="linha">
    <div class="coluna">
        <img src="incluir/mult/img/logo_thefit.gif" height="90" width="90">
    </div>
    <div class="coluna">        
        <?php
            if($_SESSION['vendas']['nivelacesso'] == 1){
                include './visual/menu-vendedor.php';    
            }
            else{
                include './visual/menu-adm.php';
            }
        ?>
    </div>
</div>
<div class="linha">
    <form id="formulario" action="controle/con_relatorio_vendas_vendedor.php" method="post">
        <input type="hidden" name="action" value="1">
        <label for="vendedores">Vendedor:</label>
        <select id="vendedor" name="vendedor">
            <option value=""></option>
            <option value="rafaelsouzac@gmail.com">Rafael</option>
            <option value="cinara@lojathefit.com.br">Cinara</option>
            <option value="taila@lojathefit.com.br">Taila</option>
            <option value="natiele@lojathefit.com.br">Natiele</option>
        </select>        
        <button id="botao-add" type="submit">Relatório Det.</button>
    </form>
</div>