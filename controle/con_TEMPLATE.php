<?php
    header("Content-type: text/html; charset=utf-8");
    
    //status da página
    // 0 = primeira chamada do usuário
    
    if(isset($_GET['status']))
    {
        
    }
    else
    {
        header("Location: ../erros.php?indice=0");
    }