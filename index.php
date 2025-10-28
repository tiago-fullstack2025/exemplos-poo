<?php
require_once "src/Cliente.php";

// Criando um objeto e usando o método construtor para passar os dados
$clienteA = new Cliente("Mônica", 30, "monica@gmail.com");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1>Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e objetos</h2>   
    <h3>Visualizando a estrutura dos objetos</h3>

    <div>
        <h2>Nome: <?=$clienteA->getNome()?></h2>
        <p>Idade: <?=$clienteA->getIdade()?> anos</p>
        <p>E-mail: <?=$clienteA->getEmail()?></p>
        <p>Telefone: <?=$clienteA->getTelefone() ?? "não informado"?></p>
    </div>

    
    
</body>

</html>