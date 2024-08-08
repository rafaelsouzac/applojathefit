<?php

// Função para redimensionar uma imagem
function redimensionarImagem($imagemOriginal, $larguraDesejada, $alturaDesejada, $nomeNovaImagem) {
    // Obtém as dimensões da imagem original
    list($larguraOriginal, $alturaOriginal) = getimagesize($imagemOriginal);
    
    // Cria uma nova imagem com as dimensões desejadas
    $novaImagem = imagecreatetruecolor($larguraDesejada, $alturaDesejada);
    
    // Obtém a extensão da imagem original
    $extensao = pathinfo($imagemOriginal, PATHINFO_EXTENSION);
    
    // Carrega a imagem original de acordo com sua extensão
    switch ($extensao) {
        case 'jpg':
        case 'jpeg':
            $imagem = imagecreatefromjpeg($imagemOriginal);
            break;
        case 'png':
            $imagem = imagecreatefrompng($imagemOriginal);
            break;
        case 'gif':
            $imagem = imagecreatefromgif($imagemOriginal);
            break;
        default:
            return false; // Formato de imagem não suportado
    }
    
    // Redimensiona a imagem original para a nova imagem
    imagecopyresampled($novaImagem, $imagem, 0, 0, 0, 0, $larguraDesejada, $alturaDesejada, $larguraOriginal, $alturaOriginal);
    
    // Salva a nova imagem redimensionada
    switch ($extensao) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($novaImagem, $nomeNovaImagem, 90); // Qualidade JPEG de 90%
            break;
        case 'png':
            imagepng($novaImagem, $nomeNovaImagem, 9); // Compressão PNG de 9
            break;
        case 'gif':
            imagegif($novaImagem, $nomeNovaImagem);
            break;
        default:
            return false; // Formato de imagem não suportado
    }
    
    // Libera a memória utilizada
    imagedestroy($novaImagem);
    imagedestroy($imagem);
    
    return true;
}

// Exemplo de uso
$imagemOriginal = 'imagem_original.jpg';
$novaLargura = 300; // Largura desejada para a nova imagem
$novaAltura = 200; // Altura desejada para a nova imagem
$nomeNovaImagem = 'nova_imagem.jpg';

function redimensiona(nome)
    redimensionarImagem($imagemOriginal, $novaLargura, $novaAltura, $nomeNovaImagem)
?>
