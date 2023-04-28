<?php
    include_once("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session php</title>
</head>
<body>
    <?php 
    if(!$_SESSION['logged']){
        include_once 'form.php';
    }else{
        include_once 'conteudo_restrito.php';
    }
    ?>
</body>
</html>