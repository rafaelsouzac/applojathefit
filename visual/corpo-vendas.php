<div class="central">
        <?php
            if(isset($_SESSION['vendas'])){

                $_SESSION['vendas']['codigobarra'] = array_values($_SESSION['vendas']['codigobarra']);
                $_SESSION['vendas']['valor'] = array_values($_SESSION['vendas']['valor']);
                $_SESSION['vendas']['quantidade'] = array_values($_SESSION['vendas']['quantidade']);
                $_SESSION['vendas']['produto'] = array_values($_SESSION['vendas']['produto']);
                $_SESSION['vendas']['nomeimagem'] = array_values($_SESSION['vendas']['nomeimagem']);

                $intTamanhoArray = count($_SESSION['vendas']['codigobarra']);
                $intContador = 0;
                $intItensTotal = 0;
                $dblValorTotalCompra = 0.00;
                $dblValorTotalCompraCredito = 0.00;
                $intAcrescimoCredito = 5; 
                
                while($intContador < $intTamanhoArray){ 
                    
                    $dblValorCartaoCredito = $_SESSION['vendas']['valor'][$intContador] + $intAcrescimoCredito;

                    $intItensTotal += $_SESSION['vendas']['quantidade'][$intContador];

                    $dblValorTotalCompra +=  $_SESSION['vendas']['valor'][$intContador] * $_SESSION['vendas']['quantidade'][$intContador];

                    $dblValorTotalCompraCredito += ($_SESSION['vendas']['valor'][$intContador] + $intAcrescimoCredito) * $_SESSION['vendas']['quantidade'][$intContador]; 
        ?>
            <div class="conteudo-venda">
                <div class="linha">
                    <div class="coluna-img">
                        <img class="image" src="incluir/mult/img/<?php echo("{$_SESSION['vendas']['nomeimagem'][$intContador]}")?>" 
                             width="40" height="60" alt="<?php echo("{$_SESSION['vendas']['produto'][$intContador]}"); ?>">
                    </div>
                    <div class="coluna-desc">
                        <?php echo("{$_SESSION['vendas']['produto'][$intContador]}"); ?><BR>
                    </div>
                    
                </div>
                <div class="linha">
                    <div class="coluna-alt">
                        <form action="controle/con_vendas.php" method="post" name="selecaopagamento" enctype="application/x-www-form-urlencoded">
                            <input type="hidden" name="codigobarra" value="<?php echo("{$_SESSION['vendas']['codigobarra'][$intContador]}"); ?>">
                            <input  name="quantidade"  type="hidden" placeholder="Quantidade" value="<?php echo("{$_SESSION['vendas']['quantidade'][$intContador]}"); ?>">
                            <input type="hidden" name="funcaocarrinho" value="3">
                            <input type="hidden" name="apagar" value="s">
                            <button class="bto-alt-apg">Apagar</button>
                        </form>
                    </div>
                    <div class="coluna-quant">
                        <form action="controle/con_vendas.php" method="post" name="selecaopagamento" enctype="application/x-www-form-urlencoded">
                            <input id="campo-texto-quantidade" name="quantidade" type="text" placeholder="<?php echo("{$_SESSION['vendas']['quantidade'][$intContador]}"); ?>" value="">
                    </div>
                    <div class="coluna-apg">

                            <input type="hidden" name="codigobarra" value="<?php echo("{$_SESSION['vendas']['codigobarra'][$intContador]}"); ?>">
                            <input type="hidden" name="funcaocarrinho" value="2">
                            <input type="hidden" name="alterar" value="s">
                            <button class="bto-alt-apg">Alterar</button>
                        </form>

                    </div>
                </div>
                <div class="linha">
                    <table width="95%">
                        <tr>
                            <td width="33%" align="left">R$ - Pix</td>
                            <td width="34%" align="center">Débito</td>
                            <td width="33%" align="right">Crédito</td>
                        </tr>
                        <tr>
                            <td width="33%" name="dinpix" align="left">
                        <?php echo("{$_SESSION['vendas']['valor'][$intContador]}"); ?>
                            </td>
                            <td width="34%" name="debito" align="center"><?php echo("{$_SESSION['vendas']['valor'][$intContador]}"); ?></td>
                            <td width="33%" name="credito" align="right">
                                <?php echo("{$dblValorCartaoCredito}"); ?>.00
                            </td>
                        </tr>
                    </table>
                </div>                
            </div> 
            <hr><!-- ate aqui vai a dive dos produtos -->
        <?php
                    $intContador++;
                }
            }
        ?>
    </form>
</div>
