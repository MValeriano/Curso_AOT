<?php

// Variável 
// é um espaço na memória do computador onde podemos armazenar dados 
//que podem ser alterados durante a execução do programa. 
// Cada variável possui um nome único que a identifica e um tipo que define o 
// tipo de dado que ela pode armazenar, como números inteiros, decimais, 
// texto (strings) ou valores booleanos (verdadeiro ou falso). 
// As variáveis são fundamentais para a manipulação de dados e a 
// execução de cálculos em um programa.

// Pense em uma variável como um "caixinha" com um nome, onde podemos 
// guardar informações (números, textos, etc.) para utilizar em algum 
// ponto do programa.

// as variáveis podem armazenar diferentes tipos de dados, como:

// - Números inteiros (ex: 5, -10)
// - Números decimais (ex: 3.14, -2.5)
// - Textos (chamados de strings, ex: "Olá, mundo!")
// - Booleanos (verdadeiro ou falso, ex: true ou false)
    
// Algumas boas práticas para trabalhar com variáveis incluem:
    
// - Nomear as variáveis de forma clara e descritiva.
// - Sempre inicializar (dar um valor) para a variável.
// - Usar tipos de dados adequados para o valor armazenado.

//Exercícios

// Para resolver os exercícios de programação, siga estas etapas:

// 1. Leia o exercício com atenção: 
//     - Antes de começar leia o enunciado do exercício cuidadosamente. 
//     - Tente entender exatamente o que está sendo pedido.
//    - Por exemplo, se o exercício pede para converter Celsius em Fahrenheit, 
//      pergunte-se: 'Qual é o valor que tenho?', 'Qual a fórmula para converter?', e 
//      'Qual é o valor final que eu devo exibir?'. 
//      Pense de forma lógica e sequencial.
// 2. Identifique as entradas e saídas: 
//     - Determine quais são os dados de entrada que o programa precisa receber e 
//     - quais são os resultados que ele deve produzir.
//     - Por exemplo, no exercício de conversão de temperatura, a entrada é a 
//       temperatura em Celsius, e a saída é a temperatura em Fahrenheit, o processamento 
//       é a aplicação da fórmula de conversão aos dados de entrada.
// 3. Quebre o problema em partes menores: 
//     - Se o exercício parecer complicado, divida-o em etapas menores e 
//       mais gerenciáveis. Isso facilitará a compreensão e a resolução do problema.
//     - Por exemplo: se você precisa calcular quantas horas e minutos existem 
//       em um dado número de minutos, comece dividindo os minutos por 60 para 
//       obter as horas, e depois calcule o resto da divisão para obter os minutos restantes.
//     - Outro exemplo: em um problema que envolva mais cálculos, como calcular 
//       o valor total de uma compra com descontos e impostos, divida em: 
//       calcular o desconto primeiro, depois adicionar os impostos e, finalmente, calcular o total.
// 4. Descreva o algoritmo em linguagem natural: 
//     - descreva os passos que o programa deve seguir em linguagem natural. 
//     Isso ajudará a organizar suas ideias e a garantir que você não esqueça 
//     nenhum passo importante.
//     - Exemplo: em um problema para calcular a área de um retângulo: 
//       1. Criar a variável valor_largura.
//       2. Criar a variável valor_altura.
//       3. Receber o valor da variável valor_largura.
//       4. Receber o valor da variável valor_altura.    
//       5. Criar a variável area_retangulo.    
//       6. Multiplicar a variável valor_largura pela variável valor_altura.
//       7. Gravar na variável area_retangulo o resultado da multiplicação valor_largura pela variável valor_altura.
//       8. Exibir na tela o valor da variável area_retangulo.
// 5. Implemente o código: 
//     - Com o algoritmo em mãos, comece a escrever o código na linguagem de programação escolhida (PHP ou JavaScript). Lembre-se de declarar e inicializar as variáveis corretamente.
// 6. Teste o programa: 
//     - Após escrever o código, teste-o com diferentes valores de entrada para 
//       garantir que ele funciona corretamente. 
//     - Verifique se os resultados estão de acordo com o esperado.
// 7. Revise e melhore: 
//     - Se encontrar algum erro, revise o código e faça as correções necessárias. 
//     - Sempre procure maneiras de melhorar a eficiência e a clareza do seu código.

