<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usersData = json_decode(file_get_contents("users.json"));
        $userData = $_POST;

        if(is_null($usersData)){
            $array = [];
            array_push($array, $userData); 
            file_put_contents("users.json", json_encode($array));
        }else{
            array_push($usersData, $userData);
            file_put_contents("users.json", json_encode($usersData));
        }
        header("Location: http://localhost/Prova5-Worldskills/tarefa11/index.php"); 
        exit();

    }else{
        echo file_get_contents("users.json");
    }
