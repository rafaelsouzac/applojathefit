<header>
    <div class="menu">
        <div class="dropdown">
            <span>Menu</span>
            <div class="dropdown-content">
                <a href="#">Vendas</a>
                <a href="<?php 
                            $endereco = $_SESSION['infolocais']['endereco'];
                            $dir      = $_SESSION['infolocais']['dir'];

                            echo("{$dir}controle/con_menu_sair.php"); ?>">Sair</a>

            </div>
        </div>
    </div>
</header>
