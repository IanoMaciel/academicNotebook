<?php
    $nome = str_replace('#', '-', $_POST['nome']);
    $sobrenome = str_replace('#', '-', $_POST['sobrenome']);
    $idade = str_replace('#', '-', $_POST['idade']);

    $str = $nome . '#' . $sobrenome . '#' . $idade;

     //abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');

    //escrevendo texto
    fwrite($arquivo, $str);

    //fechando arquivo
    fclose($arquivo);

    header('Location: index.php?sucesso=1');
?>