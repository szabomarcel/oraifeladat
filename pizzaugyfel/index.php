<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Ügyfel</title>
</head>
<body>
    <pre>
        <?php
            $keresPelda = explode("/", $_SERVER["QUERY_STRING"]);
            var_dump($keresPelda);
            if($keresPelda[0] === "pizzaugyfel"){
                require_once 'pizzaugyfel/index.php';
            }else{
                http_response_code(404);
                echo "Nincs ilyen API";
            }
        ?>
    </pre>    
</body>
</html>