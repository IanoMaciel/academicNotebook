# Lista exercício - Pthreads
**Discente:** Iano de Benedito Maciel; <br>
**Matrícula:** 21752128<br>
**Data de entrega:** 20/10/2021
## Importante
Implemente 5 (cinco) questões da lista "Lista Pthreads.doc", sendo 2 (dois) pontos para cada questão. As respostas deverão ser entregues exclusivamente em formato texto ASCII (nada de .pdf, .doc, .docx ou .odt) e deverão ser enviadas através da sala de aula virtual da disciplina na seção "Avaliações". Devem ser organizadas em arquivos separados, um por questão, com o nome no formato "Q[número da questão].[c]", sem aspas. Questões com o nome diferente deste formato não serão aceitas.

**1. Faça um programa que imprima os números primos existentes entre 0 e 99999. UTILIZE
THREADS. Dica: para cada faixa de mil valores crie uma thread e dispare o processo para
cada uma delas.**

**2. O exercício anterior requer alguma forma de sincronismo entre as threads? Ilustre uma
situação em que o sincronismo é necessário quando se trabalha com threads. Quais os
mecanismos existentes em C pra se realizar sincronia entre threads.**

**3. Escreva um programa em C composto por duas threads: a primeira deve contar e exibir na
tela todos os números entre 1 e 500 (de forma crescente); a segunda deve contar e exibir na
tela todos os números entre 500 e 1 (de forma decrescente). As duas threads devem ser
executadas em paralelo.**

**4. Implemente um programa em C que multiplique os elementos de um vetor de tamanho 1000
por um escalar e depois imprima o vetor resultante na tela. O processo de multiplicação deve
ser realizado em paralelo por 10 threads, onde cada thread deve ser responsável por
multiplicar 100 elementos do vetor pelo escalar.**

**5. Escreva um programa que realize o cálculo das somas dos valores das linhas de uma matriz
qualquer de números inteiros e imprima o resultado na tela. Faça com que o cálculo do
somatório de cada linha seja realizado em paralelo por uma thread.**

**6. Escreva um programa em C que inverta os valores das linhas de uma matriz 3x3 de
números inteiros e imprima a matriz resultante na tela. A inversão de cada linha da matriz deve
ser realizada em paralelo por threads.**
**Por exemplo, para a seguinte matriz:**

|1 2 3| <br>
|4 5 6| <br>
|7 8 9|

**O programa deve gerar a seguinte matriz resultante:**

|3 2 1| <br>
|6 5 4| <br>
|9 8 7|

**7. Escreva um programa que realize o cálculo das somas dos valores das linhas de uma matriz
qualquer de números inteiros e imprima o resultado na tela. Faça com que o cálculo do
somatório de cada linha seja realizado em paralelo por uma thread.**