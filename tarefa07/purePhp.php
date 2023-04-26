<?php
    $a = $_GET['a']; 
    $b = $_GET['b']; 
    $c = $_GET['c']; 
    $img = imagecreate(1000, 1000);
    $width = 1000;
    $height = 1000;

    $bgcolor = imagecolorallocate($img, 255, 255, 255);
    $cross = imagecolorallocate($img, 0, 0, 0);
    $text_color = imagecolorallocate($img, 0, 0, 0);
    $red = imagecolorallocate($img, 255, 0, 0);
    //create cross
    //x
    imageline($img,0, ($width / 2) ,$width, $height/ 2,$cross);
    $textValue = -50;
    // for ($i=0; $i < $width; $i +=  100) { 
        // imagettftext($img, 18, 0, 100, $height / 2 - 10, $text, 'arial.ttf', $textValue);
        // $textValue += 10;
    // }
    // Define o caminho para o arquivo de fonte TrueType
    //y
    imageline($img, $width / 2 , 0, $width/ 2, $height ,$cross);

    $x_min = -10;
    $x_max = 10;
    $delta_x = 0.1;

   // Define o incremento de x
    $delta_x = 0.1;

   // Define as variáveis para armazenar os pontos x e y
    $x = 0; 
    $y = 0;

    for ($x = $x_min; $x <= $x_max; $x += $delta_x) {
        $y = ($a * pow($x, 2)) + ($b * $x) + $c;
        $y_pixel = $height/2 - $y*10;
        imagesetpixel($img,($width / 2 + $x * 50), $y_pixel, $red);
    }
    header("Content-Type: image/png");
    imagepng($img);
    imagedestroy($img);
