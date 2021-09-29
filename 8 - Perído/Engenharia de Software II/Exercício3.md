# Exercício 3
### Explique
**1. Concorrência**

Concorrência é a tendência de as coisas acontecerem ao mesmo tempo em um sistema. A concorrência é um fenômeno natural, é claro. No mundo real, a qualquer momento, muitas coisas acontecem simultaneamente. Quando projetamos software para monitorar e controlar sistemas do mundo real, devemos lidar com essa concorrência natural.

Ao lidar com problemas de simultaneidade em sistemas de software, geralmente há dois aspectos que são importantes: 
* ser capaz de detectar e responder a eventos externos que ocorrem em uma ordem aleatória 
* garantir que esses eventos sejam respondidos em algum intervalo mínimo exigido.

Os desafios de projetar sistemas concorrentes surgem principalmente por causa das interações que acontecem entre atividades concorrentes. Quando atividades simultâneas interagem, algum tipo de coordenação é necessária.

**2. controle e tratamento de eventos**

Os controles permitem a especificação de métodos de eventos. Os métodos de evento fornecem uma maneira para um controle notificar de forma assíncrona seu cliente de que algo ocorreu. Os métodos de evento são especialmente úteis quando você não deseja que os recursos do cliente sejam associados a uma solicitação de rede ou a uma operação de longa duração. Em vez de forçar o cliente a desperdiçar recursos esperando que o controle retorne um valor, o cliente pode se desligar do controle e se envolver em outros processos enquanto escuta um evento do controle.

Um evento de controle faz com que algo aconteça no código do cliente. Quando um método de evento de controle é disparado, ele envia um evento ao cliente, fazendo com que um manipulador de eventos (implementado no cliente) seja executado. O manipulador de eventos é um método como qualquer outro, exceto que o código do cliente não determina quando ele é chamado; em vez disso, o método de evento de controle determina quando o manipulador de eventos é executado.

**3. Persistência de dados**

Segundo [Kaplan e Haim (2004)](https://en.wikipedia.org/wiki/Persistent_data) dados pesistente denotam informações que raramento são acessadas e provalvelmente não serão modificadas. 

No contexto do armazenamento de dados em um sistema de computador, isso significa que os dados sobrevivem após o término do processo com o qual foram criados. Em outras palavras, para um armazenamento de dados ser considerado persistente, ele deve gravar em um armazenamento não volátil.

**4. Distribuição**

Este problema de design está relacionado com a forma de distributar o software em todo o hardware (incluindo
hardware de computador e hardware de rede),
como os componentes se comunicam e como
middleware pode ser usado para lidar com heteroge -
software neous.

**5. Tratamento de erro e exceção,  tolerância a falhas**

O tratamento de exceções é o método de construção de um sistema para detectar e se recuperar de condições excepcionais. Condições excepcionais são quaisquer ocorrências inesperadas que não sejam contabilizadas na operação normal de um sistema. É difícil proteger um sistema dos efeitos de condições excepcionais porque, por natureza, todas as ocorrências incomuns não podem ser previstas quando o sistema é projetado. Se essas condições excepcionais não forem detectadas e tratadas adequadamente, podem causar um erro ou falha no sistema. [Maxion98](https://users.ece.cmu.edu/~koopman/des_s99/exceptions/#maxion98).

 A tolerância a falhas se concentra em impedir que estados de erro conhecidos causem falhas no sistema. O tratamento de exceções lida com as condições indefinidas e imprevistas que, se não forem verificadas, podem se propagar pelo sistema e causar uma falha. O tratamento de exceções é mais parecido com a prevenção de falhas ou contenção de falhas. Sugiro que o tratamento de exceções é mais difícil do que a tolerância a falhas, porque deve lidar com todas as imprevisibilidades do sistema.

 **6. Interação e apresentação, e segurança.**

Este problema de design está relacionado a como estruturar e organizar as interações com os usuários também
como a apresentação de informações (por exemplo,
separação de apresentação e lógica de negócios
usando a abordagem Model-View-Controller).
Observe que este tópico não especifica a interface do usuário
detalhes, que é a tarefa do design da interface do usuário

