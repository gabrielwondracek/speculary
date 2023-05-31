<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    include("conecta.php");

    $comando = $pdo->prepare("SELECT * FROM clientes WHERE nome='$nome' and senha='$senha' ");
    $resultado = $comando->execute();

    $entrar = "n";

    while( $linhas = $comando->fetch()){
        $entrar = "s";
    }

    if($entrar == "s"){
        header("Location: index.html");
    }
    else {
        header("Location: login.html");
    }

?>