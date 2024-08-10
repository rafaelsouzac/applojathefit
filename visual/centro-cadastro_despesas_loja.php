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
  <form action="controle/con_cadastro_despesas_loja.php" method="post" enctype="multipart/form-data">
<?php
if($bolLinha){
?>
<div class="linhaform">
    <p><?php echo($strRetorno); ?></p>
</div>
<?php
}
?>
  <div class="linhaformsuperior">
    <div>
      <span>Valor:</span>
    </div>
    <div class="caixatexto">
    <input type="number" id="valor_despesa" name="valor_despesa" step="0.01" min="0" placeholder="0.00">
    </div>
  </div>
  <div class="linhaformsuperior">
    <div>
      <span>Com o que?:</span>
    </div>
    <div class="caixatexto">
      <input type="text" name="descricao">
    </div>
  </div>
  <div class="linhaformsuperior">
    <div class="linhabotao">
      <button>Cadastrar Despesas</button>
    </div>
  </div>

</form>
</div>