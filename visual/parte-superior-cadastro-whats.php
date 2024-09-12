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
