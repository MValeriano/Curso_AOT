# AOT - Aprendizado Orientado à Tarefas

## Tarefa 001 - Desenvolvimento de Sistema de Controle de Estoque

## Descrição da Tarefa:

Desenvolver um sistema de controle de estoque para uma loja que vende produtos de diferentes categorias, como eletrônicos, vestuário e alimentos. O sistema deve permitir o registro de entrada de produtos, preenchimento de atributos específicos para cada categoria, verificação do nível crítico de estoque e atualização dos dados.

## Artefatos Relacionados à Tarefa:

- Diagrama de fluxo para entrada de produtos;
- Modelo de banco de dados para armazenamento das informações;
- Exemplo de alerta para nível crítico de estoque.

## Habilidades Adquiridas:

- Estruturação de formulários para entrada de dados;
- Implementação de estruturas condicionais para diferentes categorias de produtos;
- Utilização de loops para processar múltiplos produtos;
- Conhecimento em manipulação de alertas para situações críticas.

## Resolução do Problema:

### Lógica

#### Entrada de Dados:

- Igual para todos os produtos: código, descrição, preço e peso.
- Para eletrônicos: especificar a potência.
- Para vestuário: indicar o tamanho.
- Para alimentos: informar a data de validade.

#### Resolução do Problema:

- Criar um formulário para entrada de dados, considerando as particularidades de cada categoria.
- Calcular o nível crítico de estoque com base nas características específicas de cada produto.

#### Saída de Dados:

- Imprimir os dados do produto, o nível atual de estoque e alertar se estiver abaixo do nível crítico.

### Algoritmo - Sequência de Passos Lógicos:

1. Solicitar ao usuário os dados: código, descrição, preço e peso.
2. Verificar se a descrição do produto é eletrônico, vestuário ou alimento.
   - Se eletrônico, solicitar a potência.
   - Se vestuário, pedir o tamanho.
   - Se alimento, informar a data de validade.
3. Resolução do problema:
   - Criar um formulário HTML para entrada de dados.
   - Criar uma tabela no banco de dados de produtos com os campos necessários.
4. Calcular o nível crítico de estoque:
   - Verificar na tabela o tipo de produto e suas características específicas.
   - Atualizar o estoque e verificar se está abaixo do nível crítico.
5. Imprimir os dados do produto e o nível de estoque na tela, alertando se necessário.

## Tarefa 002 - Desenvolvimento de Sistema de Agendamento de Consultas Médicas

## Descrição da Tarefa:

Desenvolver um sistema abrangente de agendamento de consultas médicas para uma clínica que disponibiliza serviços nas áreas de clínica geral, pediatria e ortopedia. O sistema deve fornecer funcionalidades para o agendamento eficiente de novas consultas, possibilitando o preenchimento de atributos específicos para cada especialidade médica. Além disso, é necessário implementar mecanismos para buscar consultas de uma especialidade específica e para listar todas as consultas agendadas.

### Detalhamento:

1. **Agendamento de Novas Consultas:**
   - Criar uma interface interativa que facilite o agendamento de novas consultas, incluindo campos para informações do paciente, escolha da especialidade e definição da data e horário da consulta.

2. **Atributos Específicos por Especialidade:**
   - Estruturar o sistema para permitir o preenchimento de atributos específicos para cada especialidade médica, possibilitando uma experiência personalizada durante o agendamento.

3. **Busca por Consultas de uma Especialidade:**
   - Implementar um mecanismo de busca que permita ao usuário encontrar consultas de uma especialidade específica, facilitando a gestão e visualização das agendas.

4. **Listagem de Consultas Agendadas:**
   - Desenvolver uma funcionalidade que exiba todas as consultas agendadas, proporcionando uma visão geral e facilitando o acompanhamento do fluxo de atendimentos.

## Artefatos Relacionados à Tarefa:

- Protótipo de tela para agendamento de consultas;
- Esquema de dados para armazenamento das consultas;
- Script de busca por especialidade no banco de dados.

## Habilidades Adquiridas:

- Implementação avançada de formulários interativos para agendamento de consultas;
- Utilização de estruturas condicionais robustas para lidar com diferentes especialidades médicas;
- Aplicação eficiente de loops para processamento de consultas e listagem;
- Conhecimento sólido em manipulação de dados em um banco de dados.


