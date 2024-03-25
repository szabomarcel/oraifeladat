<?php
switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'pizzaugyvel/getpizza.php';
        break;
    case 'POST':
        require_once 'pizzaugyvel/postpizza.php';
        break;
    case 'DELETE':
        require_once 'pizzaugyvel/deletepizza.php';
        break;
    case 'PUT':
        require_once 'pizzaugyvel/putpizza.php';
        break;
}