# Introdução ao PDO no PHP

PDO (PHP Data Objects) é uma extensão do PHP que fornece uma interface uniforme e consistente para acessar e interagir com diferentes bancos de dados. Ele permite que os desenvolvedores interajam com bancos de dados de forma segura e eficiente, ele simplifica o acesso a dados e aumenta a segurança do código, evitando vulnerabilidades como ataques de SQL injection.

## Conexão com Banco de Dados

Para se conectar a um banco de dados usando PDO, siga estes passos:

1. **Conectar ao Banco de Dados**: Use a classe `PDO` para criar uma nova conexão.

2. **Preparar a Instrução SQL**: Use o método `prepare` para preparar uma instrução SQL para execução.

3. **Vincular Parâmetros (Opcional)**: Use os métodos `bindParam` ou `bindValue` para associar valores aos parâmetros na instrução preparada.

4. **Executar a Instrução SQL**: Use o método `execute` para executar a instrução preparada.

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
?>```

### MySQL
```php
<?php
$pdo = new PDO("mysql:host=seu_host;dbname=seu_banco", "seu_usuario", "sua_senha");
?>```

### Oracle
```php
<?php
$pdo = new PDO("oci:host=seu_host;port=sua_porta;dbname=seu_sid", "seu_usuario", "sua_senha");
?>```

### MS SQL Server
```php
<?php
$pdo = new PDO("sqlsrv:Server=seu_host;Database=seu_banco", "seu_usuario", "sua_senha");
?>```
