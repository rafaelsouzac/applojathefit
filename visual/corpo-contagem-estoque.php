<div class="central">
        <?php
            $so = php_uname('s');
            $so = strtolower($so);
            if($so == 'linux'){
                $barra = "/";
            }else{
                $barra = "\\";
            }
            $dir = dirname(__FILE__);
            $dir = substr($dir, 0,-6);
            $dirinclude = $dir;
            $dirinclude .="controle".$barra."con_contagem-estoque.php"; 
            include("{$dirinclude}");
        

            $arrContagem = RelatorioContagem();
            $intContIndice = 0;
            $intFimIndice = count($arrContagem["produto"]);
            $intTotalProdutosContados = 0;
            
            while($intContIndice < $intFimIndice){
                $intTotalProdutosContados +=    $arrContagem['quantidade'][$intContIndice];
        ?>
            <div class="conteudo-venda">
                <div class="linha">
                    <div class="coluna-img">
                        <?php echo("".$arrContagem['produto'][$intContIndice]."");?>
                    </div>
                    <div class="coluna-desc">
                        <div class="linhaform">
                            <div class="coluna-quant">
                                <form action="controle/con_vendas.php" method="post" name="selecaopagamento" enctype="application/x-www-form-urlencoded">                            
                                <button id="botao-add" type="submit">Apagar</button>
                            </div>
                            <div class="coluna-quant">
                                <input id="campo-texto-quantidade" name="quantidade" type="text" placeholder="" value="<?php  echo("".$arrContagem['quantidade'][$intContIndice]."")?>">
                            </div>
                            <div class="coluna-quant">
                            <button id="botao-add" type="submit">Atualizar</button>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div> 
            <hr><!-- ate aqui vai a dive dos produtos -->
        <?php
            $intContIndice++;
            }
        ?>
    </form>
</div>
