<?php
header("Content-type: text/html; charset=utf-8");

// Ativa a exibição de erros
ini_set('display_errors', 1);

// Define o nível de relatório de erros
error_reporting(E_ALL);

include_once 'mdl_banco.php';

function TemUsuario($usuario, $senha) {

    $strSql = "select count(*) as tem, nivelacesso from acesso where "
            . "usuario = '{$usuario}' and senha = '{$senha}'";
    
    $execSql = acesso();
    $retBanco = $execSql->query($strSql);
    $retDaFunc = $retBanco->fetch_assoc();
    print_r($retDaFunc);
    finalizar($execSql);
    return $retDaFunc;
}

function adicionasessao($strusuario) {
    $dataHoje = date("Y-m-d");
    $strSql = "INSERT INTO `acessoregistro`( `usuario`, "
            . "`dataregistro`) "
            . "VALUES ('{$strusuario}','{$dataHoje}')";
    
    $execSql = acesso();
    $execSql->query($strSql);
    $retDaFunc = $execSql->affected_rows;

    finalizar($execSql);
    
    return $retDaFunc;
}