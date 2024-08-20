<?php 
    header("Content-type: text/html; charset=utf-8");

    // Ativa a exibição de erros
    ini_set('display_errors', 1);

    // Define o nível de relatório de erros
    error_reporting(E_ALL);

    if(isset($_GET['indice']))
    {
        $intIndice = $_GET['indice'];
        switch ($intIndice) {
            case 0:
                $strErro = "Acesso indevido a página.";
                break;
            case 1:
                $strErro = "Senha ou usuário inválido.";
                break;
            case 2:
                $strErro = "Problema ao iniciar sessão do usuário.";
                break;
            case 3:
                $strErro = "Código do Produto Inexistente.";
                break;
            case 4:
                $strErro = "Solicitação Invalida.";
                break;
            case 5:
                $strErro = "Erro no preenchimento do formulário.";
                break;
            case 6:
                $strErro = "Não foi possivel deletar a venda.";
                break;    
            default:
                break;
        }
    }
    else
    {
        $strErro = "Acesso Invalido.";
    }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loja The Fit - Centro Popular de Compra - Corredor 6 - Loja 454 - Porto Alegre</title>
    <link href="incluir/css/erros.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="logo"><img src="incluir/mult/img/logo_thefit.gif" /></div>
        <!-- DIV DO CORPO -->
        <div class="custom-div">
            <b><?php echo($strErro); ?></br></br> <a href="index.php" class="custom-link">Aperte aqui para pagina inicial</a>.
        </div>
        <!-- FIM DIV DO CORPO -->
    </body>
</html>
