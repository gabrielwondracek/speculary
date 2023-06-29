<?php
include ("conecta.php");


$foto = ["imagem"];

$nomefoto = "armacao3";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armações</title>
     <!--ICON NA GUIA-->
     <link rel="icon" href="imagensTelaInicial/logo.png">
    <link rel="stylesheet" href="css/estiloQuemsomos.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="setaDiv">
        <a href="javascript:history.back()"><img src="imagensLogin/setaespeculary.jpg" class="seta"></a>
    </div>
    <main>
      <center>
        <section>
            <div class="container">
                <div class="left-side">
                <div class="items">
                <div class="select-image">
                    <img src="images/armacaohoje22.jpg">
                </div>
            </div>
        </div>
                <div class="right-side">
                <div class="content">
                    <h6>ARMAÇÃO</h6>
                    <h1>Óculos Armação Masculino Lançamento Haste AM-191</h1>
                    <p>Lançamento</p>
                    <div class="prices">
                    <span class="price">$105,00</span>
                    <span class="off">$120,00</span>
                    </div>
                    <div class="options">
                    <button onclick="comprar()" type="submit" name="comprar" class=button>Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </center>
    </main>
</body>
<script src="alertCarrinho.js"></script>
<script>
function comprar()
{
  window.open("carrinho.php?nome=" +document.getElementById("nome").innerHTML+"&preco="+document.getElementById("preco").innerHTML+"&imagem="+"images/armacao3.jpg", "_self");
}
</script>

</html>