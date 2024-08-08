<?php 
header("Content-type: text/html; charset=utf-8");

if(session_status() !== PHP_SESSION_ACTIVE){
    header("Location: erros.php?indice=4");
}
else{
    $dir = dirname(__FILE__);
    $dir = substr($dir, 0,-6);
    $dir .="controle\\con_relatorio_vendas.php"; 
    

    include("{$dir}");

    if(isset($_GET['pg'])){
        //
    }else{
        $arrRelatorio[] = relatorioDia();
    }
    
    $dblSomaTotalVenda = 0.00;
    $intContador = 0;

    while($intContador < 4){
        if(empty($arrRelatorio[0]['total_valor'][$intContador])){
                $arrRelatorio[0]['total_valor'][$intContador] = 0;
        }else{
            $dblSomaTotalVenda += $arrRelatorio[0]['total_valor'][$intContador];            
        }

        $intContador++;
    }
}
?>

<table>
    <tr>
        <td>Total em dinheiro</td>
        <td>R$: <?php print_r($arrRelatorio[0]['total_valor'][0]);?></td>
    </tr>
    <tr>
        <td>Total em pix</td>
        <td>R$: <?php print_r($arrRelatorio[0]['total_valor'][1]);?></td>
    </tr>
    <tr>
        <td>Total em débito</td>
        <td>R$: <?php print_r($arrRelatorio[0]['total_valor'][2]);?></td>
    </tr>
    <tr>
        <td>Total em crédito</td>
        <td>R$: <?php print_r($arrRelatorio[0]['total_valor'][3]);?></td>
    </tr>
    <tr class="linha_total">
        <td>Total da venda</td>
        <td>R$: <?php print_r($dblSomaTotalVenda);?>.00</td>
    </tr>
</table>