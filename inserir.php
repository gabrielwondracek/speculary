<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO clientes VALUES('$nome','$email','$senha')");

    $resultado = $comando->execute();

    //Para voltar no forms
    header("Location: cadastro.html");
?>

