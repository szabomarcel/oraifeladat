<?php
//SELECT * FROM `vevo` WHERE 1
$sql = '';
if(count($keresPelda) > 1){
    if(is_int(intval($keresPelda[1]))){
        $sql = 'SELECT * FROM vevo WHERE vazon=' . $keresPelda[1];
    }
}else{
    $sql = 'SELECT * FROM vevo WHERE 1'; 
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if($result->num_rows > 0){
    $pizzaugyfelek = array();
    while($row = $result->fetch_assoc()){
        $pizzaugyfelek[] = $row;
    }
    http_response_code(200);
    echo json_encode($pizzaugyfelek);
}else{
    http_response_code(404);
    echo 'Nem létező pizzavevő.';
}