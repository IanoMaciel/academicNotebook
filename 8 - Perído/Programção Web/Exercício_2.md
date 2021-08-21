# Primeira lista - Conceitos básicos de Internet, Web e principais elementos da linguagem HTML

## Parte II

1. Explique o que é um Elemento, um Atributo, uma Tag de abertura e uma Tag de fechamento e o conteúdo do elemento na linguagem HTML. Mostre através de um exemplo.<br />
**Elemento:** é tudo, desde a `tag` de início para `tag` final.<br />
**Atributo:** fornecem informações adicionais sobre um elemento. São sempre especificados na tag de início.<br />
**Tag:** tags de abertura e fechamento são elementos do html do próprio html<br />
**Conteúdo do elemento html:** são tudo que está inserido no elemento html como mostra no exemplo 1 abixo:

~~~html
<!-- Exemplo 1 -->
<html> <!-- Elemento html -->
    <head> <!-- tag de abertura -->

    </head> <!-- tag de fechamento -->
    <body> <!-- tag de abertura do corpo -->
        <h1 style="font-size:14">Exemplo 1</h1> <!-- Atributo -->
    </body> <!-- tag de fechamento do corpo -->
</html>
~~~

2. Quais as Tags estruturais de um documento HTML? Mostre através de um exemplo o posicionamento de cada um.
~~~html
<!-- Exemplo 2 -->
<!DOCTYPE HTML>
<html> <!-- tag de abertura do html -->
    <head> <!-- tag de abertura do cabeçalho -->

    </head> <!-- tag de fechamento do cabeçalho -->
    <body> <!-- tag de abertura do corpo -->

    </body> <!-- tag de fechamento do corpo -->
</html>
~~~


3. O que é um documento HTML aninhado? Mostre com um exemplo. 
~~~html
<!-- Exemplo 3 -->
<!DOCTYPE HTML>
<html>
    <body>
        <div>
            <h1>Exemplo de HTML aninhado</h1>
        </div>
    </body>
</html>
~~~
4. Exercício prático: Construa uma página Web com os seguintes elementos HTML: <br />
   
a) Elementos estruturais.
~~~html
<!-- Exemplo 4 -->
<!DOCTYPE HTML>
<html> <!-- tag de abertura do html -->
    <head> <!-- tag de abertura do cabeçalho -->

    </head> <!-- tag de fechamento do cabeçalho -->
    <body> <!-- tag de abertura do corpo -->

    </body> <!-- tag de fechamento do corpo -->
</html>
~~~
b) p, H1, a, br, comentários, title, style, meta, img, table, tr, td<br />
O `exemplo 5` abaixo mostra a estruta de uma página web simples com as tags requisita no enuciado b). A imagem 1 mostra o resultado do script exemplo 5

~~~html
<!-- Exemplo 5 -->
<<!DOCTYPE HTML>

<style>
    td, th {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
    }
</style>

<html>
    <meta charset="utf-8"/>
    <head>
        <title>Questão 4 - b</title>
    </head>
    <body>
        <!-- Este é um comentário-->
        <h1>Utilizando a tag h1</h1>

        <h2>Utlizando a tag paragrafo (p) e quebra de linha (br)</h2>
        <p style="color:brown">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br /><br />
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <h2>Utilizando a tag imagem (img)</h2>
        <img src="images.png"> <br />

        <h2>Utilizando a tag tabela (table, tr e th)</h2>
        <table>
            <tr>
                <th>Aluno</th>
                <th>Matrícula</th>
            </tr>
            <tr>
                <td>Iano Maciel</td>
                <td>21752128</td>
            </tr>
        </table>

        <h2>Utilizando tag de link (a)</h2>
        <a href="https://www.google.com.br">clique aqui</a> para acessar o google
    </body>
</html>
~~~

**Imagem 1**
![image](https://user-images.githubusercontent.com/71051791/130306082-c9094544-6b4d-45b0-817b-e7bd564500ac.png)