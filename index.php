<?php 
include("db.php");

header('Access-Controll-Allow-Origin:*');
header('Content-Type:applicion/json');
header('Access-Controll-Allow-Methods:POST');
header('Access-Controll-Allow-Headers:Content-Type,Access-Controll-Allow-Headers,Authorization,X-Request-With');

$data = file_get_contents("php://input");
echo $data;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>