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
<?php
$bolLinha = False;

if(isset($_GET['cad'])){
    $intCad = $_GET['cad'];
    $bolLinha = True;
    if($intCad){
        $strRetorno = "Cadastrado com Sucesso";
    }
    else{
        $strRetorno = "Não Cadastrado";
    }
}
?>
<div class="linhaprincipal">
  <form action="controle/con_cadastro_fornecedor.php" method="post" enctype="multipart/form-data">
<?php
if($bolLinha){
?>
<div class="linhaform">
    <p><?php echo($strRetorno); ?></p>
</div>
<?php
}
?>
  <div class="linhaform">
	    <label for="imagem">Cartão Fornecedor:</label>
	    <input type="file" id="imagem" name="imagem" accept="image/*"><br>
	</div>
	<div class="linhaform">
		<div class="linhabotao">
		  <input id="botaoenvio" type="submit" value="Enviar">
		</div>
	</div>

  </form>
</div>
