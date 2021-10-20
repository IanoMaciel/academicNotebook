<!DOCTYPE htm>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercício 1 - parte 4</title>

        <!-- link css -->
        <link href="./css/styleSheet.css" rel="styleSheet">

        <script src="./js/validation.js"></script>

    </head>
    <body>
        <h1>Faça seu login</h1>
        <div class="form_container">
            <form>
                <div class="form_input">
                    <input class="class_input_form" type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="11"/>
                </div>
                
                <div class="form_input">
                    <input class="class_input_form" type="password" name="senha" id="senha" placeholder="SENHA"/>
                </div>

                <div class="send_form" onclick="validation()">
                    <input
                    style="
                        width: 300px;
                        height: 40px;
                        text-align: center;
                        border-radius: 10px;
                        border: 1px solid blue;
                        background: blue;
                        color: cornsilk;   
                        margin-top: -10px;
                    "
                    type="submit"
                    value="ENTRAR"/>
                </div>

                <p>Não possui conta?</p>
                <a href="registro_page.php">CADASTRE-SE AQUI</a>

            </form>
        </div>

    </body>
</html>