## Tarefa 003 - Desenvolvimento de Sistema de Controle de Estoque (Modelo Simplificado)

## Descrição da Tarefa:

Desenvolver uma versão simplificada de um sistema de controle de estoque, com foco exclusivo em produtos de uma única categoria. O sistema deve permitir o registro eficiente de entrada de produtos, a verificação de nível crítico de estoque e a exibição de dados atualizados de maneira simplificada.

### Detalhamento:

1. **Registro de Entrada de Produtos:**
   - Criar uma interface simplificada para facilitar o registro de entrada de novos produtos, incluindo campos essenciais como código, descrição e quantidade.

2. **Verificação de Nível Crítico de Estoque:**
   - Implementar um mecanismo de verificação automática do nível de estoque, alertando de forma simples caso o estoque atinja um estado crítico.

3. **Exibição de Dados Atualizados:**
   - Desenvolver uma interface intuitiva que permita visualizar os dados atualizados do estoque, proporcionando uma visão clara da situação dos produtos.

## Artefatos Relacionados à Tarefa:

- Esboço da interface do sistema;
- Estrutura básica do banco de dados;
- Exemplo de alerta para nível crítico de estoque.

## Habilidades Adquiridas:

- Criação de formulários simplificados para entrada de dados;
- Implementação eficiente de estruturas condicionais, considerando uma única categoria de produtos;
- Utilização estratégica de loops para processar dados de estoque;
- Compreensão sólida de alertas para situações críticas.

## Tarefa 004 - Sistema de Cadastro de Alunos e Notas

## Descrição da Tarefa:

Desenvolver um sistema abrangente para o cadastro de alunos e suas respectivas notas em diferentes disciplinas. O sistema deve oferecer a facilidade de inclusão de novos alunos, permitir o registro de notas específicas para cada disciplina, calcular a média geral dos alunos e apresentar uma visão clara dos estudantes aprovados e reprovados.

### Detalhamento:

1. **Cadastro de Alunos:**
   - Implementar uma interface para o cadastro eficiente de novos alunos, incluindo informações essenciais como nome, matrícula, e outros detalhes relevantes.

2. **Registro de Notas por Disciplina:**
   - Criar uma funcionalidade que permita o registro de notas para diferentes disciplinas, garantindo flexibilidade e precisão nos dados acadêmicos.

3. **Cálculo da Média Geral:**
   - Desenvolver um script para o cálculo automático da média geral dos alunos, proporcionando uma visão consolidada do desempenho acadêmico.

4. **Exibição de Alunos Aprovados e Reprovados:**
   - Implementar uma funcionalidade que apresente de forma clara os alunos que foram aprovados e reprovados, baseando-se em critérios definidos.

## Artefatos Relacionados à Tarefa:

- Protótipo de tela para cadastro de alunos e notas;
- Estrutura do banco de dados para armazenamento das informações;
- Script para cálculo da média geral.

## Habilidades Adquiridas:

- Criação de formulários interativos para cadastro de alunos e notas;
- Utilização eficaz de estruturas condicionais para avaliar a aprovação dos alunos;
- Manipulação habilidosa de dados em um banco de dados para armazenar informações acadêmicas.

## Tarefa 005 - Sistema de Reservas de Salas de Reunião

## Descrição da Tarefa:

Desenvolver um sistema eficiente para gerenciamento de reservas de salas de reunião em uma empresa. O sistema deve oferecer recursos que incluem a visualização de salas disponíveis, agendamento de novas reuniões, consulta de reservas futuras e a possibilidade de cancelar reservas existentes.

### Detalhamento:

1. **Visualização de Salas Disponíveis:**
   - Criar uma interface intuitiva que permita aos usuários visualizar as salas de reunião disponíveis, destacando aquelas que estão ocupadas.

2. **Agendamento de Novas Reuniões:**
   - Implementar uma funcionalidade que possibilite o agendamento de novas reuniões, solicitando informações essenciais como data, horário e duração.

3. **Consulta de Reservas Futuras:**
   - Desenvolver um script que permita a consulta fácil e rápida de reservas futuras, proporcionando uma visão clara do uso das salas.

