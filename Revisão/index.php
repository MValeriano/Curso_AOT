<?php
    // váriaveis -> espaços em memória para guardar dados
    // composto pelo simbolo $ e um identificador
    
    $nome;
    $idade;

    // para atribuir um valor para a variável, usa o operador de atribuição "="

    $nome = "Juvenal Santos";
    $idade = 16;

    echo "O Nome é " . $nome . " e a idade é " . $idade;

    // operadores aritméticos
    //( + , - , *, / )

    $numero1 = 9;
    $numero2 = 3;

    echo '</br>';

    echo $numero1 +  $numero2;

    echo '</br>';

    echo $numero1 -  $numero2;

    echo '</br>';

    echo $numero1 *  $numero2;

    echo '</br>';

    echo $numero1 /  $numero2;

    // Operadores de comparação, sempre retornar o valor true or false

    echo '</br>';

    echo $numero1 == $numero2;

    echo '</br>';

    echo $numero1 != $numero2;

    echo '</br>';

    echo $numero1 >  $numero2;

    echo '</br>';

    echo $numero1 <  $numero2;

    echo '</br>';

    echo $numero1 >=  $numero2;

    echo '</br>';

    echo $numero1 <=  $numero2;

    // Estruturas condicionais 

    echo '</br>';

    if($idade >= 18)
    {
        echo " Pode encher a cara" ;
    }
    else
    {
        echo "Pegue o danoninho.";
    }

    // operadores lógicos ( and, or, not ) (&& , || , !)

    echo '</br>';    
    
    $solteiro = false;
    // if( verdadeiro && falso) = falso
    // if( verdadeiro && verdadeiro)  = verdadeiro
    if($idade >= 18 && $solteiro == true)
    {
        echo " Pode encher a cara" ;
    }
    else
    {
        echo "Pegue o danoninho.";
    }

    echo '</br>';    
    
    // if( verdadeiro || falso) = verdadeiro
    // if( falso || falso)  = falso
    if($idade >= 18 || $solteiro == true)
    {
        echo " Pode encher a cara" ;
    }
    else
    {
        echo "Pegue o danoninho.";
    }

    echo '</br>';

    // tabela verdade ! se precisar estude !!!!!

    // Estruturas de repetição (for, while, do while, foreach)

    echo "escreva 100 números";

    for($i = 1; $i <= 100 ; $i++)
    {
        echo '</br>';
        echo $i;
    }

    echo '</br>';
    echo 'Saiu do loop';

    // estruturas de dados
    // filas, pilhas, listas, arvores e etc...

    // listas, arrays, vetores e objetos

    // arrays, coleção de dados que são acessados pelo indice exemplo [1,2,3,4,5]
    // o indice sempre começa com 0
    // array[2]  
    // objeto, coleção de dados que possuem uma chave e um valor exemplo { chave: valor }
    // objeto:{ nome: 'joão'} 
    // objeto->nome 
    // objeto['nome'] 

    // funções agrupamento de código, para reutilização.
    // tem a palavra reservada function identificador e os parametros entre parenteses
    function validarCpf($cpf)
    {
        $nome = "Juvenal Santos junior";

        echo $nome;
        
        echo '</br>';

        echo $cpf;

        echo '</br>';

        echo "Estou dentro da função";
    }

    echo '</br>';

    validarCpf(123456789);
    
    echo '</br>';

    {
        $nome = "josé silva";
        echo $nome;
    }

    echo '</br>';

    echo $nome;










    