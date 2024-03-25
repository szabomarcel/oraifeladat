<?php
//INSERT INTO `vevo`(`vazon`, `vnev`, `vcim`) VALUES ('[value-1]','[value-2]','[value-3]')
$vazon = $_POST("vazon");
$vnev = $_POST("vnev");
$vcim = $_POST("vcim");
require_once './databaseconnect.php';
$sql = "INSERT INTO vevo (vazon, vnev, vcim) VALUES (NULL, ?, ?')";
$stml = $connection->prepare($sql);
$stml->bind_param("ss", $vnev, $vcim);
if($stml -> execute()){
    http_response_code(201);
    echo "Sikeresen hozzáadva";
}else{
    http_response_code(404);
    echo "Nem sikerült hozzáadni";
}