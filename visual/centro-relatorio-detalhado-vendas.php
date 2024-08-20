<?php
$int_tabela_pedidos = count($ret_relatorio_datalhado['tabela_pedidos']['idpedido']);
$int_cont_pedidos = 0;

$dbl_valor_compra = 0.00;
$str_vendedor = "";

while($int_cont_pedidos < $int_tabela_pedidos){
    $int_pos_arroba = strpos($ret_relatorio_datalhado['tabela_pedidos']['usuario'][$int_cont_pedidos], "@");
    $str_vendedor = substr($ret_relatorio_datalhado['tabela_pedidos']['usuario'][$int_cont_pedidos], 0, $int_pos_arroba);
    $str_tipo_pagamento = $ret_relatorio_datalhado['tabela_valores_pedidos'][$int_cont_pedidos]['tipopagamento'][0];
?>
<div class="rel_det">
    <div>
        <table>
                <tbody>
                    <tr>
                        <td class="td-totalcompra">
                            Vendedor - <?php echo("{$str_vendedor}"); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td style="width:50%;">
                    Item
                    </td>
                    <td style="width:20%;">
                    Quant.
                    </td>
                    <td style="width:30%;">
                    Valor
                    </td>
                </tr>
                <?php
                    $int_cont_produtos_pedidos_quantidade = count($ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['titulo']);
                    $int_controle = 0;
                    while($int_controle < $int_cont_produtos_pedidos_quantidade){
                ?>
                <tr>
                    <td style="width:50%;">
                        <?php print_r($ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['titulo'][$int_controle]);?>
                    </td>
                    <td style="width:20%;">
                        <?php print_r($ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle]);?>
                    </td>
                    <td style="width:30%;">
                    <?php print_r($ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle]);?>
                    </td>
                </tr>
                <?php
                    $dbl_valor_compra += $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle] *  $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle];
                    $int_controle++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td style="width:70%;" class="td-totalcompra">
                        Total Compra - <?php echo("$str_tipo_pagamento"); ?>
                    </td>
                    <td style="width:30%;">
                        R$ <?php echo("{$dbl_valor_compra}.00")?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td style="width:70%;" class="td-totalcobrado">
                        Total Cobrado - <?php echo("$str_tipo_pagamento"); ?>
                    </td>
                    <?php
                        if($dbl_valor_compra <= $ret_relatorio_datalhado['tabela_valores_pedidos'][$int_cont_pedidos]['valor'][0]){
                    ?>
                        <td style="width:30%;">
                            R$ <?php echo("{$ret_relatorio_datalhado['tabela_valores_pedidos'][$int_cont_pedidos]['valor'][0]}")?>
                        </td>
                    <?php
                        }else{
                    ?>
                        <td style="width:30%; background:yellow">
                            R$ <?php echo("{$ret_relatorio_datalhado['tabela_valores_pedidos'][$int_cont_pedidos]['valor'][0]}")?>
                        </td>
                    <?php                            
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td class="apagar">
                        <a href="controle/con_relatorio_detalhado_vendas.php?ped=<?php echo("{$ret_relatorio_datalhado['tabela_pedidos']['idpedido'][$int_cont_pedidos]}"); ?>">Apagar</a>
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>
</div>
<?php
$int_cont_pedidos++;
$dbl_valor_compra = 0.00;
}
?>