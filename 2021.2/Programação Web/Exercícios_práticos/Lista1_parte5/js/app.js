class Despesa
{
    constructor(ano, mes, dia, tipo, descricao, valor)
    {
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }
}

function cadastrarDespesa()
{
    // slecionando os campos 
    let dia = document.getElementById('dia')
    let mes = document.getElementById('mes')
    let ano = document.getElementById('ano')
    
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    let despesa = new Despesa(dia.value, mes.value, ano.value, tipo.value, descricao.value, valor.value)

    gravar(despesa)
}

function gravar(d)
{
    localStorage.setItem('despesa', JSON.stringify(d))
}
