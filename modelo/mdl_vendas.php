<?php
include_once 'mdl_banco.php';

/********  FUNCTIONS ******************************************/

function alteraStatusPedido(){
    $strSql = "update pedidos set aberto = 'F' where idpedido = {$_SESSION['vendas']['idpedido']}";
    
    $execSql = acesso();
    $execSql->query($strSql);

    return;
}

function persiteProdutosPedido(){
    $intNumItens = count($_SESSION['vendas']['codigobarra']);
    $intContador = 0;
    while($intContador < $intNumItens){
        $strSql = "insert into produtospedidos(codigobarra, idpedido, quantidade) values('{$_SESSION['vendas']['codigobarra'][$intContador]}',{$_SESSION['vendas']['idpedido']},{$_SESSION['vendas']['quantidade'][$intContador]})";
        $execSql = acesso();
        $execSql->query($strSql);
        $intContador++;        
    }
    return;
}

function persisteValorPedido($arrTipoPagamento){

    $intContador = 0;
    $intTamanhoArray = count($arrTipoPagamento['tipo']);
    
    $execSql = acesso();

    while($intContador < $intTamanhoArray){

        $strSql = "insert into valorespedidos(idpedido, tipopagamento, valor) values({$_SESSION['vendas']['idpedido']}, '{$arrTipoPagamento['tipo'][$intContador]}', '{$arrTipoPagamento['valor'][$intContador]}')";
        $execSql->query($strSql);        
        $intContador++;
    }

    finalizar($execSql);
}

function apagaInfoCarrinho(){
    
    apagaSessionPedido();

    $_SESSION['vendas']['aberta'] = 'n';
    $_SESSION['vendas']['frase'] = '1';

    return;
}

function finalizarVenda($arrTipoPagamento){

    //persiste produtos do pedido
    persiteProdutosPedido();

    //persiste valores do pedido
    persisteValorPedido($arrTipoPagamento);

    //Altera status do pedido para finalizado
    alteraStatusPedido();

    //Apaga informações do carrino
    apagaInfoCarrinho();

    return;
}

function codigoValido($intcodigo){

    $strSql = "SELECT * FROM produtos WHERE codigobarras = '$intcodigo'";
    $execSql = acesso();
    $retBanco = $execSql->query($strSql);
    
    if ($retBanco->num_rows > 0) 
    {
        finalizar($execSql);
        return True;
    } else 
    {
        finalizar($execSql);
        return False;
    }
    
}

function alterarQuantidade($codigodebarra, $quantidade){

    $intIndiceArray = array_search($codigodebarra, $_SESSION['vendas']['codigobarra']);

    $_SESSION['vendas']['quantidade'][$intIndiceArray] = $quantidade;

    return;
}

function apagaSessionPedido($intIndiceArray = NULL){

    if($intIndiceArray === NULL ){

        unset($_SESSION['vendas']['produto']);
        $_SESSION['vendas']['produto'] = array();
        unset($_SESSION['vendas']['quantidade']);
        $_SESSION['vendas']['quantidade']= array();
        unset($_SESSION['vendas']['valor']);
        $_SESSION['vendas']['valor']= array();
        unset($_SESSION['vendas']['codigobarra']);
        $_SESSION['vendas']['codigobarra']= array();
        unset($_SESSION['vendas']['nomeimagem']);
        $_SESSION['vendas']['nomeimagem']= array();
        unset($_SESSION['vendas']['descricao']);
        $_SESSION['vendas']['descricao']= array();    
        unset($_SESSION['vendas']['idpedido']);
    }else{
        unset($_SESSION['vendas']['produto'][$intIndiceArray]);
        unset($_SESSION['vendas']['quantidade'][$intIndiceArray]);
        unset($_SESSION['vendas']['valor'][$intIndiceArray]);
        unset($_SESSION['vendas']['codigobarra'][$intIndiceArray]);
        unset($_SESSION['vendas']['nomeimagem'][$intIndiceArray]);
        unset($_SESSION['vendas']['descricao'][$intIndiceArray]);

    }
    return;
}

function apagaProduto($codigodebarra){

    $intIndiceArray = array_search($codigodebarra, $_SESSION['vendas']['codigobarra']);

    apagaSessionPedido($intIndiceArray);  

    if(count($_SESSION['vendas']['codigobarra']) == 0){
        $_SESSION['vendas']['aberta'] = 'n';
    }
    
    return;
}


function registrapedido(){
    $strSql = "LOCK TABLES pedidos WRITE; ";

    $execSql = acesso();
    $execSql->query($strSql);

    $strSql = "insert into pedidos(usuario)values('".$_SESSION['vendas']['usuario']."');";
    $execSql->query($strSql);

    $strSql = "UNLOCK TABLES;";
    $execSql->query($strSql);

    $strSql = "select idpedido from pedidos order by idpedido desc limit 0,1";
    $retBanco = $execSql->query($strSql);
    $intIdPedido = $retBanco->fetch_assoc();
    $_SESSION['vendas']['idpedido'] = $intIdPedido["idpedido"];

    return;
}

function adicionavendas($intCodigoBarra) 
{

    // Consulta SQL
    $strSql = "SELECT p.idproduto, p.titulo, p.descricao, p.codigobarras, vp.tipopagamento, vp.valorproduto, pi.nomeimagem
            FROM produtos p
            INNER JOIN valorprodutos vp ON p.idproduto = vp.idproduto inner join
            produtoimagem pi on pi.idproduto = p.idproduto
            WHERE p.codigobarras = '$intCodigoBarra' and vp.tipopagamento = 'Di'
            order by vp.idvalorproduto desc LIMIT 1";

    $execSql = acesso();
    $retBanco = $execSql->query($strSql);

    while ($row = $retBanco->fetch_assoc()) {
        $intIndiceArray = array_search($intCodigoBarra, 
                $_SESSION['vendas']['codigobarra']);
        if($intIndiceArray !== False)
        {
            $_SESSION['vendas']['quantidade'][$intIndiceArray]++;          
        }
        else
        {
            $_SESSION['vendas']['idpedido'] = 0;
            $_SESSION['vendas']['aberta'] = 's';
            $_SESSION['vendas']['produto'][] = $row["titulo"];
            $_SESSION['vendas']['codigobarra'][] = $intCodigoBarra;
            $_SESSION['vendas']['quantidade'][]++;
            $_SESSION['vendas']['valor'][] = $row["valorproduto"];
            $_SESSION['vendas']['nomeimagem'][] = $row["nomeimagem"];
            $_SESSION['vendas']['descricao'][] = $row["descricao"];
            registrapedido();
        }
    }

    finalizar($execSql);    

    return;       
}