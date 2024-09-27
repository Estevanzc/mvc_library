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
        <input type="text" name="titulo" value="<?php echo $livro->getTitulo();?>" placeholder="">
        <input type="text" name="autores" value="<?php echo $livro->getAutores();?>" placeholder="">
        <input type="text" name="editora" value="<?php echo $livro->getEditora();?>" placeholder="">
        <input type="text" name="ano" value="<?php echo $livro->getAno();?>" placeholder="">
        <input type="number" name="quantidade" min="1" step="1" value="<?php echo $livro->getQuantidade();?>" placeholder="">
        <input type="text" name="ISBN" value="<?php echo $livro->getISBN();?>" placeholder="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library SQL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <div id="back_ground"
        class="absolute top-0 left-0 w-screen h-screen flex justify-start items-center flex-col bg-gradient-to-r from-cyan-500 to-blue-500 overflow-auto">
        <aside class="fixed z-10 w-14 h-full flex justify-start items-start overflow-hidden flex-col self-start transition-all hover:w-56 bg-cyan-700 drop-shadow-2xl shadow-2xl border-r-[3px] border-solid border-cyan-800">
            <div class="w-56 h-14 flex justify-center items-center text-white font-medium text-lg">
                <div class="w-3/5 h-full flex justify-center items-center">Menu</div>
            </div>
            <a href="index.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-house"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Home</div>
            </a>
            <a href="alunos.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-user"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Alunos</div>
            </a>
            <a href="livros.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-book"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Livros</div>
            </a>
            <a href="retiradas.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-table-list"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Retiradas</div>
            </a>
        </aside>
        <section id="screen_top" class="w-full h-20 grid grid-cols-3 grid-rows-1">
            <div class="flex justify-around items-center">
                <div class="w-52 h-full bg-center bg-cover bg-no-repeat bg-[url(imgs/logo.png)]"></div>
            </div>
            <div class="flex justify-center items-center">
                <p class="text-white text-2xl font-bold drop-shadow-2xl">Cadastro de Alunos</p>
            </div>
            <div></div>
        </section>
        <section id="screen_middle" class="w-full flex justify-center items-center flex-col">
            <div class="w-full h-14 flex justify-center items-center"></div>
            <main class="mt-10 w-[60%] flex justify-center items-center flex-col gap-y-2.5 gap-x-2">
                <form action="salvarAluno.php" method="POST" class="w-5/12 h-[400px] flex justify-center items-center flex-col bg-white rounded-lg shadow-2xl drop-shadow-2xl border-2 border-solid border-gray-300">
                    <input type="hidden" name="id" value="<?php echo $aluno->getId();?>">
                    <div class="w-full h-1/4 flex justify-center items-center">
                        <div class="w-7/12 h-full flex justify-center items-start flex-col gap-y-1">
                            <label for="titulo" class="ml-5 font-bold text-cyan-700 drop-shadow-2xl">Seu nome</label>
                            <input type="text" name="titulo" id="titulo" value="<?php echo $livro->getTitulo();?>" class="w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                        <div class="w-5/12 h-full flex justify-center items-center flex-col gap-y-1">
                            <label for="data_nasc" class="font-bold text-cyan-700 drop-shadow-2xl">Data de nascimento</label>
                            <input type="date" id="data_nasc" name="data_nasc" value="<?php echo $aluno->getData_nasc();?>" class="w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                    </div>
                    <div class="w-full h-1/4 flex justify-center items-start flex-col">
                        <label for="curso" class="ml-7 font-bold text-cyan-700 drop-shadow-2xl">Seu curso</label>
                        <select name="curso" id="curso" class="w-11/12 h-[40%] self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                            <?php
                            $cursos_name = ["Matemática", "Programação Web", "Introdução a Computação", "Algorítimos", "Interface Web"];
                            for ($i = 0; $i <= count($cursos_name) - 1; $i ++) {
                            ?>
                            <option value="<?php echo($i + 1);?>" <?php echo($cursos_name[$i] == $aluno->getCurso() ? "selected" : "");?>><?php echo($cursos_name[$i]);?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="w-full h-1/4 flex justify-center items-center">
                        <div class="w-1/2 h-full flex justify-center items-start flex-col gap-y-1">
                            <label for="matricula" class="ml-5 font-bold text-cyan-700 drop-shadow-2xl">Matricula</label>
                            <input type="text" name="matricula" id="matricula" value="<?php echo $aluno->getMatricula();?>" placeholder="Exemplo: 202311020322" class="w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                        <div class="w-1/2 h-full flex justify-center items-center flex-col gap-y-1">
                            <label for="cpf" class="flex justify-center items-center gap-x-1 text-cyan-700">
                                <p class="font-bold drop-shadow-2xl">Seu CPF</p>
                                <p class="text-sm">(apenas números)</p>
                            </label>
                            <input type="text" name="cpf" id="cpf" value="<?php echo $aluno->getCpf();?>" placeholder="Exemplo: 05065440186" class="w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                    </div>
                    <div class="w-full h-1/4 flex justify-around items-end pb-4">
                        <a href="alunos.php" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-red-500 hover:text-white hover:border-0">Cancelar</a>
                        <button type="submit" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-green-500 hover:text-white hover:border-0">Salvar</button>
                    </div>
                </form>
            </main>
        </section>
    </div>
</body>

</html>