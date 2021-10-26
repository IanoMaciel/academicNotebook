<? $sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : 0; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Lista1-parte8</title>
    </head>
    <body>
        <div>
            <div>
                <? if($sucesso == 1) { ?>
                    <h1 style="color:blue;">Arquivo salvo com sucesso</h1>
                <? } ?>
                <h3>Informe seus dados</h3>
                <form method="post" action="registro.php">
                    <input type="text" name="nome" placeholder="Nome"/> <br/>
                    <input type="text" name="sobrenome" placeholder="Sobrenome"/> <br/>
                    <input type="text" name="idade" placeholder="idade"/> <br/>
                    <input type="submit" value="Salvar"/>
                </form>
            </div>
        </div>
    </body>
</html>