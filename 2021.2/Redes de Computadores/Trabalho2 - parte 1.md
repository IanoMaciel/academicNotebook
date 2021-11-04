# Trabalho 2 - parte 1

**4. Qual a máscara em contagem de bits adequada para se alocar 5000 hosts? E 2000 hosts? Justifique sua
resposta.**

    Para alocarmos 2000 -> 255.255.231.0;
    Para alocarmos 5000 -> 255.255.0.0;
    Ambas são de classe B.

**5. Uma determinada instituição possui o bloco 200.200.10.0/24. Essa instituição possui o conjunto de redes
físicas mostrado na tabela a seguir. Aloque blocos para todas as redes físicas de modo a otimizar o espaço
de endereçamento. Apresente uma tabela contendo o plano de numeração IP para rede da referida
instituição contendo as faixas de redes (endereços de rede, broadcast, 1o e último IP válido, máscara de
sub-rede em notação decimal e contagem de bits para todas as sub-redes).**

| Número de redes  |  Número de Estações  |
| ---------------- | -------------------- |
| 2 | 62 |
| 3 | 14 |
| 5 | 2  |

**6. O endereço 200.15.13.64, máscara 255.255.255.224 é endereço de rede ou de máquina? Justifique a sua
resposta.**

    É endereço de rede, pois, o endereço de máquina geralmente vem no padrão 192.168.0.1