//Exercício 1: Conversor de Temperatura
//Problema: Crie um programa que converta uma temperatura de 
//graus Celsius para Fahrenheit.

//Fórmula: Fahrenheit = (Celsius * 9/5) + 32

//Exercício 2: Calculadora de Idade
//Problema: Escreva um programa que, dado o ano de nascimento de uma pessoa, 
//calcule a idade dela no ano atual.

//Exercício 3: Calculadora de Gorjeta
//Problema: Crie um programa que calcule o valor da gorjeta em um restaurante, 
//dado o valor total da conta e a porcentagem da gorjeta desejada (ex: 10%, 15%).

//Exercício 4: Conversor de Minutos para Horas
//Problema: Faça um programa que converta um número de minutos em horas e minutos. 
//Por exemplo, 130 minutos devem ser convertidos para 2 horas e 10 minutos.

//Exercício 5: Calculadora de Média
//Descrição: Crie um programa que calcule a média de três notas fornecidas 
//pelo usuário.

//Exercício 6: Conversor de Moeda
//Descrição: Crie um programa que converta um valor em reais (BRL) para dólares 
//(USD).

//Exercício 7: Calculadora de Área de Retângulo
//Descrição: Crie um programa que calcule a área de um retângulo.
//
// **** GABARITO Exercício 7 *****
//
//  Entradas: Largura e altura do retângulo.
//  Processamento: Uso da fórmula Largura x altura
//  Saída: Área do retângulo.
//  Algoritmo :
//     - Exemplo: em um problema para calcular a área de um retângulo: 
//       1. Criar a variável valor_largura.
//       2. Criar a variável valor_altura.
//       3. Receber o valor da variável valor_largura.
//       4. Receber o valor da variável valor_altura.    
//       5. Criar a variável area_retangulo.    
//       6. Multiplicar a variável valor_largura pela variável valor_altura.
//       7. Gravar na variável area_retangulo o resultado da multiplicação valor_largura pela variável valor_altura.
//       8. Exibir na tela o valor da variável area_retangulo.

PHP:
<?php
// Entradas: Largura e altura do retângulo.
// Processamento: Uso da fórmula Largura x altura
// Saída: Área do retângulo.

// 1. Criar a variável valor_largura.
$valor_largura;

// 2. Criar a variável valor_altura.
$valor_altura;

// 3. Receber o valor da variável valor_largura.
$valor_largura = 5; // Exemplo de entrada

// 4. Receber o valor da variável valor_altura.
$valor_altura = 10; // Exemplo de entrada

// 5. Criar a variável area_retangulo.
$area_retangulo;

// 6. Multiplicar a variável valor_largura pela variável valor_altura.
$area_retangulo = $valor_largura * $valor_altura;

// 7. Gravar na variável area_retangulo o resultado da multiplicação.
// 8. Exibir na tela o valor da variável area_retangulo.
echo "A área do retângulo é: " . $area_retangulo;
?>

// JavaScript:
// Entradas: Largura e altura do retângulo.
// Processamento: Uso da fórmula Largura x altura
// Saída: Área do retângulo.

// 1. Criar a variável valor_largura.
let valor_largura;

// 2. Criar a variável valor_altura.
let valor_altura;

// 3. Receber o valor da variável valor_largura.
valor_largura = 5; // Exemplo de entrada

// 4. Receber o valor da variável valor_altura.
valor_altura = 10; // Exemplo de entrada

// 5. Criar a variável area_retangulo.
let area_retangulo;

// 6. Multiplicar a variável valor_largura pela variável valor_altura.
area_retangulo = valor_largura * valor_altura;

