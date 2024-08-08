<div class="central">
        <?php
            
            $strCaminho = __DIR__;
            $intTamanho = strlen($strCaminho);
            $subString = $intTamanho - 6;
            $strCaminho = substr($strCaminho, 0, $subString);
            $strCaminho = str_replace("'\'","'\\'",$strCaminho);
            $strCaminho = $strCaminho."\\controle\\con_contagem-estoque.php";
            require_once ($strCaminho);

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
                        <img class="image" src="incluir/mult/img/<?php echo("".$arrContagem['produto'][$intContIndice].""); ?>" 
                             width="40" height="60" alt="<?php echo("".$arrContagem['produto'][$intContIndice]."");?>">
                    </div>
                    <div class="coluna-desc">
                        <div class="linha">
                            <div class="coluna-quant">
                                <form action="controle/con_vendas.php" method="post" name="selecaopagamento" enctype="application/x-www-form-urlencoded">                            
                                <input id="campo-texto-quantidade" name="quantidade" type="text" placeholder="" value="<?php  echo("".$arrContagem['quantidade'][$intContIndice]."")?>">
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
