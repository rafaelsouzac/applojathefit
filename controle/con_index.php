<?php

require_once('../modelo/mdl_index.php');

if(isset($_POST['usuario']) || isset($_POST['senha']))
{
    
    $strUsuario = $_POST['usuario'];
    $strSenha = $_POST['senha'];

    $retTemUsuario = TemUsuario($strUsuario, $strSenha);

    if($retTemUsuario['tem'] == '1')
    {
        session_start();
        
        $_SESSION['vendas'] = array('produto' => array(), 
            'quantidade' => array(), 'valor' => array(), 
            'codigobarra'=> array() );
        $_SESSION['vendas']['usuario'] = $strUsuario;
        $_SESSION['vendas']['relatoriousuario'] = "";
        $_SESSION['vendas']['aberta'] = 'n';
        $_SESSION['vendas']['frase'] = '0';
        $_SESSION['vendas']['nivelacesso'] = $retTemUsuario['nivelacesso'];
        $_SESSION['contagem']['aberta'] = 'n';

        $idsessao = session_id();
        
        $retAddUser = adicionasessao($strUsuario);
        
        if($retAddUser == 1)
        {
            header("Location: ../vendas.php?#ses={$idsessao}");
        }
        else
        {
            header("Location: ../erros.php?indice=2");
        }
    }
    else
    {
        header("Location: ../erros.php?indice=1");
    }
}
else
{
    header("Location: ../erros.php?indice=0");
}