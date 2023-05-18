<?php

function getUserData($user){
    $handler = fopen('data.txt', 'r');
    $i = 0;
    while(($data = fgetcsv($handler,null, ";")) !== FALSE) {
        if(trim($data[0]) === trim($user)){
            fclose($handler);
            return $data;
        }
    }
    fclose($handler);
    return [];
}