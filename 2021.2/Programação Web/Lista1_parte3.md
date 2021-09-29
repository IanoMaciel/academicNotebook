# Primeira lista - Conceitos básicos de Internet, Web e principais elementos da linguagem HTML

## Parte III

**1. Explique as três maneiras de inserir uma folha de estilo? Explique cada uma delas.**

+ Folha de estilo externa;
+ Folha de estilo interna;
+ Estilho em linha

**2. Explique o que é ordem de cascata no CSS.**

De um modo geral, podemos dizer que todos os
estilos vão "cascata" em uma nova folha de
estilo "virtual" pelas seguintes regras, em que o último ponto tem a mais alta prioridade:
   + Padrão de navegador 
   + Folha de estilo externa
   + Folha de estilo interna (na seção principal)
   + Estilo em linha (dentro de um elemento HTML)
   + 
**3. Exercício prático: crie uma página Web que insira folhas de estilo de três forma diferentes.**

### Folha de estilo externa
Para este exercício prático foi criado um diretório `Exercício_práticos>Lista1_parte3` para este fim. 
No diretório `Lista1_parte3`, foi adicionado dois arquivos respequitivamente como mostra abaixo:

~~~css
/* Lista1_parte3/exemplo1.css */

h1 {
    color: red
}
~~~

~~~html
<!-- Lista1_parte3/exemplo1.html -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- incluindo css no html-->
        <link rel="stylesheet" type="text/css" href="exemplo1.css"/>
    </head>
    <body>
        <h1>Esse texto é vermelho</h1>
    </body>
</html>
~~~

### Folha de estilo interna
~~~html
<!-- Lista1_parte3/exemplo2.html -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            h1 {
                color: blue
            }
        </style>
    </head>
    <body>
        <h1>Esse texto é azul</h1>
    </body>
</html>
~~~

### Estilho em linha 
~~~html
<!-- Lista1_parte3/exemplo3.html -->

<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <h1 style="color:orange;">
            Esse texto laranja
        </h1>
    </body>
</html>
~~~

**4. Exercício prático: crie uma página Web que contenha: um com pelo menos 3 elementos HTML5 e outro com pelo menos três elementos HTML(para navegadores que não lêem HTML5)**

~~~html
<!-- Lista1_parte3/exemplo4.html -->

<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <nav>
            <a href="exemplo4.html">Exemplo 4</a> | 
            <a href="exemplo5.html">Exemplo 5</a> 
        </nav>
        <section>
            <h1>Utilizando HTML5</h1>
        </section>
        
        <footer>
            <p>Todos os direitos reservados</p>
        </footer>
    </body>
</html>
~~~

~~~html
<!-- Lista1_parte3/exemplo5.html -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>teste de impressão</h1>
    </body>
</html>

~~