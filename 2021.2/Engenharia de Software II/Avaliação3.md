# Engenharia de Software II - Terceira Avaliação

**1. Explique Arquitetura de Software baseada em componentes.**
-  Ideia baseado em componentes é construir sistemas usando componentes pré-existentes. Isto traz várias consequências pro ciclo de desenvolvimento. Primeiro, o processo de desenvolvimento de sistemas baseados em componentes é separado do processo de desenvolvimento dos componentes, os componentes poderiam já ter sido desenvolvidos e possivelmente utilizados em outros produtos. Segundo, um novo processo separado vai aparecer: encontrar e avaliar os componentes. Terceiro, as atividades nos processos serão diferentes das atividades em uma abordagem não baseada em componentes. Para o desenvolvimento do sistema, a ênfase estará em encontrar os componentes adequados e verificá-los, e para o desenvolvimento de componentes, projetar pensando no reuso é a principal preocupação. Vale ressaltar que, os componentes arquiteturais devem ser definidos, implementados, mantidos e evoluídos por arquitetos e desenvolvedores de software, sempre tendo suas principais caraterísticas preservadas. Exemplos destas características essenciais para os componentes são padronização, independência, capacidade de interagir com outros componentes, alta capacidade de ser implantado, documentação atualizada e definida de forma clara.
-  
**2. Explique linhas de produtos de software ou famílias de aplicações**
- As linhas de produtos de software ou famílias de aplicações são aplicativos com funcionalidade genérica que podem ser adaptados e configurados para uso em um contexto específico. Uma linha de produtos de software é um conjunto de aplicativos com uma arquitetura comum e componentes compartilhados, com cada aplicativo especializado para refletir diferentes requisitos.

**3. Explique o processo do SCRUM.**
- Scrum é um framework utilizado para gestão dinâmica de projetos, sendo muitas vezes aplicado para o desenvolvimento ágil de um software. É um processo iterativo e incremental, que possui 3 pilares centrais:

- TRANSPARÊNCIA dos processos, dos requisitos de entrega e status. Todos os aspectos significativos do processo como um todo devem estar visíveis e alinhados com todos os responsáveis pelos resultados.

- INSPEÇÃO constante de tudo o que está sendo feito.

- ADAPTAÇÃO tanto do processo, quanto do produto, que podem sofrer mudanças que necessitam de adaptação. Também é importante adaptar o SCRUM para a realidade e cultura da empresa.

- Quanto as funcionalidades: elas são organizadas por ordem de prioridade e o projeto é planejado em Sprints que são períodos de tempo onde os itens selecionados no Product Backlog serão construídos e entregues. As Sprints são planejadas respeitando o time-boxed: precisam ter a mesma duração fixa que varia entre 1 e 4 semanas, sendo mais utilizado o padrão de 2 semanas.

- Antes de cada Sprint começar é feita uma reunião de planejamento (Sprint Planing), onde é criado o Sprint Backlog, que leva em consideração as capacidades e velocidade de entrega do team para definir quantas histórias poderão ser construídas e entregues dentro de uma Sprint.

- Ao término de uma Sprint, deve ser entregue um Incremento do produto (no caso de desenvolvimento, por exemplo, é importante que seja entregue uma parte do software funcionando, ainda que não esteja finalizada). Após a entrega do incremento, é realizada uma Sprint Review, momento em que o Product Owner verifica ser serão inseridas mudanças ou alterações no produto. Essas mudanças são inseridas no backlog, também por prioridades.

- Além disso, há uma reunião realizada antes do início de uma Sprint, onde é construído o Sprint Backlog, chamada de sprint planing.

**4. Explique concorrência, 2. controle e tratamento de eventos,3. persistência de dados, 4. distribuição5.tratamento de erro e exceção, tolerância a falhas, 6. interação e apresentação, e segurança.**

**Concorrência:** A concorrência ocorre quando existem dois ou mais processos executados em simultâneo; mais especificamente, o termo é utilizado quando processos disputam o acesso a recursos partilhados. Com efeito, a gestão da concorrência entre processos é a fonte de inúmeras dificuldades no desenvolvimento de software; o acesso descoordenado a um recurso (a chamada condição de corrida) induz no sistema um comportamento imprevisível. A concorrência é naturalmente dividida nos seguintes níveis:

- Instrução: execução de duas ou mais instruções de máquina simultaneamente (não envolve questões de linguagens de programação);
- Comando: execução de dois ou mais comandos simultaneamente;
- Unidade: execução de duas ou mais unidades, ou subprogramas, simultaneamente;
- Programa: execução de dois ou mais programas simultaneamente (não envolve questões de linguagens de programação)

**Tratamento de eventos:** Uma das maneiras de tentar estabelecer uma comunicação organizada e controlada entre os componentes que formam o conjunto de sistemas de uma empresa/departamento seria utilizar a ocorrência de um fato, ou seja, um evento, pois desta forma teríamos a comunicação entre as partes mantida com um baixo acoplamento, onde emissores e assinantes estariam ligados apenas pela criação destes eventos. Mas, para evitar futuras incoerências com a ocorrência de certos eventos, é importante realizar o que chamamos de controle e tratamento de eventos. Os controles permitem a especificação de métodos de eventos. Os métodos de evento fornecem uma maneira para um controle notificar de forma assíncrona seu cliente de que algo ocorreu. Os métodos de evento são especialmente úteis quando você não deseja que os recursos do cliente sejam associados a uma solicitação de rede ou a uma operação de longa duração. Em vez de forçar o cliente a desperdiçar recursos esperando que o controle retorne um valor, o cliente pode se desligar do controle e se envolver em outros processos enquanto escuta um evento do controle. Um evento de controle faz com que algo aconteça no código do cliente. Quando um método de evento de controle é disparado, ele envia um evento ao cliente, fazendo com que um manipulador de eventos (implementado no cliente) seja executado. O manipulador de eventos é um método como qualquer outro, exceto que o código do cliente não determina quando ele é chamado; em vez disso, o método de evento de controle determina quando o manipulador de eventos é executado.

