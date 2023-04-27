<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['acao'])){
        $arquivo = $_FILES['file'];

        $arquivoNovo = explode(".", $arquivo['name']);
        var_dump($arquivo);
        if($arquivoNovo[sizeof($arquivoNovo)-1] != "jpg"){
            die("Incompativel");
        }else{
            echo "Compativel";
            move_uploaded_file($arquivo['tmp_name'], "upload/". $arquivo['name']);
        }
    }
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Arquivo</label>
        <input type="file" name="file" id="">
        <input type="submit" value="Enviar" name="acao">
    </form>
</body>
</html>