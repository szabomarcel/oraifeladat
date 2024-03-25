<?php
switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'pizzaugyfel/getpizza.php';
        break;
    case 'POST':
        require_once 'pizzaugyfel/postpizza.php';
        break;
    case 'DELETE':
        require_once 'pizzaugyfel/deletepizza.php';
        break;
    case 'PUT':
        require_once 'pizzaugyfel/updatepizza.php';
        break;
    default:
        break;
}
?>
