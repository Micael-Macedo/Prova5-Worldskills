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
        $time = date("Y/m/d");
        $contacts = json_decode(file_get_contents('contacts.json'));
        $currenTime = (object) ["current-time" => $time];
        
        if(is_null($contacts)){
                $array = [];
                array_push($array, $currenTime);
                file_put_contents('contacts.json', json_encode($array));
        }else{
                array_push($contacts, $currenTime);
                file_put_contents('contacts.json',  json_encode($contacts));
        }
	?>
</body>
</html>