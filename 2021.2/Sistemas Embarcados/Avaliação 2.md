# Avaliação 2

**Nome:** Iano de Benedito Maciel<br>
**Matrícula:** 21752128<br>
**E-mail:** ianomaciel6385@gmail.com<br>

## Questões
**1. Construa um circuito com portas lógicas que permitam modificar as saídas quando processadas. O circuito deverá receber como entrada um registrador A e B e a resposta deverá ser armazenada em X. A Saída deverá inverter o resultado do processamento. Após a construção do circuito, codifique-o usando VHDL.**

![image](https://user-images.githubusercontent.com/71051791/136615376-de172aed-1d2b-46f0-b2ba-8d7d28b1db4e.png)

**Resposta:** b

![image](https://user-images.githubusercontent.com/71051791/136638409-a5bc1f2c-0484-411c-95a1-27dbf44ff058.png)

**Implementação da porta NAND em VHDL**

~~~VHDL
library ieee;
use ieee.std_logic_1164.all;
entity nand2 is
    port (a,b: in std_logic;
        c: out std_logic);
end nand2;
architecture arch_nand2 of nand2 is
begin
    c <= a nand b;
end arch_nand2;
~~~

**2. Codifique o circuito desenvolvido na questão 1 em linguagem de programação Rust.**

~~~rust
#![allow(dead_code)]

#[derive(Debug, Copy, Clone, PartialEq)]
enum Bit {
    L, // Low, false, 0
    H, // High, true, 1
}

trait Component {
    fn update(&mut self, input: &[Bit]) -> Vec<Bit>;
}


fn nand2(a: Bit, b: Bit) -> Bit {
    match (a, b) {
        (Bit::L, Bit::L) => Bit::H,
        (Bit::L, Bit::H) => Bit::H,
        (Bit::H, Bit::L) => Bit::H,
        (Bit::H, Bit::H) => Bit::L,
    }
}

fn nandn(x: &[Bit]) -> Bit {
    match x.len() {
        0 => panic!("Empty input"),
        1 => nand2(x[0], x[0]),
        2 => nand2(x[0], x[1]),
        n => nand2(x[n-1], nandn(&x[0..n-1])),
    }
}

#[derive(Debug, Copy, Clone)]
struct Nand {
    num_inputs: usize,
}

impl Nand {
    fn new(num_inputs: usize) -> Nand {
        Nand { num_inputs }
    }
}

impl Component for Nand {
    fn update(&mut self, input: &[Bit]) -> Vec<Bit> {
        assert_eq!(self.num_inputs, input.len());
        if input.iter().any(|&a| a == Bit::L) {
            vec![Bit::H]
        } else {
            vec![Bit::L]
        }
    }
}

#[derive(Debug, Copy, Clone)]
struct Or2 {
    nand_a: Nand,
    nand_b: Nand,
    nand_c: Nand,
}

impl Or2 {
    fn new() -> Or2 {
        Or2 {
            nand_a: Nand::new(1),
            nand_b: Nand::new(1),
            nand_c: Nand::new(2),
        }
    }
}

impl Component for Or2 {
    fn update(&mut self, input: &[Bit]) -> Vec<Bit> {
        assert_eq!(input.len(), 2);
        let a = input[0];
        let b = input[1];
        let not_a = self.nand_a.update(&[a])[0];
        let not_b = self.nand_b.update(&[b])[0];
        // not_a nand not_b == not (not_a or not_b) == a or b
        self.nand_c.update(&[not_a, not_b])
    }
}

fn main(){
    let mut or_gate = Or2::new();
    // Truth table
    let mut i = vec![Bit::L, Bit::L];
    println!("{:?} = {:?}", i, or_gate.update(&i));
    i = vec![Bit::L, Bit::H];
    println!("{:?} = {:?}", i, or_gate.update(&i));
    i = vec![Bit::H, Bit::L];
    println!("{:?} = {:?}", i, or_gate.update(&i));
    i = vec![Bit::H, Bit::H];
    println!("{:?} = {:?}", i, or_gate.update(&i));
}
~~~

**3. Sobre a Co-síntese no desenvolvimento Hardware/Software Co-designer é correto dizer que:**

- [ ] Co-síntese é o mapeamento real do protótipo virtual para o protótipo em desenvolvimento de tal forma que todas as restrições são satisfeitas.
- [ ] Algumas decisões são tomadas nessa fase como escolha do ambiente de desenvolvimento
- [X] Co-síntese é o mapeamento automático do protótipo virtual para o protótipo real, de tal forma que todas as restrições são satisfeitas.
- [ ] Escolha do processador, a rede de interconexão, protocolos de comunicação não são importantes

**4. Implementação Hardware/Software**

![image](https://user-images.githubusercontent.com/71051791/136616040-feadf86d-7e47-48f4-a6e3-ac04f004b77a.png)

**Com base na Figura acima explique o processo de implementação Hardware/Software**

A implementação Hardware/software, básicamente, é uma técnica ou combinação que permite o projeto como um todo, e não como partes separadas de Hardware e Software. Com isso foi criado o conceito de co-design,ou seja, a sua enssencia é um forma de mesclar  hardware e software em uma tentativa de otimizar e satisfazer as restrições de design, como custo , desempenho e potência do produto final.


**5.Codifique o circuito desenvolvido na questão 1 em linguagem de programação C.**

~~~C
#include <stdio.h>
#define tam 4
int main()
{
   int registradorA[] = {0, 0, 1, 1};
   int registradorB[] = {0, 1, 0, 1};
   
    int i, aux;
    
    printf("\nTabela verdade NAND\n");
    for(i=0; i<tam; i++)
    {
        if(registradorA[i] == 1 && registradorB[i] == 1) 
            aux = 0;
        else 
            aux = 1;
        printf("+------------------+\n");
        printf("+ %d | NAND | %d | %d +\n", registradorA[i], registradorB[i], aux);
    }   
}
~~~