**Persistência de dados:** A persistência dos dados pode ser compreendida como a garantia de que um dado foi salvo e que poderá ser recuperado quando necessário no futuro. Esta, por sua vez, tem o objetivo de garantir que as informações serão armazenadas em um meio em que possam ser recuperadas de forma consistente. Ou seja, são registros permanentes e que não são perdidos quando há o encerramento da sessão.

**Distribuições de erro e exerção, tolerência a falhas:** Este problema de design está relacionado a como distribuir o software em todo o hardware (incluindo hardware de computador e hardware de rede), como os componentes se comunicam e como o middleware pode ser usado para lidar com software heterogêneo.
- Os erros em desenvolvimento de software são bem comuns, visto que estes são desenvolvidos por seres humanos e eles estão sujetos a falhas. Mas, para contornar tais erros, utiliza-se os mecanismos de tratamento de exceções. Estes, por sua vez, permitem que o desenvolvedor implemente estruturas que serão invocadas quando algo de errado ocorrer na execução da aplicação, permitindo assim que ela continue executando, recuperando-se do erro. Quanto a tolerância a falhas, a prevenção e remoção de falhas não são suficientes quando o sistema exige alta confiabilidade ou alta disponibilidade. Nesses casos o sistema deve ser construído usando técnicas de tolerância a falhas. Essas técnicas garantem funcionamento correto do sistema mesmo na ocorrência de falhas e são todas baseadas em redundância, exigindo componentes adicionais ou algoritmos especiais. Tolerância a falhas não dispensa as técnicas de prevenção e remoção. Sistemas construídos com componentes frágeis e técnicas inadequadas de projeto não conseguem ser confiáveis pela simples aplicação de tolerância a falhas. As técnicas de tolerância a falhas são de duas classes disjuntas:

  - mascaramento ou
  - detecção, localização e reconfiguração
Na primeira classe, mascaramento, falhas não se manifestam como erros, pois são mascaradas na origem. A primeira classe geralmente emprega mais redundância que a segunda e, por não envolver os tempos gastos para as tarefas de detecção, localização e reconfiguração, é a preferida para sistemas de tempo real críticos.

**Interação e apresentação e segurança:** Este problema de design está relacionado a como estruturar e organizar as interações com os usuários, bem como a apresentação de informações (por exemplo, separação de apresentação e lógica de negócios usando a abordagem Model-View-Controller).

**5. Cite e explique as características das ferramentas CASE.**
- Ferramentas CASE são muito abrangentes, podem trabalhar de maneira simples e pontual sob um aspecto particular da engenharia de software, ou podem ser classificadas como complexos mecanismos de integração para suportar várias atividades de uma vez, no que diz respeito à engenharia de software. É importante ressaltar que ferramentas CASE estão disponíveis para várias áreas da engenharia de software e não apenas aos projetos de software. Dessa forma, temos ferramentas CASE para requisitos, análise e projeto de software, implementação, testes, gerência de configuração, gerência de projetos, entre outros. Geralmente, as ferramentas CASE funcionam bem para aquelas áreas mais maduras, na qual os processos possuem melhores definições. Em processos cujas atividades são mais variadas, ainda dependentes da organização, as ferramentas CASE não costumam funcionar muito bem.

**6. Diferencie Coesão e Acoplamento.**
- Cesão está, na verdade, ligado ao princípio da responsabilidade única, que foi introduzido por Robert C. Martin no inicio dos anos 2000 e diz que uma classe deve ter apenas uma única responsabilidade e realizá-la de maneira satisfatória, ou seja, uma classe não deve assumir responsabilidades que não são suas.
- Já o acoplamento significa o quanto uma classe depende da outra para funcionar. E quanto maior for esta dependência entre ambas, dizemos que estas classes elas estão fortemente acopladas. 

**7. Cite e explique as characteristicas das IDEs.**
- Um ambiente de desenvolvimento integrado (IDE) é um software para criar aplicações que combina ferramentas comuns de desenvolvimento em uma única interface gráfica do usuário (GUI). Um IDE geralmente consiste em:
  - Editor de código-fonte;
  - Automação de compilação local
  - Debugger

**8. Quais as diferenças entre os diagramas de Casos de Uso, Sequência e Classe?**
- O Diagrama de Caso de Uso é um ato de mostrar aos desenvolvedores o comportamento de um determinado sistema, aplicação etc. 
- O Diagrama de Sequência ilustra a seqüência das mensagens entre objetos em uma interação. Um diagrama de seqüência consiste em um grupo de objetos representados por linhas de vida e as mensagens que eles trocam durante a interação.
- O Diagrama de Classe é uma representação estática utilizada na área da programação para descrever a estrutura de um sistema, apresentando suas classes, atributos, operações e as relações entre os objetos.

**9. Quais as diferenças entre os Requisitos Funcionais e Não Funcionais?**
- Os requisitos não funcionais são todos aqueles relacionados à forma como o software tornará realidade os que está sendo planejado. Ou seja, enquanto os requisitos funcionais estão focados no que será feito, os não funcionais descrevem como serão feitos.

**10. Qual a importância de fazer uma boa documentação de um Software?**
- A documentação de um software serve para auxiliar programadores, facilitando o uso e entendimento do software, principalmente quando esse software precisa de evoluções. A documentação (especificação, análise e projeto) deve ser bem feita e de fácil entendimento.