// 7. Gravar na variável area_retangulo o resultado da multiplicação.
// 8. Exibir na tela o valor da variável area_retangulo.
console.log("A área do retângulo é: " + area_retangulo);
//Exercício 1: Conversor de Temperatura
//Problema: Crie um programa que converta uma temperatura de 
//graus Celsius para Fahrenheit.

//Fórmula: Fahrenheit = (Celsius * 9/5) + 32

//Exercício 2: Calculadora de Idade
//Problema: Escreva um programa que, dado o ano de nascimento de uma pessoa, 
//calcule a idade dela no ano atual.

//Exercício 3: Calculadora de Gorjeta
//Problema: Crie um programa que calcule o valor da gorjeta em um restaurante, 
//dado o valor total da conta e a porcentagem da gorjeta desejada (ex: 10%, 15%).

//Exercício 4: Conversor de Minutos para Horas
//Problema: Faça um programa que converta um número de minutos em horas e minutos. 
//Por exemplo, 130 minutos devem ser convertidos para 2 horas e 10 minutos.

//Exercício 5: Calculadora de Média
//Descrição: Crie um programa que calcule a média de três notas fornecidas 
//pelo usuário.

//Exercício 6: Conversor de Moeda
//Descrição: Crie um programa que converta um valor em reais (BRL) para dólares 
//(USD).

//Exercício 7: Calculadora de Área de Retângulo
//Descrição: Crie um programa que calcule a área de um retângulo.
//
// **** GABARITO Exercício 7 *****
//
//  Entradas: Largura e altura do retângulo.
//  Processamento: Uso da fórmula Largura x altura
//  Saída: Área do retângulo.
//  Algoritmo :
//     - Exemplo: em um problema para calcular a área de um retângulo: 
//       1. Criar a variável valor_largura.
//       2. Criar a variável valor_altura.
//       3. Receber o valor da variável valor_largura.
//       4. Receber o valor da variável valor_altura.    
//       5. Criar a variável area_retangulo.    
//       6. Multiplicar a variável valor_largura pela variável valor_altura.
//       7. Gravar na variável area_retangulo o resultado da multiplicação valor_largura pela variável valor_altura.
//       8. Exibir na tela o valor da variável area_retangulo.

PHP:
<?php
// Entradas: Largura e altura do retângulo.
// Processamento: Uso da fórmula Largura x altura
// Saída: Área do retângulo.

// 1. Criar a variável valor_largura.
$valor_largura;

// 2. Criar a variável valor_altura.
$valor_altura;

// 3. Receber o valor da variável valor_largura.
$valor_largura = 5; // Exemplo de entrada

// 4. Receber o valor da variável valor_altura.
$valor_altura = 10; // Exemplo de entrada

// 5. Criar a variável area_retangulo.
$area_retangulo;

// 6. Multiplicar a variável valor_largura pela variável valor_altura.
$area_retangulo = $valor_largura * $valor_altura;

// 7. Gravar na variável area_retangulo o resultado da multiplicação.
// 8. Exibir na tela o valor da variável area_retangulo.
echo "A área do retângulo é: " . $area_retangulo;
?>

// JavaScript:
// Entradas: Largura e altura do retângulo.
// Processamento: Uso da fórmula Largura x altura
// Saída: Área do retângulo.

// 1. Criar a variável valor_largura.
let valor_largura;

// 2. Criar a variável valor_altura.
let valor_altura;

// 3. Receber o valor da variável valor_largura.
valor_largura = 5; // Exemplo de entrada

// 4. Receber o valor da variável valor_altura.
valor_altura = 10; // Exemplo de entrada

// 5. Criar a variável area_retangulo.
let area_retangulo;

// 6. Multiplicar a variável valor_largura pela variável valor_altura.
area_retangulo = valor_largura * valor_altura;

// 7. Gravar na variável area_retangulo o resultado da multiplicação.
// 8. Exibir na tela o valor da variável area_retangulo.
console.log("A área do retângulo é: " + area_retangulo);
