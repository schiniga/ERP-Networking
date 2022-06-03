<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include_once(getcwd()."\BD\MySQL.class.php");
$conn = new Mysql();

$conn -> __construct();

$consulta = $conn -> consulta("SELECT id, date, message FROM console_dev");

// Teste de impressão dos dois primeiros registros de logs salvados na tabela console_dev
echo strval($consulta[0][1].$consulta[0][2]);
echo "<br>";
echo strval($consulta[1][1].$consulta[1][2]);

?>
</body>
</html>