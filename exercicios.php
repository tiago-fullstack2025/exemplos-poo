<?php
require_once "src/Livro.php";

$livroUm = new Livro("Senhor dos Anéis", "Tolkien", 2000);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de PHP com POO</title>
</head>
<body>
    <h1>Exercícios de PHP com POO</h1>
    <hr>

    <div>
        <h2><?=$livroUm->getTitulo()?></h2>
        
        <h3><?=$livroUm->getAutor()?></h3>
        
        <?php if($livroUm->getPaginas()): ?>
            <!-- Se tem páginas, mostramos isso: -->
            <p><b>Quantidade de páginas: <?=$livroUm->getPaginas()?></b></p>
        <?php else: ?>
            <!-- Se não tem, mostramos isso: -->
            <p style="color: red;"><b>Não foram informadas as páginas</b></p>
        <?php endif; ?>

    </div>

    <hr>

   
    
</body>
</html>