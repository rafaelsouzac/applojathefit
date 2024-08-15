<?php 
header("Content-type: text/html; charset=utf-8");

if(session_status() !== PHP_SESSION_ACTIVE){
    header("Location: erros.php?indice=4");
}
else{
    $so = php_uname('s');
    $so = strtolower($so);
    
    $dir = dirname(__FILE__);
    
    $dir = substr($dir, 0,-8);
    
    if($so == 'linux'){
        $barra = "/";
    }else{
        $barra = "\\";
    }
    
    $dirinclude = $dir;
    $dirinclude .="controle".$barra."con_relatorio_vendas_vendedor.php"; 
    include("{$dirinclude}");

    if(isset($_GET['pg'])){
        $str_usuario = $_GET['pg'];
        $arrRelatorio[] = relatorioDia($str_usuario);
    }else{
        if($intAcao = "semacao"){
            exit();
        }
    }
    
    $dblSomaTotalVenda = 0.00;
    $intContador = 0;
    
    $arr_tipopagamento_valor = array("tipopagamento"=>array(), "valor"=>array());
    $arr_tipopagamento_valor['tipopagamento'][0] = "Dinheiro";
    $arr_tipopagamento_valor['tipopagamento'][1] = "Pix";
    $arr_tipopagamento_valor['tipopagamento'][2] = "Débito";
    $arr_tipopagamento_valor['tipopagamento'][3] = "Crédito";
    $arr_tipopagamento_valor['valor'][0] = 0;
    $arr_tipopagamento_valor['valor'][1] = 0;
    $arr_tipopagamento_valor['valor'][2] = 0;
    $arr_tipopagamento_valor['valor'][3] = 0;
    while($intContador < 4){
        
        if(!empty($arrRelatorio[0]['total_valor'][$intContador])){

            $str_case = $arrRelatorio[0]['tipopagamento'][$intContador]; 

            switch($str_case){
                case "din":
                    $arr_tipopagamento_valor['valor'][0] += $arrRelatorio[0]['total_valor'][$intContador];
                    break;
                case "pix":
                    $arr_tipopagamento_valor['valor'][1] += $arrRelatorio[0]['total_valor'][$intContador];
                    break;
                case "deb":
                    $arr_tipopagamento_valor['valor'][2] += $arrRelatorio[0]['total_valor'][$intContador];
                    break;
                case "cre":
                    $arr_tipopagamento_valor['valor'][3] += $arrRelatorio[0]['total_valor'][$intContador];
                    break;
            }
            $dblSomaTotalVenda += $arrRelatorio[0]['total_valor'][$intContador];            
        }
        $intContador++;
    }

    $str_usuario = $str_usuario;
    $int_caracter_arroba = strpos($str_usuario, "@");
    $str_usuario = substr($str_usuario, 0, $int_caracter_arroba);
    $str_usuario = ucfirst($str_usuario);
}
?>

<table>
<tr class="linha_total">
        <td>Vendedora</td>
        <td><?php echo($str_usuario);?></td>
    </tr>
<?php
    $intContador = 0;
    while($intContador < 4){
?>
    <tr>
        <td>Total em <?php print_r($arr_tipopagamento_valor["tipopagamento"][$intContador]);?></td>
        <td>R$: <?php print_r($arr_tipopagamento_valor["valor"][$intContador]);?>.00</td>
    </tr>
<?php
    $intContador++;
    }
?>
    <tr class="linha_total">
        <td>Total da venda</td>
        <td>R$: <?php print_r($dblSomaTotalVenda);?>.00</td>
    </tr>
</table>