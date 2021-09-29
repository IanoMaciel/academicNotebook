function validation()
{
    let cpf = document.getElementById('cpf').value;
    let password = document.getElementById('senha').value

    if(cpf == '' || cpf.length < 11 || password == '' || password.length < 6)
    {
        alert('CPF e/ou senha inválida')
    } else {
        alert('Validação realizada com sucesso!')
    }
    
}