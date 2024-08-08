<?php 
    header("Content-type: text/html; charset=utf-8");
    if(session_status() == PHP_SESSION_ACTIVE){
        unset($_SESSION);
        session_destroy();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loja The Fit - Centro Popular de Compra - Corredor 6 - Loja 454 - Porto Alegre - RS</title>
    <link href="incluir/css/base_pagina.css" rel="stylesheet" type="text/css" />
    <link href="incluir/css/index.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="logo"><img src="incluir/mult/img/logo_thefit.gif" /></div>
        <!-- DIV DO CORPO -->
            <div id="tabelacorpo">
                <form action="controle/con_index.php" name="" method="post">
                <input type="hidden" name="pagina" value="index">
                    <table>
                        <tbody>
                            <tr>
                                <td><input tabindex="0" class="acesso" name="usuario" type="text" placeholder="Nome de usu&aacute;rio" value="rafaelsouzac@gmail.com"></td>
                                <td rowspan="2"><button tabindex="2" name="acesso" id="btacesso"> Acessar Sistema</button></td>
                            </tr>
                            <tr>
                                <td><input tabindex="1" class="acesso" name="senha" type="password" placeholder="Senha do usu&aacute;rio" value="123456"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        <!-- FIM DIV DO CORPO -->
    </body>
<html>