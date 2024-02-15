# Como os arrays funcionam no PHP
O array é uma lista de valores agrupados sob um nome comum.
```
$lista = [];

$lista = array();
```

Você pode definir um array de duas maneiras diferentes:
```
$lista = [1, 2];

$lista = array(1, 2);
```

Arrays podem conter valores de qualquer tipo:
```
$lista = [1, 'test'];
```
E também outros arrays:
```
$lista = [1, [2, 'test']];
```

Você pode acessar os elementos de um array desta forma:
```
$lista = ['a', 'b'];
$lista[0]; // 'a' - o índice começa em 0
$lista[1]; // 'b'
```
Depois que um array é criado, você pode anexar valores a ele, assim:
```
$lista = ['a', 'b'];
$lista[] = 'c';

/*
$lista == [
  "a",
  "b",
  "c",
]
*/
```

# Manipulação de Arrays com PHP

Uma coletânea de exemplos de uso de arrays e funções de manipulação de arrays em *PHP*. 

## Itens

1. [Array Indexado](#array-indexado)
2. [Array Associado](#array-associado)
3. [Funções de Manipulação de Arrays](#Funções-de-Manipulação-de-Arrays)
4. [Manipulação Básica](#Manipulação-Básica)
5. [Manipulação de Chaves e Valores](#Manipulação-de-Chaves-e-Valores)
6. [Busca e Verificação](#Busca-e-Verificação)
7. [Filtragem e Extração](#Filtragem-e-Extração)
8. [Ordenação](#Ordenação)
9. [Combinação e Divisão de Arrays](#Combinação-e-Divisão-de-Arrays)
10. [Percorrendo Array Usando Laços](#Percorrendo-Array-Usando-Laços)
11. [Percorrendo Array Multidimensional Usando Laços](#Percorrendo-Array-Multidimensional-Usando-Laços)

### Array Indexado

Para criar um array indexado

```php
$a = [];
```
Para criar um array indexado com valores iniciais

```php
$a = [1,2,3];
```
### Array Associado

Para criar um array associado

```php
$a = [
    'chave 1' => 'valor 1',
    'chave 2' => 'valor 2',
    'chave 3' => 'valor 3',
    
];
```

# Funções de Manipulação de Arrays em PHP

## 1. Manipulação Básica:

- **count():** Conta o número de elementos em um array.
- **sizeof():** Alias para count().
- **array_count_values():** Conta todas as ocorrências de cada valor distinto em um array.
- **max():** Obtém o valor máximo contido no array.
- **min():** Obtém o valor mínimo contido no array.
- **array_push():** Adiciona um ou mais elementos no final de um array.
- **array_pop():** Remove e retorna o último elemento de um array.
- **array_shift():** Remove e retorna o primeiro elemento de um array.
- **array_unshift():** Adiciona um ou mais elementos no início de um array.
- **implode():** Transforma um array em uma string, unindo os elementos com um delimitador.
- **array_rand():** Obtém um item aleatório do array.
- **array_unique():** Remove valores duplicados de um array.
- **array_product():** Calcula o produto dos valores de um array.
- **array_pad():** Expande um array para um certo comprimento utilizando um determinado valor.
- **array_sum():** Retorna a soma de todos os valores em um array.
- **array_reverse():** Inverte a ordem dos elementos em um array.
- **array_fill():** Preenche um array com um valor específico para um determinado intervalo de chaves.
- **array_key_exists():** Verifica se uma chave existe em um array associativo.
- **array_keys():** Retorna todas as chaves de um array.
- **array_values():** Retorna todos os valores de um array.

## 2. Manipulação de Chaves e Valores:

- **array_keys():** Retorna todas as chaves de um array.
- **array_values():** Retorna todos os valores de um array.
- **array_flip():** Troca as chaves pelos valores e vice-versa.
- **array_reverse():** Inverte a ordem dos elementos em um array.
- **array_change_key_case():** Modifica a caixa de todas as chaves em um array.
- **array_chunk():** Divide um array em pedaços.
- **array_column():** Retorna os valores de uma coluna do array informado.

## 3. Busca e Verificação:

- **in_array():** Verifica se um valor existe em um array.
- **array_search():** Procura um valor no array e retorna a chave correspondente.
- **array_key_exists():** Verifica se uma chave existe em um array associativo.

## 4. Filtragem e Extração:

- **array_filter():** Filtra elementos de um array usando uma função de callback.
- **array_map():** Aplica uma função a cada elemento de um array.
- **array_slice():** Retorna uma parte de um array.
- **array_splice():** Remove uma parte do array e a substitui por novos elementos.
- **array_walk():** Faz algo para cada item no array, podendo alterar valores no array existente.

## 5. Ordenação:

- **sort():** Ordena um array em ordem crescente.
- **rsort():** Ordena um array em ordem decrescente.
- **asort():** Ordena um array associativo em ordem crescente pelos valores.
- **arsort():** Ordena um array associativo em ordem decrescente pelos valores.
- **ksort():** Ordena um array associativo em ordem crescente pelas chaves.
- **krsort():** Ordena um array associativo em ordem decrescente pelas chaves.

## 6. Combinação e Divisão de Arrays:

- **array_merge():** Combina dois ou mais arrays.
- **array_combine():** Cria um novo array usando uma array de chaves e outra de valores.
- **array_diff():** Calcula a diferença entre arrays.
- **array_intersect():** Calcula a interseção de arrays.
- **array_merge_recursive():** Mescla um ou mais arrays recursivamente.
- **array_multisort():** Ordena múltiplos arrays ou arrays multidimensionais.
- **array_key_first():** Obtém a primeira chave de um array.
- **array_key_last():** Obtém a última chave de um array.


### Manipulação Básica

Esta seção aborda as funções básicas de manipulação de arrays em PHP, incluindo contagem, adição e remoção de elementos.

- **count():** Conta o número de elementos em um array.

```php
$array = [1, 2, 3, 4, 5];
$count = count($array); // $count será 5
```
- **sizeof():** Alias para count().

```php
$array = [1, 2, 3, 4, 5];
$size = sizeof($array); // $size será 5
```
- **array_count_values():** Conta todas as ocorrências de cada valor distinto em um array.

```php
$array = [1, 2, 2, 3, 3, 3];
$countValues = array_count_values($array); // $countValues será [1 => 1, 2 => 2, 3 => 3]
```
- **max():** Obtém o valor máximo contido no array.

```php
$array = [1, 7, 3, 9, 5];
$maxValue = max($array); // $maxValue será 9
```
- **min():** Obtém o valor mínimo contido no array.

```php
$array = [1, 7, 3, 9, 5];
$minValue = min($array); // $minValue será 1
```
- **array_push():** Adiciona um ou mais elementos no final de um array.

```php
$array = [1, 2, 3];
array_push($array, 4, 5); // $array será [1, 2, 3, 4, 5]
```
- **array_pop():** Remove e retorna o último elemento de um array.

```php
$array = [1, 2, 3, 4, 5];
$lastElement = array_pop($array); // $lastElement será 5, $array será [1, 2, 3, 4]
```
- **array_shift():** Remove e retorna o primeiro elemento de um array.

```php
$array = [1, 2, 3, 4, 5];
$firstElement = array_shift($array); // $firstElement será 1, $array será [2, 3, 4, 5]
```
- **array_unshift():** Adiciona um ou mais elementos no início de um array.

```php
$array = [2, 3, 4, 5];
array_unshift($array, 1); // $array será [1, 2, 3, 4, 5]
```
- **implode():** Transforma um array em uma string, unindo os elementos com um delimitador.

```php
$array = ["Hello", "World"];
$resultString = implode(" ", $array); // $resultString será "Hello World"
```
- **array_rand():** Obtém um item aleatório do array.

```php
$array = ["apple", "orange", "banana", "grape"];
$randomKey = array_rand($array); // $randomKey será uma chave aleatória do array
```
- **array_unique():** Remove valores duplicados de um array.

```php
$array = [1, 2, 2, 3, 4, 4, 5];
$uniqueArray = array_unique($array); // $uniqueArray será [1, 2, 3, 4, 5]
```
- **array_product():** Calcula o produto dos valores de um array.

```php
$array = [2, 3, 4];
$product = array_product($array); // $product será 24
```
- **array_pad():** Expande um array para um certo comprimento utilizando um determinado valor.

```php
$array = [1, 2, 3];
$paddedArray = array_pad($array, 5, 0); // $paddedArray será [1, 2, 3, 0, 0]
```

### Manipulação de Chaves e Valores

Nesta seção, abordaremos funções que manipulam as chaves e valores dos arrays em PHP.

- **array_keys():** Retorna todas as chaves de um array. Útil para obter uma lista de chaves.
  - Exemplo de uso:
    ```php
    $array = ['nome' => 'João', 'idade' => 30, 'cidade' => 'Exemplo'];
    $chaves = array_keys($array); // $chaves será ['nome', 'idade', 'cidade']
    ```

- **array_values():** Retorna todos os valores de um array. Útil para obter uma lista de valores.
  - Exemplo de uso:
    ```php
    $array = ['nome' => 'João', 'idade' => 30, 'cidade' => 'Exemplo'];
    $valores = array_values($array); // $valores será ['João', 30, 'Exemplo']
    ```

- **array_flip():** Troca as chaves pelos valores e vice-versa. Útil para inverter a estrutura de um array.
  - Exemplo de uso:
    ```php
    $array = ['a' => 1, 'b' => 2, 'c' => 3];
    $invertido = array_flip($array); // $invertido será [1 => 'a', 2 => 'b', 3 => 'c']
    ```

- **array_reverse():** Inverte a ordem dos elementos em um array. Útil para inverter a ordem dos elementos.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5];
    $invertido = array_reverse($array); // $invertido será [5, 4, 3, 2, 1]
    ```

### Busca e Verificação

Nesta seção, apresentamos funções para buscar e verificar a existência de valores ou chaves em um array em PHP.

- **in_array():** Verifica se um valor existe em um array. Útil para determinar se um valor está presente.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5];
    $existe = in_array(3, $array); // $existe será true
    ```

- **array_search():** Procura um valor no array e retorna a chave correspondente. Útil para encontrar a chave associada a um valor.
  - Exemplo de uso:
    ```php
    $array = ['a' => 1, 'b' => 2, 'c' => 3];
    $chave = array_search(2, $array); // $chave será 'b'
    ```

- **array_key_exists():** Verifica se uma chave existe em um array associativo. Útil para verificar a existência de uma chave específica.
  - Exemplo de uso:
    ```php
    $array = ['nome' => 'Maria', 'idade' => 25, 'cidade' => 'Exemplo'];
    $existeChave = array_key_exists('idade', $array); // $existeChave será true
    ```

### Filtragem e Extração

Nesta seção, exploraremos funções que permitem filtrar elementos de um array usando callbacks, aplicar uma função a cada elemento e extrair partes específicas de um array em PHP.

- **array_filter():** Filtra elementos de um array usando uma função de callback. Útil para criar um novo array com base em uma condição.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5, 6];
    $filtrado = array_filter($array, function ($valor) {
        return $valor % 2 == 0;
    }); // $filtrado será [2, 4, 6]
    ```

- **array_map():** Aplica uma função a cada elemento de um array. Útil para modificar cada elemento do array.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5];
    $modificado = array_map(function ($valor) {
        return $valor * 2;
    }, $array); // $modificado será [2, 4, 6, 8, 10]
    ```

- **array_slice():** Retorna uma parte de um array. Útil para extrair uma parte específica de um array.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5];
    $parte = array_slice($array, 2, 2); // $parte será [3, 4]
    ```

- **array_splice():** Remove uma parte do array e a substitui por novos elementos. Útil para realizar alterações mais complexas no array.
  - Exemplo de uso:
    ```php
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 2, 2, [6, 7]); // $array será [1, 2, 6, 7, 5]
    ```
- **array_walk():** Faz algo para cada item no array, podendo alterar valores no array existente.
	- Exemplo de uso:
	```php
	$names = array("Alice", "Bob", "Charlie");
	array_walk($names, function (&$name) {
	$name = strtoupper($name);
	}); // Agora $names contém ["ALICE", "BOB", "CHARLIE"]
	 ```
### Ordenação

Nesta seção, abordaremos funções para ordenar arrays em PHP, seja em ordem crescente, decrescente ou com base nas chaves.

- **sort():** Ordena um array em ordem crescente. Útil para classificar valores numericamente ou alfabeticamente.
  - Exemplo de uso:
    ```php
    $array = [3, 1, 4, 1, 5, 9, 2];
    sort($array); // $array será [1, 1, 2, 3, 4, 5, 9]
    ```

- **rsort():** Ordena um array em ordem decrescente. Semelhante ao sort(), mas em ordem inversa.
  - Exemplo de uso:
    ```php
    $array = [3, 1, 4, 1, 5, 9, 2];
    rsort($array); // $array será [9, 5, 4, 3, 2, 1, 1]
    ```

- **asort():** Ordena um array associativo em ordem crescente pelos valores. Mantém a associação entre chaves e valores.
  - Exemplo de uso:
    ```php
    $array = ['c' => 3, 'a' => 1, 'b' => 2];
    asort($array); // $array será ['a' => 1, 'b' => 2, 'c' => 3]
    ```

- **arsort():** Ordena um array associativo em ordem decrescente pelos valores. Mantém a associação entre chaves e valores.
  - Exemplo de uso:
    ```php
    $array = ['c' => 3, 'a' => 1, 'b' => 2];
    arsort($array); // $array será ['c' => 3, 'b' => 2, 'a' => 1]
    ```

- **ksort():** Ordena um array associativo em ordem crescente pelas chaves. Mantém a associação entre chaves e valores.
  - Exemplo de uso:
    ```php
    $array = ['c' => 3, 'a' => 1, 'b' => 2];
    ksort($array); // $array será ['a' => 1, 'b' => 2, 'c' => 3]
    ```

- **krsort():** Ordena um array associativo em ordem decrescente pelas chaves. Mantém a associação entre chaves e valores.
  - Exemplo de uso:
    ```php
    $array = ['c' => 3, 'a' => 1, 'b' => 2];
    krsort($array); // $array será ['c' => 3, 'b' => 2, 'a' => 1]
    ```

### Combinação e Divisão de Arrays

Nesta seção, exploraremos funções que permitem combinar e dividir arrays em PHP.

- **array_merge():** Combina dois ou mais arrays. Útil para unir múltiplos arrays em um único array.
  - Exemplo de uso:
    ```php
    $array1 = [1, 2, 3];
    $array2 = ['a', 'b', 'c'];
    $combinado = array_merge($array1, $array2); // $combinado será [1, 2, 3, 'a', 'b', 'c']
    ```

- **array_combine():** Cria um novo array usando um array de chaves e outro de valores. Útil para criar arrays associativos.
  - Exemplo de uso:
    ```php
    $chaves = ['a', 'b', 'c'];
    $valores = [1, 2, 3];
    $associativo = array_combine($chaves, $valores); // $associativo será ['a' => 1, 'b' => 2, 'c' => 3]
    ```

- **array_diff():** Calcula a diferença entre arrays. Retorna um array contendo valores presentes no primeiro array, mas ausentes nos arrays subsequentes.
  - Exemplo de uso:
    ```php
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [3, 4, 5, 6, 7];
    $diferenca = array_diff($array1, $array2); // $diferenca será [1, 2]
    ```

- **array_intersect():** Calcula a interseção de arrays. Retorna um array contendo valores que estão presentes em todos os arrays.
  - Exemplo de uso:
    ```php
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [3, 4, 5, 6, 7];
    $intersecao = array_intersect($array1, $array2); // $intersecao será [3, 4, 5]
    ```

## Percorrendo Array Usando Laços

### 1. Usando while para Percorrer um Array
  - Exemplo de uso:
    ```php
	$meuArray = [1, 2, 3, 4, 5];
	$contador = 0;

	while ($contador < count($meuArray)) {
    		echo $meuArray[$contador] . ' ';
    		$contador++;
	}
    ```
### 2. Usando do-while para Percorrer um Array
  - Exemplo de uso:
    ```php
	$meuArray = [1, 2, 3, 4, 5];
	$contador = 0;

	while ($contador < count($meuArray)) {
    		echo $meuArray[$contador] . ' ';
    		$contador++;
	}
    ```
### 3. Usando for para Percorrer um Array
  - Exemplo de uso:
    ```php
	$meuArray = ['a', 'b', 'c', 'd', 'e'];

	$contador = 0;
	do {
	    echo $meuArray[$contador] . ' ';
	    $contador++;
	} while ($contador < count($meuArray));
    ```
### 4. Usando foreach para Percorrer um Array
  - Exemplo de uso:
    ```php
	$meuArray = ['apple', 'banana', 'cherry', 'date'];

	foreach ($meuArray as $fruta) {
    		echo $fruta . ' ';
	}
    ```
## Percorrendo Array Multidimensional Usando Laços
### 1. Usando while para Percorrer um Array Multidimensional
  - Exemplo de uso:
    ```php
	$matriz = [
	    [1, 2, 3],
	    [4, 5, 6],
	    [7, 8, 9]
	];

	$linha = 0;
	while ($linha < count($matriz)) {
	    $coluna = 0;
	    while ($coluna < count($matriz[$linha])) {
	        echo $matriz[$linha][$coluna] . ' ';
	        $coluna++;
	    }
	    echo "\n"; // Pula para a próxima linha após cada linha da matriz
	    $linha++;
	}
    ```
### 2. Usando do-while para Percorrer um Array Multidimensional
  - Exemplo de uso:
    ```php
	$matriz = [
	    [1, 2, 3],
	    [4, 5, 6],
	    [7, 8, 9]
	];

	$linha = 0;
	do {
	    $coluna = 0;
	    do {
	        echo $matriz[$linha][$coluna] . ' ';
	        $coluna++;
	    } while ($coluna < count($matriz[$linha]));
	    echo "\n"; // Pula para a próxima linha após cada linha da matriz
	    $linha++;
	} while ($linha < count($matriz));
    ```
### 3. Usando for para Percorrer um Array Multidimensional
  - Exemplo de uso:
    ```php
	$matriz = [
	    [1, 2, 3],
	    [4, 5, 6],
	    [7, 8, 9]
	];

	for ($linha = 0; $linha < count($matriz); $linha++) {
	    for ($coluna = 0; $coluna < count($matriz[$linha]); $coluna++) {
	        echo $matriz[$linha][$coluna] . ' ';
	    }
	    echo "\n"; // Pula para a próxima linha após cada linha da matriz
	}
    ```
### 4. Usando foreach para Percorrer um Array Multidimensional
  - Exemplo de uso:
    ```php
	$matriz = [
	    [1, 2, 3],
	    [4, 5, 6],
	    [7, 8, 9]
	];

	foreach ($matriz as $linha) {
	    foreach ($linha as $valor) {
	        echo $valor . ' ';
	    }
	    echo "\n"; // Pula para a próxima linha após cada linha da matriz
	}
    ```