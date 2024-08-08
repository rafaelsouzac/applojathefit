<?php
header("Content-type: text/html; charset=utf-8");

include_once 'mdl_banco.php';

function cadastraFornecedor($strNomeFoto="0.png"){
    $exec = acesso();
    $strSql = " insert into fornecedores(cartao) values ('".$strNomeFoto."')";
    $exec->query($strSql);
    finalizar($exec);
    return true;
}

function buscaFornecedores(){
    $exec = acesso();
    $strSql = " select idfornecedor, cartao from fornecedores";
    $arrRetorno = $exec->query($strSql);
    finalizar($exec);
    return $arrRetorno;
}