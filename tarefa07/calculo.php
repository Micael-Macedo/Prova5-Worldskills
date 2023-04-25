<?php
$a = $_REQUEST['a']; 
$b = $_REQUEST['b']; 
$c = $_REQUEST['c']; 
$delta = (($b*$b) - ((4*$a) *$c));
$x1 =  ((-1 * $b) + (sqrt($delta)) / (2 * $a));
$x2 =  ((-1 * $b) - (sqrt($delta)) / (2 * $a));
$yv = ((-1 * $delta) / 4 * $a);
$xv = (-1 * $b) / (2 * $a);
$img = imagecreate(500, 500);
   $bgcolor = imagecolorallocate($img, 150, 200, 180);
   imagearc($img, 200, 150, 150, 150, $x2, 155, 111);
   header("Content-Type: image/png");
   imagepng($img);
   imagedestroy($img);

?>