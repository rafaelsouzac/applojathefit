<?php 
header("Content-type: text/html; charset=utf-8");

$so = php_uname('s');
$so = strtolower($so);

$dir = dirname(__FILE__);

$dir = substr($dir, 0, -8);

if($so == 'linux'){
    $barra = "/";
}else{
    $barra = "\\";
}

$dirinclude = $dir;
$dirinclude .="modelo".$barra."mdl_cadastro_fornecedor.php"; 
include("{$dirinclude}");



if ($_SERVER["REQUEST_METHOD"] == "POST"){


    // Validação do campo 'Imagem'
    if (isset($_FILES["imagem"]["name"])) {

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
        resizeImage($dirDest, $dirDest, 260, 140); 
        $intRet = cadastraFornecedor($imagemNome);
    }
    // Redirecionar para uma página de sucesso, se necessário
    header("Location: ../cadastro_fornecedor.php?cad=1");
}
else{
        $imagemNome = "logo_thefit.gif";
}

    

function fornecedoresCadastrados(){
    $strInfoForncedores = buscaFornecedores();
    return $strInfoForncedores;
}
?>