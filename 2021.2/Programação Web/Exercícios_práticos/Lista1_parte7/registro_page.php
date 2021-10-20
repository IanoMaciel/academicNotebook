<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    $cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0;

?>
<!DOCTYPE htm>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercício 1 - parte 4</title>

        <!-- link css -->
        <link href="styleSheet.css" rel="styleSheet">

        <script src="./validation.js"></script>

    </head>
    <body>
        <h1>Cadastre-se</h1>
        <div style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 0 0.4em black; background: white;">
            <? if($erro == 1) { ?>
                <h3 style="color: red;">Preencha os campos corretamente</h3>
            <? } ?>
            <? if($cadastro == 1) { ?>
                <h3 style="color: blue;">Cadastro realizado com sucesso</h3>
            <? } ?>
            <form method="post" action="cadastrar.php">
                <div style="margin: 20px 20px 10px 20px;">
                    <input class="class_input_form" type="text" name="nome" placeholder="Nome"/><br/>
                </div>
                <div style="margin: 10px 20px 10px 20px;">
                    <input class="class_input_form" type="text" name="sobrenome" placeholder="Sobrenome"/><br/>
                </div>
                <div style="margin: 10px 20px 10px 20px;">
                    <input class="class_input_form" type="text" maxlength="11" name="cpf" placeholder="CPF"/><br/>
                </div>
                <div style="margin: 10px 20px 10px 20px;">
                    <input class="class_input_form" type="password" name="senha" placeholder="Senha"/><br/>
                </div>
                <div style="margin: 10px 20px 10px 20px;">
                    <input class="class_input_form" type="password" name="cSenha" placeholder="Confirme sua senha"/><br/>
                </div>

                <div class="send_form">
                    <input class="send" type="submit" value="Cadastrar"/><br/>
                </div>
            </form>
        </div>
        

    </body>
</html>