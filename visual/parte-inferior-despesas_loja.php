<div class="linhaprincipal">
    <?php
        require_once("controle/con_cadastro_fornecedor.php");
        $arrFornecedores = fornecedoresCadastrados();
        while($arrFornecedor = $arrFornecedores->fetch_assoc() ){
            print("<div class=\"linhaform\">");
            print(  "<img src='incluir/mult/img/{$arrFornecedor['cartao']}'");
            print("</div>");
        }
    ?>
</div>
