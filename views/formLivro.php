<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <h1>Sistema Academico - Cadastro de Livro</h1>
    <a href="livros.php">Voltar à listagem</a>
    <form action="salvarLivro.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $livro->getId();?>">
        <input type="text" name="titulo" value="<?php echo $livro->getTitulo();?>" placeholder="Titulo:">
        <input type="text" name="autores" value="<?php echo $livro->getAutores();?>" placeholder="Autores:">
        <input type="text" name="editora" value="<?php echo $livro->getEditora();?>" placeholder="Editora:">
        <input type="text" name="ano" value="<?php echo $livro->getAno();?>" placeholder="Ano:">
        <input type="number" name="quantidade" min="1" step="1" value="<?php echo $livro->getQuantidade();?>" placeholder="Quantidade:">
        <input type="text" name="ISBN" value="<?php echo $livro->getISBN();?>" placeholder="ISBN:">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>