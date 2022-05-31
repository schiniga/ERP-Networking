<?php 

require_once getcwd()."\BD\MySQL.class.php";

if(isset($_POST["cadastro"])){
    header("location: cadastro.html");


} elseif(isset($_POST["login"])){
    $conexao = new MySQL();
    $sql = "SELECT * FROM `usuario` WHERE usuario = '".$_POST['user']."' OR email = '".$_POST['user']."'";
    $resultados = $conexao->consulta($sql);
    if (!empty($resultados)) {
        if(password_verify($_POST["senha"],$resultados[0][2])){
            session_start();
            $_SESSION["usuario"]=$resultados[0][0];
            $_SESSION["email"]=$resultados[0][1];
            $_SESSION["tipo"]=$resultados[0][3];
            echo $_SESSION["usuario"];
            header("location: inicio.php");
        }else{
            header("location: index.html");
        }
    }else{
        header("location: index.html");
    }
    


} elseif(isset($_POST["registro"])){
    $conexao = new MySQL();
    $sql = "SELECT usuario FROM usuario WHERE usuario = '".$_POST['user']."' OR email = '".$_POST['email']."'" ;
    if(empty($conexao->consulta($sql))){
        if ($_POST["pass"] == $_POST["pass2"]) {
            $senha = password_hash($_POST["pass2"],PASSWORD_DEFAULT);
            $conexao = new MySQL();
            $sql = "INSERT INTO `usuario`(`usuario`, `email`, `senha`, `tipo`) VALUES ('".$_POST['user']."','".$_POST['email']."','".$senha."',0)";
            $conexao->executa($sql);
            header("location: index.html");
        }else {
            header("location: cadastro.html");
        }     
    }else{
        echo "cadastro invalido ou ja existente";

    }
      

}elseif(isset($_POST["Voltar"])){
    echo "chegue";
    header("location: index.html");
}
?>