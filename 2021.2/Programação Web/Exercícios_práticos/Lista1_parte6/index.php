<?php

    // a): finalizado
    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : null;
    $tamanho_str = isset($palavra) ? strlen($palavra) : 0;

    // b): 
    $frase = isset($_POST['frase']) ? $_POST['frase'] : null;
    $tamanho_frase = isset($frase) ? str_word_count($frase) : 0;

    // c):
    $inverte = isset($_POST['inverte']) ? $_POST['inverte'] : null;
    $frase_inv = isset($inverte) ? strrev($inverte) : 0;

    // d)
    $d = isset($_POST['d']) ? $_POST['d'] : null;
    $str = 'Seu material esta desatualizado querido hobbit';
    
    if (strpos($str, $d) !== false) {
        $f = 'string encontrada';
    } else {
        $f = 'string não encontrada';
    }
    
    $f = isset($f) ? $f : '';

    // e)
    $fTexto = 'iano#benedito#maciel';
    $textof = str_replace('#', ' ', $fTexto);

    // f)
    $calendor = date('d/m/Y \à\s H:i:s');
    

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Lista1 - parte 8</title>
        
         <!-- link css -->
         <link href="estilo.css" rel="styleSheet">

    </head>
    <body>
        <div class="questoes">
            <h1>a) Dado uma palavra conte o número de caracteres.</h1>
            <form method="post" action="index.php">
                Entre com a palavra:<br/>
                <input type="text" name="palavra" /><br/><br />
                <input type="submit" value="Consultar"/> <br /><br />
                Palavra digitada: <?= $palavra ?> <br />
                Total de caracteres: <?= $tamanho_str ?>
            </form>
        </div>

        <div class="questoes">  
            <h1>b) Dado uma frase conte o número de palavras</h1>
            <form method="post" action="index.php">
                <label for="frase">Digite uma frase:</label> <br />
                <textarea id="frase" name="frase" rows="3" cols="25"></textarea> <br /><br />
                <input type="submit" value="Consultar"/> <br /><br />
                Frase digitada: <?= $frase ?> <br />
                Número de palavras: <?= $tamanho_frase ?>
            </form>
        </div>

        <div class="questoes">
            <h1>c) Inverter uma string</h1>
            <form method="post" action="index.php">
                Entre com a palavra:<br/>
                <input type="text" name="inverte" /><br/><br/>
                <input type="submit" value="Consultar"/> <br />
                Palavra digitada: <?= $inverte ?> <br />
                palavra invertida: <?= $frase_inv ?>
            </form>
        </div>

        <div class="questoes">
            <h1>d)Pesquisar um texto específico na String.</h1>
            <h2>Frase: Seu material esta desatualizado querido hobbit</h1>
            <form method="post" action="index.php">
                Escreva uma palavra da frase acima:<br/>
                <input type="text" name="d" /><br/><br/>
                <input type="submit" value="Consultar"/> <br /><br/>
                Valor consultado: <?= $d ?> <br />
                resultado: <?= $f ?>
            </form>
        </div>

        <div class="questoes">
            <h1>e)Substituir texto dentro de uma sequencia de caracteres.</h1>
            <hr>
            <h2>Frase: iano#benedito#maciel</h1>
            <form method="post" action="index.php">
                Valor substituir # por ' ' (espaço)<br>
                resultado: <?= $textof ?>
            </form>
        </div>

        <div class="questoes">
            <h1>f)Retornar a saída "Tenha uma boa manhã!" Se a hora atual for
    inferior a 10:00, e "Tenha um bom dia!" Se a hora atual for menor
    que 20:00. Caso contrário, a saída será “Tenha uma boa noite!".</h1>
        
            resultado: <?= $calendor ?>
        </div>

        <div class="questoes"> 
            <h1>g)Define uma variável $x para 15 ($ x = 15). Em seguida, o loop
    while continuará a ser executado, desde que $x seja menor ou
    igual a 150 ($x <= 150). $X aumentará em 15 cada vez que o loop
    for executado. Deve ser impresso na tela as execuções
    intermediárias antes de 150 (15,30,45,...,135).</h1>
            <?php
                $x = 15;
                while($x <= 150 && $x != 150)
                {
                    echo $x .' <br/> ';
                    $x += 15;
                }
            ?> 
        </div> 
    </body>
</html>