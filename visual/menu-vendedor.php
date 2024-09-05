<header>
    <div class="menu">
        <div class="dropdown">
            <span>Menu</span>
            <div class="dropdown-content">
            <a href="vendas.php">Registrar Vendas</a>
                <a href="cadastro_produto.php">Cadastrar Produto</a>
                <a href="lista_produto.php">Lista de Produtos</a>

                <a href="<?php 
                            $endereco = $_SESSION['infolocais']['endereco'];
                            $dir      = $_SESSION['infolocais']['dir'];

                            echo("{$dir}controle/con_menu_sair.php"); ?>">Sair</a>
            </div>
        </div>
    </div>
</header>
