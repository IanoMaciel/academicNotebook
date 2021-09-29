# Resumo - Resuluções de problemas por meio de buscas (Capítulo 3)
Nossa discussão sobre a resolução de problemas começa com uma definição precisa dos
**problemas** e de suas **soluções** e fornece vários exemplos para ilustrar essas definições. Em seguida,
descrevemos vários algoritmos de busca de propósito geral que podem ser utilizados para resolver
esses problemas. Veremos diversos algoritmos de busca **sem informação** — algoritmos para os
quais não se fornece nenhuma informação sobre o problema a não ser sua definição. Embora alguns
desses algoritmos possam resolver qualquer problema solucionável, nenhum deles pode fazê-lo de
forma eficiente. Os algoritmos de busca **informada**, por outro lado, podem ter sucesso a partir de
alguma orientação sobre onde procurar soluções.

## 3.1. Resuluções de problemas por meio de buscas 
A **formulação de objetivos**, baseada na
situação atual e na medida de desempenho do agente, é o primeiro passo para a resolução de
problemas.
##
A **formulação de problemas** é o processo de decidir que ações e estados devem ser considero, dado um **objetivo**.

### 3.1.1. Problemas e soluções bem definidas 
Um **problema** pode ser definidos por cinc componenetes:

Função AGENTE-DE RESOLUÇÃO-DE-PROBLEMAS-SIMPLES(percepção) **retorna** uma **ação**

![image](https://user-images.githubusercontent.com/71051791/130548617-9deba64f-672f-4b15-9ee0-73fa3c0cf72e.png)
Um agente simples de resoluções de problemas. Primeiro, ele formula um objetivo em um probelma, busca uma sequência de resolvem o probelma e depois executa as ações, uma vez de cada vez. Quando essa sequência se completa, ele formula outro objetivo e recomeça. 