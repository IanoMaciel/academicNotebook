# Aula 02 - Protocolos de Camadas (resumo)
## Conteúdo de hoje (23/08):
+ Atraso e perdas na Internet;
+ Protocolos;
+ Camada de rede.

# Uma visão geral de atrasos em redes de comutação de pessoas
+ Um pacote começa em um sistema final (a origem), passa por
uma série de roteadores e termina sua jornada em outro sistema
final (o destino).
+ Quando um pacote viaja de um nó ao nó, sofre, ao longo desse
caminho, diversos tipos de atraso em cada nó. 

###

**Os mais importantes deles são:** <br>
+ atraso de proceddimento nodal, 
+ atraso de fila,
+ atraso de trasnmissão
+ e o atraso de propagação;
+ juntos, eles se acumulam para formar o atraso nodal total.
+ O desempenho de muitas aplicações da Internet
é bastante afetado por atrasos na rede.
+ Filas de pacotes em buffers de roteadores (atraso).
+ Taxa de chegada de pacotes ao link ultrapassa a capacidade do link de saída (perda).
+ Fila de pacotes esperam por sua vez (atraso).
![image](https://user-images.githubusercontent.com/71051791/130553708-502dc9f7-b26f-4a81-85e5-9452ec6bad12.png)
