<?php
//UPDATE `vevo` SET `vazon`='[value-1]',`vnev`='[value-2]',`vcim`='[value-3]' WHERE 1
$putadat = fopen("php://input", "r");
$raw_data = '';
while ($chunk = fread($putadat, 1024))
    $raw_data.= $chunk;
fclose($putadat);
$adatJSON = json_decode($raw_data);
$vazon = $_POST('vazon');
$vnev = $_POST('vnev');
$vcim = $_POST('vcim');
require_once './databaseconnect.php';
$sql = "UPDATE `vevo` SET `vazon`=?,`vnev`=?,`vcim`=? WHERE vazon=?";
$stml = $connection->prepare($sql);
$stml->bind_param("ss", $vnev, $vcim);
if($stml -> execute()){
    http_response_code(201);
    echo "Sikeresen modósítás.";
}else{
    http_response_code(404);
    echo "Nem sikerült a modósítás.";
}