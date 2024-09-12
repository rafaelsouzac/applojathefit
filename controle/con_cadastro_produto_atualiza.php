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
    
    //codigo de barras do produto, sera o filtro para o update
    $int_codigo_barras = $_POST['atualiza_codigobarras'];

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

        Atualiza_nome_imagem_produto($int_codigo_barras, $imagemNome);
    }
    

    // Validação do campo 'Título'
    $titulo = $_POST["titulo"];

    // Validação do campo 'Descrição'
    $descricao = $_POST["descricao"];

    //validação do campo 'Categoria'
    //$str_campo_categoria = test_input($_POST["categoria"]);
    $str_campo_categoria  = "";

    // Validação do campo 'Tamanho'
    $tamanho = $_POST["tamanho"];
    $int_tamanho = $tamanho[0]; 

    // Validação do campo 'Cores'
    $cor = $_POST["cor"];
    $int_cor = $cor[0];

    // Validação do campo 'Quantidade'
    $quantidade = $_POST["quantidade"];

    // Validação do campo 'Valor do Produto'
    $valorProduto = $_POST["valorproduto"];
    
    // Validação do campo 'Custo do Produto'
    if(isset($_POST["custoproduto"])){
        $custoProduto = $_POST["custoproduto"];
    }else{
        $custoProduto = 0;
    }
    /******************************************************/

    Atualiza_dados_produto($int_codigo_barras, $titulo, $descricao, $str_campo_categoria, $int_tamanho, $int_cor, $quantidade, $valorProduto, $custoProduto);
    
    // Redirecionar para uma página de sucesso, se necessário
   header("Location: ../cadastro_produto.php");
}
else{
	header("Location: ../erros.php?indice=5");
}
?>