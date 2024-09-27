<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library SQL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../imgs/icon.png">
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <div id="back_ground" class="absolute top-0 left-0 w-screen h-screen flex justify-start items-center flex-col bg-gradient-to-r from-cyan-500 to-blue-500">
        <section id="screen_top" class="w-full h-20 grid grid-cols-3 grid-rows-1 border-2 border-solid border-black">
            <div class="flex justify-around items-center border-2 border-solid border-black">
                <div class="py-[5px] px-[12.5px] rounded-lg text-white text-lg border-2 border-solid border-white cursor-pointer transition-all active:bg-white"><i class="fa-solid fa-bars"></i></div>
                <div class="w-52 h-full bg-center bg-cover bg-no-repeat bg-[url(../imgs/logo.png)]"></div>
            </div>
            <div class="flex justify-center items-center border-2 border-solid border-black">
                <p class="text-white text-2xl font-bold drop-shadow-2xl shadow-2xl">Lista de Alunos</p>
            </div>
            <div class="border-2 border-solid border-black"></div>
        </section>
        <section id="screen_middle" class="w-full flex justify-center items-center">
            <main class="w-[60%] flex justify-center items-center flex-col gap-y-10 border-2 border-solid border-black">
                <table class="w-full bg-white rounded-sm drop-shadow-2xl shadow-2xl">
                    <thead>
                        <th class="h-10">
                            <td class="font-bold border-2 border-solid border-black">ID</td>
                            <td class="font-bold border-2 border-solid border-black">Nome</td>
                            <td class="font-bold border-2 border-solid border-black">Data_nasc</td>
                            <td class="font-bold border-2 border-solid border-black">Curso</td>
                            <td class="font-bold border-2 border-solid border-black">Matricula</td>
                            <td class="font-bold border-2 border-solid border-black">Cpf</td>
                            <td class="font-bold border-2 border-solid border-black">Ações</td>
                        </th>
                    </thead>
                    <?php foreach ($alunos as $aluno) { ?>
                        <tr class="h-9">
                            <td><?php echo ($aluno->getId()) ?></td>
                            <td><?php echo ($aluno->getNome()) ?></td>
                            <td><?php echo ($aluno->getData_nasc()) ?></td>
                            <td><?php echo ($aluno->getCurso()) ?></td>
                            <td><?php echo ($aluno->getMatricula()) ?></td>
                            <td><?php echo ($aluno->getCpf()) ?></td>
                            <td>
                                <a href="aluno.php?id=<?php echo $aluno->getId(); ?>">Editar</a>
                                <a href="excluirAluno.php?id=<?php echo $aluno->getId(); ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </main>
        </section>
    </div>
</body>

</html>