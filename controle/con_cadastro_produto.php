<?php 
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);

$dir = dirname(__FILE__);

$dir = substr($dir, 0,-8);

if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}

$dirinclude = $dir;
$dirinclude .="modelo".$barra."mdl_cadastro_produto.php"; 
include("{$dirinclude}");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    // Função para validar e limpar dados do formulário
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validação do campo 'Imagem'
    if ($_FILES["imagem"]["name"] !== '') {


        function resizeImage($file, $output, $w, $h) {
            list($width, $height) = getimagesize($file);
            $src = imagecreatefromstring(file_get_contents($file));
            $dst = imagecreatetruecolor($w, $h);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
            imagejpeg($dst, $output);
        }
        
        $imagemNome = $_FILES["imagem"]["name"];
        $dirTemp = $_FILES["imagem"]["tmp_name"];
        $dirDest = $dir."incluir".$barra."mult".$barra."img".$barra."".$imagemNome;
        move_uploaded_file($dirTemp, $dirDest);
        resizeImage($dirDest, $dirDest, 272, 160); 
    }
    else{
        $imagemNome = "logo_thefit.gif";
    }

    // Validação do campo 'Título'
    $titulo = test_input($_POST["titulo"]);

    // Validação do campo 'Descrição'
    $descricao = test_input($_POST["descricao"]);

    //validação do campo 'Categoria'
    //$str_campo_categoria = test_input($_POST["categoria"]);

    // Validação do campo 'Tamanho'
    $tamanho = array();
    $tamanho = $_POST["tamanho"];
    $intContadorTamanho = 0;

    // Validação do campo 'Cores'
    $cor = array();
    $cor = $_POST["cor"];
    print_r($cor);

    $intContadorCor = 0;

    // Validação do campo 'Quantidade'
    $quantidade = test_input($_POST["quantidade"]);

    // Validação do campo 'Valor do Produto'
    $valorProduto = test_input($_POST["valorproduto"]);
    
    // Validação do campo 'Custo do Produto'
    $custoProduto = test_input($_POST["custoproduto"]);
    
    /******************************************************/
    while($intContadorCor < count($cor)){
        while($intContadorTamanho < count($tamanho)){

            cadastraProduto($titulo, $tamanho[$intContadorTamanho], $cor[$intContadorCor], $descricao, $str_campo_categoria);
            
            $intIdProduto = selecionaUltimoProdutoInserido();

            $intIdValorProduto = cadastrValorProduto($intIdProduto, $valorProduto, $custoProduto);

            cadastroImagemProduto($intIdProduto, $imagemNome);
            
            cadastroQuantidadeProduto($intIdProduto, $quantidade);

            geraCodigoBarra($intIdProduto, $intIdValorProduto, $cor[$intContadorCor]);
            $intContadorTamanho++;
        
        }
        $intContadorTamanho = 0;
        $intContadorCor++;
    }


    // Redirecionar para uma página de sucesso, se necessário
    header("Location: ../cadastro_produto.php?tit={$titulo}&des={$descricao}&val={$valorProduto}&cus={$custoProduto}");
}
else{
	header("Location: ../erros.php?indice=5");
}
?>