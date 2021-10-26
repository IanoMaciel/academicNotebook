function validation()
{
    let cpf = document.getElementById('cpf').value;
    let senha = document.getElementById('senha').value;
    let str = '';
    if(cpf.length != 11 || isNaN(cpf))
    {
        str = 'CPF inválido! Digite 11 digitos com caracteres númericos. \nCPF: ' + cpf + '\nDigitos: ' + cpf.length; 
        alert(str);
    } else if(senha.length < 6 || isNaN(senha)) {
        str = 'Sua senha deve conter pelo menos 6 digitos e todos com caracteres númericos';
        alert(str);
    } else {
        alert('Validado com sucesso!');
        
    }
}