<?php

const FILES_DIRECTORY="./files";

function checkDirectory(string $name):bool{

    return false;
}

function createDirectory(string $name):bool{

    $contentOfDirectory = scandir(FILES_DIRECTORY);
    //var_dump($content);
    if (!in_array($name,$contentOfDirectory)){
        mkdir(FILES_DIRECTORY.$name);
        return true;
    }
    return true;
}


function manageFiles(array $imageData){
    foreach ($imageData as $file){

    }
}