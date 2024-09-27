<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <h1>Sistema Academico - Cadastro de Retirada</h1>
    <a href="retiradas.php">Voltar à listagem</a>
    <form action="salvarRetirada.php" method="POST">
        <input type="hidden" name="id">
        <select name="aluno_id">
            <?php foreach ($alunos as $aluno) {?>
                <option value="<?php echo $aluno->getId();?>"><?php echo $aluno->getNome();?></option>
            <?php }?>
        </select>
        <?php 
        date_default_timezone_set("America/Sao_Paulo");
        ?>
        <select name="livro_id">
            <?php
            foreach ($livros as $livro) {
                $reserved = false;
                foreach ($retiradas as $retirada) {
                    if ($retirada->getLivro_id() == $livro->getTitulo()) {
                        $reserved = true;
                    }
                }
                if (!$reserved) {
                    ?>
                    <option value="<?php echo $livro->getId();?>"><?php echo $livro->getTitulo();?></option>
                    <?php
                }
            }
            ?>
        </select>
        <input type="date" name="retirada" value="<?php echo date("Y-m-d")?>">
        <?php function increase_date() {
            $month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][(int) date("m")];
            $year = (int) date("Y");
            $month = (int) date("m");
            $day = (int) date("d");
            if ($day + 7 <= $month_days) {
                $day += 7;
            } else {
                $day = "01";
                if ($month <= 12) {
                    $month ++;
                } else {
                    $month = "01";
                    $year ++;
                }
            }
            return $year."-".$month."-".$day;
        }
        ?>
        <input type="date" name="devolucao" value="<?php echo increase_date()?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>