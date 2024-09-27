<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h2>Retiradas</h2>
    <a href="retirada.php">Incluir novo</a>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Aluno</td>
            <td>Livro</td>
            <td>Retirada</td>
            <td>Devolucao</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($retiradas as $retirada) {?>
        <tr>
            <td><?php echo ($retirada->getId())?></td>
            <td><?php echo ($retirada->getAluno_id())?></td>
            <td><?php echo ($retirada->getLivro_id())?></td>
            <td><?php echo ($retirada->getRetirada())?></td>
            <td><?php echo ($retirada->getDevolucao())?></td>
            <td>
                <a href="excluirRetirada.php?id=<?php echo $retirada->getId();?>">Excluir</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>