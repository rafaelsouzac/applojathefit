<?php
header("Content-type: text/html; charset=utf-8");

function acesso()
{
    if($_SERVER['SERVER_ADDR'] == '127.0.0.1' || 
       $_SERVER['SERVER_NAME'] == 'localhost')
    {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $basedados = "appthefit";  
        $charset = "utf8mb4";
    }
    else
    {
        $servidor = "localhost";
        $usuario = "u346918566_dbarafael";
        $senha = "Agileire#9183";
        $basedados = "u346918566_lojathefit";    
        $charset = "utf8mb4";
    }
        

    $conecxao = new mysqli($servidor, $usuario, $senha, $basedados);

    $conecxao->set_charset($charset);

    return $conecxao;
}

function finalizar($conectado = null)
{
    $retorno = mysqli_close($conectado);

    return $retorno;
}

function sqlSelecionaProduto()
{
    $conectar = acesso();

    $strSql = "s";

    $resultado_query = $conectar->query($strSql);

    while($arrRegistros = mysqli_fetch_array($resultado_query)) {
        $produtos['titulo'][] = $arrRegistros['titulo'];
        $produtos['idproduto'][] = $arrRegistros['idproduto'];
    }

    return $produtos;

    finalizar($conectar);

}

function executaSqlAcesso($strUsuario="", $strSenha="")
{
    $conectar = acesso();

    $strSql = "select usuario, senha from acesso
    where usuario = '".$strUsuario."' and senha = '".$strSenha."'";

    $resultado_query = $conectar->query($strSql);

    while($arrRegistros = mysqli_fetch_array($resultado_query)) {
        $intIdUsuario = $arrRegistros['idacesso'];
    }
    $num_registros = mysqli_num_rows($resultado_query);

    $arrRetorno = array();
    $arrRetorno['existe'] = $num_registros;
    $arrRetorno['idusuario'] = $intIdUsuario;

    return $arrRetorno;

   finalizar($conectar);
    
}

function executaSqlBuscaProdutoCarrinho($intCodProduto = 0, $sessaousuario = 0)
{
    if($intCodProduto == 0 or $sessaousuario == 0)
    {
        return -1;
    }
    else
    {
        $conectado = acesso();
        $strSql = "";
        $resultado_query = $conectado->query($strSql);
    }

}

function sqlInsereFornecedor($nomearquivo, $insta)
{
    $strSql = "insert into fornecedores(cartao, insta)";
    $strSql .= "values('".$nomearquivo."','".$insta."')";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    return $resultado_query; 

    finalizar($conectado);
}


function sqlInsereProduto($strTitulo, $strTamanho, $strDescricao)
{
    $strSql = "insert into produtos(titulo, tamanho, descricao, ativo)";
    $strSql .= "values('".$strTitulo."','".$strTamanho."','".$strDescricao."','1')";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    $strSql = "select idproduto from produtos where idproduto order by idproduto desc limit 0,1";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);
    $arrIdRegistroProduto = mysqli_fetch_array($resultado_query);

    return $arrIdRegistroProduto; 

    finalizar($conectado);

}


function sqlInsereValorProduto($idproduto, $valorD, $valorC, $valorCusto)
{
    $strSql = "insert into valoresproduto(idproduto, tipopagamento, ativo, valor)";
    $strSql .= "values(".$idproduto.",'Di','1', ".$valorD.")";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    $strSql = "insert into valoresproduto(idproduto, tipopagamento, ativo, valor)";
    $strSql .= "values(".$idproduto.",'Ca','1', ".$valorC.")";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    $strSql = "insert into valoresproduto(idproduto, tipopagamento, ativo, valor)";
    $strSql .= "values(".$idproduto.",'Cu','1', ".$valorCusto.")";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    finalizar($conectado);
}

function sqlInsereImagemProduto($idproduto, $nomeimagem)
{
    $strSql = "insert into produtoimagem(idproduto, nomeimagem)";
    $strSql .= "values(".$idproduto.", '".$nomeimagem."')";
    $conectado = acesso();
    
    $resultado_query = $conectado->query($strSql);

    finalizar($conectado);
}

function sqlSelecionaProdutos()
{
    $strSql = "select idproduto, titulo from produtos";
    $conectado = acesso();
    $resultado_query = $conectado->query($strSql);

    while($arrRegistro = mysqli_fetch_array($resultado_query))
    {
        $arrRetorno['idproduto'][] = $arrRegistro['idproduto'];
        $arrRetorno['titulo'][] = $arrRegistro['titulo'];
    }

    finalizar($conectado);

    return $arrRetorno;
}
?>
