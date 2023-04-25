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
        $contacts = file_get_contents('contacts.json');
        $tempArray = (array) json_decode($contacts);
        $currenTime = json_encode(["current-time" => $time]);
        if(is_null($tempArray)){
                $tempArray = $currenTime;
        }else{
                array_push($tempArray, $currenTime);
        }
        $jsonData = json_encode($tempArray);
        file_put_contents('contacts.json', $jsonData);
	?>
</body>
</html>