4. **Cancelamento de Reservas:**
   - Integrar uma funcionalidade que permita o cancelamento de reservas existentes, garantindo flexibilidade aos usuários.

## Artefatos Relacionados à Tarefa:

- Layout da interface para visualização e reserva de salas;
- Modelo de dados para armazenamento das reservas;
- Script para consulta de reservas futuras.

## Habilidades Adquiridas:

- Criação de interfaces interativas para visualização e reserva de recursos;
- Utilização eficaz de estruturas condicionais para controle de reservas;
- Manipulação habilidosa de dados em um banco de dados para garantir integridade nas reservas.


## Tarefa 006 - Sistema de Controle de Finanças Pessoais

## Descrição da Tarefa:

Desenvolver um sistema abrangente para o controle de finanças pessoais, proporcionando ao usuário a capacidade de registrar suas receitas e despesas, calcular o saldo atual e visualizar um histórico financeiro. O sistema deve oferecer opções robustas para categorização das transações, permitindo uma análise detalhada dos gastos.

### Detalhamento:

1. **Registro de Receitas e Despesas:**
   - Criar uma interface intuitiva para o registro eficiente de receitas e despesas, facilitando a entrada de dados pelo usuário.

2. **Cálculo do Saldo Atual:**
   - Desenvolver um script que, com base nas transações registradas, calcule e apresente o saldo financeiro atual.

3. **Visualização de Histórico Financeiro:**
   - Implementar uma funcionalidade que permita ao usuário visualizar um histórico completo de suas transações, organizadas por data e categoria.

4. **Categorização de Transações:**
   - Incluir opções de categorização para as transações, possibilitando ao usuário analisar seus gastos de forma segmentada.

## Artefatos Relacionados à Tarefa:

- Esboço da interface para registro de receitas e despesas;
- Estrutura de dados para armazenamento das transações;
- Script para cálculo do saldo atual.

## Habilidades Adquiridas:

- Criação de formulários interativos para entrada de transações financeiras;
- Utilização efetiva de estruturas condicionais para categorização inteligente;
- Manipulação hábil de dados para o cálculo preciso do saldo e exibição do histórico financeiro.

## Tarefa 007 - Sistema de Gerenciamento de Tarefas

## Descrição da Tarefa:

Desenvolver um sistema eficiente de gerenciamento de tarefas pessoais, proporcionando ao usuário a capacidade de adicionar, excluir e marcar tarefas como concluídas. O sistema deve organizar automaticamente as tarefas por prioridade e permitir uma fácil visualização das pendências.

### Detalhamento:

1. **Adição, Exclusão e Marcação de Tarefas:**
   - Criar uma interface intuitiva para a adição de novas tarefas, exclusão de tarefas existentes e marcação de tarefas como concluídas.

2. **Organização por Prioridade:**
   - Implementar um algoritmo de ordenação que organize automaticamente as tarefas por prioridade, garantindo que as mais importantes se destaquem.

3. **Visualização de Tarefas Pendentes:**
   - Desenvolver uma funcionalidade que permita ao usuário visualizar facilmente suas tarefas pendentes, destacando aquelas que necessitam de atenção imediata.

## Artefatos Relacionados à Tarefa:

- Layout da interface para adição e exclusão de tarefas;
- Estrutura de dados para armazenamento das tarefas;
- Script para ordenação e filtragem de tarefas.

## Habilidades Adquiridas:

- Criação de interfaces simples e intuitivas para interação do usuário;
- Utilização efetiva de estruturas condicionais para organizar tarefas com base em prioridade;
- Manipulação eficaz de dados para garantir uma visualização clara e precisa das tarefas pendentes.


## Tarefa 008 - Sistema de Registro de Peso e Altura

## Descrição da Tarefa:

Desenvolver um sistema abrangente para registro de peso e altura de usuários, possibilitando o acompanhamento ao longo do tempo. O sistema deve calcular o Índice de Massa Corporal (IMC) e fornecer feedback personalizado com base nos resultados obtidos.

### Detalhamento:

1. **Registro de Peso e Altura:**
   - Criar uma interface amigável para o registro preciso e fácil de peso e altura pelos usuários.

