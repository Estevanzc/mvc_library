<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h2>Livros</h2>
    <a href="livro.php">Incluir novo</a>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Titulo</td>
            <td>Autores</td>
            <td>Editora</td>
            <td>Ano</td>
            <td>Quantidade</td>
            <td>ISBN</td>
        </tr>
        <?php foreach ($livros as $livro) {?>
        <tr>
            <td><?php echo ($livro->getId())?></td>
            <td><?php echo ($livro->getTitulo())?></td>
            <td><?php echo ($livro->getAutores())?></td>
            <td><?php echo ($livro->getEditora())?></td>
            <td><?php echo ($livro->getAno())?></td>
            <td><?php echo ($livro->getQuantidade())?></td>
            <td><?php echo ($livro->getISBN())?></td>
            <td>
                <a href="livro.php?id=<?php echo $livro->getId();?>">Editar</a>
                <br>
                <a href="excluirLivro.php?id=<?php echo $livro->getId();?>">Excluir</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>