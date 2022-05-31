<?php
    session_start();
    if ((isset($_SESSION["usuario"]) == false)) {
        header("location: index.html");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--meu css-->
    <!--<link rel="stylesheet" href="CSS/styles.css">-->
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h1>
        <a href="sair.php">Sair</a> <br>
        Seja bem vindo <?php echo $_SESSION["usuario"];?>
    </h1>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>