    <?php
    if($ret_relatorio_datalhado == 0){
        echo("<div class=\"registro\">");
        echo("<p >Não há registros de vendas no dia de hoje.</p>");
        echo("</div>");
    } ////////////////////////////////////////////////////////////////////////////////////////////////
    else{    
        $int_tabela_pedidos = count($ret_relatorio_datalhado['tabela_pedidos']['idpedido']);
        $int_cont_pedidos = 0;
        $dbl_valor_compra = 0.00;
        $str_vendedor = "";
        
        while($int_cont_pedidos < $int_tabela_pedidos){
            $str_produtos_mensagem_link_whats = "";
            $str_mensagem_link_whats = "";
            $int_pos_arroba = strpos($ret_relatorio_datalhado['tabela_pedidos']['usuario'][$int_cont_pedidos], "@");
            $str_vendedor = substr($ret_relatorio_datalhado['tabela_pedidos']['usuario'][$int_cont_pedidos], 0, $int_pos_arroba);
            $str_tipo_pagamento = $ret_relatorio_datalhado['tabela_valores_pedidos'][$int_cont_pedidos]['tipopagamento'][0];
            $str_nome_cliente = $ret_relatorio_datalhado['cliente_whatsapp'][$int_cont_pedidos]['nomecliente'][0];
            $str_whatsapp_cliente = $ret_relatorio_datalhado['cliente_whatsapp'][$int_cont_pedidos]['whatsapp'][0];

            $str_data_pedido = $ret_relatorio_datalhado['tabela_pedidos']['dataregistro'][$int_cont_pedidos];
            $str_data_pedido = substr($str_data_pedido, 8, 2)."/".substr($str_data_pedido, 5, 2)."/".substr($str_data_pedido, 0, 4);
            $str_mensagem_link_whats = "Recibo de compra.\nObrigado $str_nome_cliente pela sua compra,\nficamos muito felizes pela sua escolha.\nAbaixo descrição da compra efetuada no dia: $str_data_pedido.\n\n";
        
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
                                <?php 
                                    $str_titulo = $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['titulo'][$int_controle]; 
                                    print_r($str_titulo);
                                ?>
                            </td>
                            <td style="width:20%;">
                                <?php 
                                    $int_quantidade_produto = $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle];
                                    print_r($int_quantidade_produto);
                                ?>
                            </td>
                            <td style="width:30%;">
                            <?php
                                if($str_tipo_pagamento == 'cre'){
                                    $dbl_valor_produto = $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle]+5;
                                    print_r($dbl_valor_produto);
                                } else{
                                    $dbl_valor_produto = $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle];
                                    print_r($dbl_valor_produto);
                                }
                                    $str_produtos_mensagem_link_whats .= "Produto: $str_titulo\nQuantidade: $int_quantidade_produto\nValor Unitário: R$ $dbl_valor_produto\n\n";
                            ?>
                            </td>
                        </tr>
                        <?php
                            if($str_tipo_pagamento == 'cre'){
                                $int_acrecimo =  $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle] * 5;
                                $dbl_valor_compra += $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle] *  $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle] + $int_acrecimo;
                            }else{
                                $dbl_valor_compra += $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['quantidade'][$int_controle] *  $ret_relatorio_datalhado['produtos_pedidos_quantidade'][$int_cont_pedidos]['valorproduto'][$int_controle];
                            }
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
                                <?php
                                        ///FORMAT STRING PARA ENVIO POR WHATSAPP
                                        $str_final_mensagem_whats = "------------------------------\nvalor total compra: R$ $dbl_valor_compra.00\n------------------------------\nVeja nossas novidades no\nInstagram ou Facebook: @lojathefit\n";
                                        $str_mensagem_link_whats .= $str_produtos_mensagem_link_whats.$str_final_mensagem_whats;
                                        $str_mensagem_link_whats = urlencode($str_mensagem_link_whats);
                                    ?>
                                <a href="controle/con_relatorio_detalhado_vendas.php?ped=<?php echo("{$ret_relatorio_datalhado['tabela_pedidos']['idpedido'][$int_cont_pedidos]}"); ?>">Apagar</a>
                            </td>
                            <td>
                            <?php
                                //buscar info se há cadastro do whats para envio ou se tem que cadastrar usuario.
                            ?>
                            <a href="https://wa.me/55<?php print($ret_relatorio_datalhado['cliente_whatsapp'][$int_cont_pedidos]['whatsapp'][0]);?>?text=<?php echo($str_mensagem_link_whats);?>">Enviar Recibo Por Whats</a>
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
}
    ?>