2. **Cálculo do Índice de Massa Corporal (IMC):**
   - Implementar um script para calcular automaticamente o IMC com base nos dados de peso e altura fornecidos.

3. **Feedback Personalizado:**
   - Utilizar estruturas condicionais para fornecer feedback personalizado sobre a situação atual do usuário com base no IMC calculado.

4. **Acompanhamento ao Longo do Tempo:**
   - Estruturar uma base de dados eficiente para armazenar as informações registradas, permitindo que os usuários acompanhem seu progresso ao longo do tempo.

## Artefatos Relacionados à Tarefa:

- Protótipo da interface para registro de peso e altura;
- Estrutura de dados para armazenamento das informações;
- Script para cálculo do IMC e feedback.

## Habilidades Adquiridas:

- Criação de formulários intuitivos para registro de dados;
- Utilização efetiva de estruturas condicionais para fornecer feedback personalizado;
- Manipulação eficaz de dados para garantir o acompanhamento detalhado ao longo do tempo.


## Tarefa 009 - Sistema de Controle de Estoque

## Descrição da Tarefa:

Desenvolver um sistema abrangente para o controle de estoque de produtos em uma loja. O sistema deve facilitar o gerenciamento por meio do cadastro eficiente de novos produtos, registro detalhado de entradas e saídas de estoque, além de fornecer relatórios precisos sobre a situação atual do estoque.

### Detalhamento:

1. **Cadastro de Novos Produtos:**
   - Criar uma interface intuitiva para o cadastro de novos produtos, permitindo a inclusão de informações essenciais, como código, descrição, preço e categoria.

2. **Registro de Entradas e Saídas de Estoque:**
   - Implementar um sistema eficaz para o registro de entradas e saídas de estoque, considerando aspectos como quantidade, data e motivo.

3. **Controle Eficiente:**
   - Utilizar estruturas condicionais para garantir o controle eficiente, gerenciando adequadamente as atualizações de estoque com base nas operações realizadas.

4. **Relatórios Detalhados:**
   - Desenvolver scripts para gerar relatórios detalhados sobre a situação atual do estoque, incluindo informações como produtos disponíveis, níveis críticos e histórico de movimentação.

## Artefatos Relacionados à Tarefa:

- Layout da interface para cadastro de produtos e controle de estoque;
- Estrutura de dados para armazenamento das informações;
- Script para registro de entradas e saídas de estoque.

## Habilidades Adquiridas:

- Desenvolvimento de formulários intuitivos para o cadastro eficiente de produtos;
- Utilização efetiva de estruturas condicionais para o controle preciso de entradas e saídas;
- Manipulação avançada de dados para a geração de relatórios detalhados sobre o estoque.


## Tarefa 010 - Sistema de Notificações de Compromissos

## Descrição da Tarefa:

Desenvolver um sistema robusto de notificações para o acompanhamento eficiente de compromissos e tarefas agendadas. O sistema deve oferecer a funcionalidade de adicionar novos compromissos, configurar lembretes personalizados e proporcionar notificações em tempo real para manter os usuários informados.

### Detalhamento:

1. **Adição de Compromissos:**
   - Criar uma interface amigável para a adição de novos compromissos, considerando detalhes como título, data, hora e descrição.

2. **Configuração de Lembretes:**
   - Implementar um sistema flexível que permita aos usuários configurar lembretes personalizados para cada compromisso, adaptando-se às preferências individuais.

3. **Notificações em Tempo Real:**
   - Desenvolver scripts para o envio de notificações em tempo real, garantindo que os usuários sejam alertados de forma imediata sobre compromissos iminentes.

4. **Gerenciamento Eficiente:**
   - Utilizar estruturas condicionais para o gerenciamento eficiente das notificações, considerando situações como cancelamento de compromissos e ajustes de horário.

## Artefatos Relacionados à Tarefa:

- Protótipo da interface para adição e configuração de compromissos;
- Estrutura de dados para armazenamento das informações de compromissos;
- Script para envio de notificações em tempo real.

## Habilidades Adquiridas:

- Desenvolvimento de interfaces intuitivas para adição e configuração de compromissos;
- Utilização eficaz de estruturas condicionais para gerenciar notificações de forma personalizada;
- Implementação de funcionalidades em tempo real para garantir uma experiência de usuário dinâmica.

