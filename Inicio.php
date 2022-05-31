<?php
    session_start();
    if ((isset($_SESSION["usuario"]) == false)) {
        header("location: index.html");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <h1> 
        Seja bem vindo <?php echo $_SESSION["usuario"];?>
    </h1>

</body>
</html>