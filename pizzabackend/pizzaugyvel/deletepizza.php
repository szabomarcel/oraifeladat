<?php
//DELETE FROM `vevo` WHERE 0
$sql = '';
if(count($keresPelda) > 1){
    if(is_int(intval($keresPelda))){
        $sql = "DELETE FROM `vevo` WHERE vazon=" . $keresPelda; 
    }else{
        http_response_code(404);
        echo 'Nem Létező pizzaÜgyfél.';    
    }
}
require_once '.databaseconnect.php';
$result = $connection -> query($sql);
if($result -> num_rows > 0){
    http_response_code(201);
    echo "Sikeres törlödőt.";
}else{
    http_response_code(404);
    echo 'Nem sikerült a törlés.';
}