<?php
session_start();

$_SESSION['carro'] = "hb20";
$_SESSION['animal'] = "Cachorro e Gato";

echo $_SESSION['carro'] . $_SESSION['animal']  ."session id: " . session_id();

?>