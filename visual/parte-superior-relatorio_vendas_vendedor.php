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
    <form id="formulario" action="controle/con_relatorio_detalhado_vendas.php" method="post">
        <input type="hidden" name="action" value="1">
        <!--<button id="botao-add" type="submit">Relatório Det.</button>-->
    </form>
</div>