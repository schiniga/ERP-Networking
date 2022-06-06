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

$conn -> generate_console_dev("teste generate_console_dev");
$conn -> generate_console_admin("teste generate_console_admin");

$consulta = $conn -> consulta("SELECT id, date, message FROM console_dev");

foreach($consulta as $line){
    echo strval("ID ".$line[0]."<br>");
    echo strval("DATE ".$line[1]);
    echo strval("/ ".$line[2]."<br>");
    echo "----------------------------------------<br>";
}
?>
</body>
</html>