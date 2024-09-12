<?php
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);
if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}
$dir = dirname(__FILE__);
$dir = substr($dir, 0,-8);

$dirinclude = $dir;
$dirinclude .="controle".$barra."con_relatorio_vendas.php"; 

$strCaminho = __DIR__;
$intTamanho = strlen($strCaminho);
$subString = $intTamanho - 8;
$strCaminho = substr($strCaminho, 0, $subString);
if($so == 'linux'){
    $strCaminho = str_replace("'\'","'/'",$strCaminho);
    $strCaminho = $strCaminho."/modelo/mdl_cadastro_whats_pedidos.php";
}else{
    $strCaminho = $strCaminho."\\modelo\\mdl_cadastro_whats_pedidos.php";
}

require_once($strCaminho);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['idpedido'])){
        $int_id_pedido = $_POST['idpedido'];
        $str_nome_usuario = $_POST['nomecliente'];
        $str_texto_extra = $_POST['textoextra'];
        
        $str_telefone_whats = preg_replace('/\D/', '',$_POST['phone']);
        
        if(strlen($int_id_pedido) == 0){
            $int_id_pedido = NULL;
        }

        CadastroWhats($int_id_pedido, $str_nome_usuario, $str_telefone_whats, $str_texto_extra);
        
        if(strlen($str_texto_extra) == 0){
            header("location: ../vendas.php?erropg=3");
        }else{
            header("location: ../cadastro_whats_vendas.php");
        }
    }
    else{
        header("Location: ../erros.php?indice=7");        
    }
}

if(isset($_GET['ped'])){
    $int_id_pedido = $_GET['ped'];

    $int_cadastro_whats = VerificaCadastroWhats($int_id_pedido);

    if($int_cadastro_whats == 0){
        //cadastrar usuario enviando id do pedido.
    }
    else{
        //buscar id do usuario na tabela clientepedido
        //buscar numero whats na tabela clientes
        //enviar recibo.
    }
}
?>