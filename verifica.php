<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $mudaNome = $_POST["nomeDoUser"];

    include("conecta.php");

    $comando = $pdo->prepare("SELECT * FROM clientes WHERE nome='$nome' and senha='$senha' ");
    $resultado = $comando->execute();

    $entrar = "n";
    $mudaNome = $nome;


    while( $linhas = $comando->fetch()){
        $entrar = "s";
    }

    if($entrar == "s"){
        header("Location: telaPerfil.html");

    }
    else {
        header("Location: login.html");
    }
?>