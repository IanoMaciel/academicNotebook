<?php
    require_once "conexao.php";

    
    $objDb = new db();
	$link = $objDb->conecta_mysql();

    //validando campo
    $firstName = $_POST['nome'];
    $lastName = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $password1 = $_POST['senha'];
    $password2 = $_POST['cSenha'];

    $strCpf = strlen($cpf);

    if($firstName != '' && $lastName != '' && $strCpf == 11 && $password1 = $password2)
    {
        $sql  = "  INSERT INTO registro(first_name, last_name, cpf, pass) ";
        $sql .= " VALUES('$firstName', '$lastName', '$cpf', '$password1') ";

        $registro = mysqli_query($link, $sql);

        if(!$registro)
        {
            die("Erro ao registrar no banco de dados");
        } else {
            header('Location: registro_page.php?cadastro=1');
        }
    } else {
        header('Location: registro_page.php?erro=1');
        die();
    }

?>