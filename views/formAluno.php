<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <h1>Sistema Academico - Cadastro de Aluno</h1>
    <a href="alunos.php">Voltar à listagem</a>
    <form action="salvarAluno.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $aluno->getId();?>">
        <input type="text" name="nome" value="<?php echo $aluno->getNome();?>" placeholder="Nome:">
        <input type="date" id="a" name="data_nasc" value="<?php echo $aluno->getData_nasc();?>">
        <select name="curso">
            <?php
            $cursos_name = ["Matemática", "Programação Web", "Introdução a Computação", "Algorítimos", "Interface Web"];
            for ($i = 0; $i <= count($cursos_name) - 1; $i ++) {
            ?>
            <option value="<?php echo($i + 1);?>" <?php echo($cursos_name[$i] == $aluno->getCurso() ? "selected" : "");?>><?php echo($cursos_name[$i]);?></option>
            <?php } ?>
        </select>
        <input type="text" name="matricula" value="<?php echo $aluno->getMatricula();?>" placeholder="Matricula:">
        <input type="text" name="cpf" value="<?php echo $aluno->getCpf();?>" placeholder="Cpf:">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>