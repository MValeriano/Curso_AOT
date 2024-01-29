# Introdução ao PDO no PHP

## O que é o PDO PHP?

PDO (PHP Data Objects) é uma extensão do PHP que fornece uma interface uniforme e consistente para acessar e interagir com diferentes bancos de dados. Ele permite que os desenvolvedores interajam com bancos de dados de forma segura e eficiente, ele simplifica o acesso a dados e aumenta a segurança do código, evitando vulnerabilidades como ataques de SQL injection.
Ou seja O PDO (PHP Data Objects) é uma extensão do PHP que oferece uma interface consistente para acessar e interagir com diferentes bancos de dados, como MySQL, PostgreSQL, SQLite, Oracle, etc.

## Recursos e Vantagens do PDO PHP:

1. **Abstração de Banco de Dados:**
   - Permite o uso do mesmo código para diferentes bancos de dados, simplificando o desenvolvimento.

2. **Segurança:**
   - Facilita o uso de consultas preparadas para evitar ataques de injeção de SQL.

3. **Flexibilidade:**
   - Oferece vários modos de busca para definir como os dados são retornados (arrays, objetos, colunas, etc.).

4. **Tratamento de Erros:**
   - Permite configurar diferentes modos de erro, determinando como os erros são relatados (silencioso, alerta ou exceção).

5. **Transações:**
   - Possibilita a execução de várias operações como uma unidade, garantindo a consistência dos dados.

## Pré-requisitos para Uso do PDO PHP:

- Servidor web (Apache, Nginx, IIS).
- Interpretador PHP.
- Editor de texto.
- Navegador web.
- Driver PDO para o banco de dados desejado.

## Instalação do PDO PHP:

- Siga os passos no site oficial do PHP ou utilize pacotes como XAMPP, WAMP ou MAMP.

## Utilização Básica do PDO PHP:

1. **Criar uma Conexão:**
   - Utilize a classe PDO e seu construtor, passando o DSN com as informações do banco de dados.

2. **Preparar uma Consulta SQL:**
   - Utilize o método `prepare` da classe PDO para criar uma consulta SQL, podendo conter marcadores de parâmetros.

3. **Executar a Consulta SQL:**
   - Utilize o método `execute` da classe PDOStatement, passando um array com os valores dos parâmetros.

4. **Obter os Resultados:**
   - Utilize os métodos `fetch`, `fetchAll`, `fetchColumn` ou `fetchObject` da classe PDOStatement para obter os resultados.

5. **Fechar a Conexão:**
   - Utilize o método `closeCursor` da classe PDOStatement e atribua `null` à variável contendo o objeto PDO.

Este resumo fornece uma visão geral do PDO PHP, destacando seus benefícios e passos básicos para utilizá-lo na interação com bancos de dados.


## Métodos Principais

- **prepare**: Prepara uma instrução SQL para execução.
- **bindParam**: Vincula um parâmetro na instrução preparada a uma variável PHP por referência.
- **bindValue**: Vincula um valor específico a um parâmetro na instrução preparada.
- **execute**: Executa a instrução SQL no banco de dados.
- **query**: Executa uma instrução SQL e retorna um conjunto de resultados como um objeto `PDOStatement`.
- **fetch**: Obtém uma linha do conjunto de resultados como um array associativo, numérico ou objeto.
- **rowCount**: Retorna o número de linhas afetadas pela última operação.
- **lastInsertId**: Retorna o ID da última linha inserida em uma tabela com uma coluna de identidade.

## Exemplo de Conexão a Diferentes Bancos de Dados

### PostgreSQL

```php
<?php
$pdo = new PDO("pgsql:host=seu_host;port=sua_porta;dbname=seu_banco", "seu_usuario", "sua_senha");
?>
```

### SQlite
```php
<?php
$pdo = new PDO("sqlite:seuArquivoDeBancoDeDados.db");
?>
```
### MySQL
```php
<?php
$pdo = new PDO("mysql:host=seu_host;dbname=seu_banco", "seu_usuario", "sua_senha");
?>
```

### Oracle
```php
<?php
$pdo = new PDO("oci:host=seu_host;port=sua_porta;dbname=seu_sid", "seu_usuario", "sua_senha");
?>
```

### MS SQL Server
```php
<?php
$pdo = new PDO("sqlsrv:Server=seu_host;Database=seu_banco", "seu_usuario", "sua_senha");
?>
```


### Referências

1. **The PDO class**
   - [Documentação oficial da classe PDO](https://www.php.net/manual/pt_BR/class.pdo.php)

2. **PHP PDO: Como se conectar ao banco de dados**
   - [Artigo da DevMedia sobre como se conectar ao banco de dados usando PDO](https://www.devmedia.com.br/php-pdo-como-se-conectar-ao-banco-de-dados/37211)

