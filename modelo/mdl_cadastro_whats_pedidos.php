<?php
header("Content-type: text/html; charset=utf-8");

include_once 'mdl_banco.php';

function CadastroWhats($idpedido = NULL, $strnomecliente = "",$strtelefonewhats = "", $textoextra="" ){

    $exec_sql = acesso();
    $str_sql = "insert into clientes (nomecliente, whatsapp, textoextra) values ('".$strnomecliente."','".$strtelefonewhats."','".$textoextra."')";
   
    $exec_sql->query($str_sql);

    if(is_null($idpedido)){
        return;
    }else{
        $int_id_cliente = $exec_sql->insert_id;
        $str_sql = "insert into clientepedido (idcliente, idpedido) values ($int_id_cliente, $idpedido)";
        $exec_sql->query($str_sql);
        return;
    }
}

function VerificaCadastroWhats($intIdPedido = 0){

    $exec_sql = acesso();

    $str_sql = "select count(idpedido) from clientepedido where idpedido = {$intIdPedido}";

    $int_ret_sql = $exec_sql->query($str_sql);

    return $int_ret_sql;
}