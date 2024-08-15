<header>
<div class="menu">
        <div class="dropdown">
            <span>Menu</span>
            <div class="dropdown-content">
                <a href="#"></a>
                <div class="submenu">
                    <span>Vendas</span>
                    <div class="submenu-content">
                        <a href="vendas.php">Registrar Vendas</a>
                        <!--<a href="trocas.php">Troca de Produtos</a>-->
                        <a href="relatorio_vendas.php">Relatór. Valor Dia</a>
                        <a href="relatorio_vendas_vendedor.php">Rel. Por Vendedor</a>
                        <a href="relatorio_detalhado_vendas.php">Relat. Por Venda</a>
                    </div>
                </div>
                <a href="#">---------</a>
                <div class="submenu">
                    <span>Cadastros</span>
                    <div class="submenu-content">
                        <a href="cadastro_produto.php">Produto</a>
                        <a href="cadastro_fornecedor.php">Fornecedor</a>
                        <a href="cadastro_fornecedor.php">Fornec.-Prod.</a>
                        <a href="cadastro_despesas_loja.php">Despesas Loja</a>
                        <a href="">Despesas Func.</a>
                    </div>
                </div>
                <a href="#">---------</a>
                <div class="submenu">
                    <span>Contagem</span>
                    <div class="submenu-content">
                        <a href="contagem_estoque.php">Estoque</a>
                    </div>
                </div>
                <a href="#">---------</a>
                <a href="lista_produto.php">Lista de Prod.</a>

                <a href="<?php 
                            $endereco = $_SESSION['infolocais']['endereco'];
                            $dir      = $_SESSION['infolocais']['dir'];

                            echo("{$dir}controle/con_menu_sair.php");?>">Sair</a>
            </div>
        </div>
    </div>
</header>
