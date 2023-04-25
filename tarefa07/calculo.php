<?php
$a = $_REQUEST['a']; 
$b = $_REQUEST['b']; 
$c = $_REQUEST['c']; 
$delta = (($b*$b) - ((4*$a) *$c));
$x1 =  (-1 * $b) + (sqrt($delta) / (2 * $a));
$x2 =  (-1 * $b) - (sqrt($delta) / (2 * $a));
$yv = ((-1 * $delta) / 4 * $a);
$xv = (-1 * $b) / (2 * $a);
$image = imagecreate(500, 300);
  
// Set the background color of image
imagecreatefrompng("./plano-cartesiano.webp")

?>