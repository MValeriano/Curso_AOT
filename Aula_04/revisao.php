<?php

	// Variavéis 
	// Guardar e recuperar nossos dados, que serão usados quando o sistema estiver funcionando.
	
	// Em PHP a variavel sempre começa com o "$" depois o identificador ( $identificador )
	// tipos de dados em PHP
	// bool : valores booleanos, verdadeiro e falso;
	// int : números inteiros, sem o ( . ) sem decimais;
	// float : número de ponto flutuante ( decimais )  com ( . );
	// string : sequência de caracteres;
	// array : matriz;
	// object : objeto;
	// null: não possui um valor atribuído.

	// para atribuir um valor à váriavel usamos o operador de atribuição ( = )
	// então o valor à esquerda do operador de atribuição recebe o valor à direita do operador de atribuição
	// $identificador = valor;
	// ------------------------------------------------------------------------
	
	// Métodos para exibir informações na tela 

	// echo = imprimir somente strings;
	// print = imprimir somente strings;
	// print_r = que irá exibir arrays;
	// var_dump = que irá exibir os dados na tela com mais informações.

	//------------------------------------------------------------------------


	// Operadores 
	// Operadores de atribuição 
	// =

	// Operadores aritméticos 
	// + (soma), - (subtração), / (divisão) , * (multiplicação), % (resto), ** (exponencial)

	// Operadores de comparação 
	// < ( Menor ) , > ( maior ), <= ( Menor ou igual ), >= ( maior ou igual )
	// == ( igual ), != ( diferente ), ! ( negar ), ( (===), (!==) exatamente iguais, além do valor o tipo tem que ser igual)
	// elemento à esquerda ( operador ) elemento à direita

	// Operadores lógicos
	// && ou and = "E", 
	// || ou or = "OU",
	/*
	var_dump(true && true); 
	echo "<br/>";
	var_dump(false && true); 
	echo "<br/>";
	var_dump(false && false); 
	echo "<br/>";
	var_dump(true || true); 
	echo "<br/>";
	var_dump(false || true); 		
	echo "<br/>";
	var_dump(false || false); 	
	echo "<br/>";
	var_dump( (false && false) || (true || false) );
	*/
	// Operadores binários
	// ++ (incremento), -- (decremento)
	// incrementa ou decremento o valor em uma unidade

	// Estruturas de controle
	// Condicionais
	
	// se (if), senão (else ), senão se ( elseif ),troca (switch)
	// 
	// if(condição){ código se verdadeiro }
	// if(condição){ código se verdadeiro } else { código se falso}
	// if(condição){ código se verdadeiro } elseif(condição){ código se verdadeiro }else { código se falso}
	/*
	if(pedido == "sim")
	{
		echo "Casou !";
	}
	elseif(pedido == "talvez")
	{
		echo "Espera para pedir de novo ano que vem!";
	}
	elseif(pedido == "vamos noivar primeiro")
	{
		echo "Você está enrrolando!";
	}
	elseif(pedido == "Preciso conhecer novas antes")
	{
		echo "ihhh ! quer piriguetar !";
	}else
	{
		echo "Meteu o pé na bunda!";
	}
	*/
	
	//switch 
	// switch(valor){ case valorTestado : código; break; default: código }
	/*
	switch(pedido)
	{
		case "sim" : echo "Casou !";
		break;
		case "talvez" : echo "Espera para pedir de novo ano que vem!";
		break;
		case "vamos noivar primeiro" : echo "Você está enrrolando!";
		break;
		case "Preciso conhecer novas antes" : echo "ihhh ! quer piriguetar !";
		break;
		default : echo "Meteu o pé na bunda!";		
	}
	*/
	/*
	$idade = 20;
	
	if( $idade >= 16 && $idade < 18 )
	{
		echo "pode votar, mas não é obrigatório!";
	}
	elseif( $idade >= 18 && $idade < 70)
	{
		echo "Você é obrigado a votar!";
	}
	*/
	/*
	       and                     or
	true  true    true	true  true  true
	true  false   false	true  false true
	false true    false	false true  true
	false false   false	false false false
	*/
	
	// laços de repetição
	// Loops 
	// while, do while, for e o foreach

	//while
	// while(condição){ código à ser repetido; uma maneira de deixa a condição de teste falsa }
	/*
	$condicao = 0;

	while($condicao <= 10){
		echo "<br/>".$condicao;
		$condicao++;
	}
	*/
	// do while 
	// do { código à ser repetido; uma maneira de deixa a condição de teste falsa  } while(condição);
	/*
	$condicao = 0;

	do{
		echo "<br/>".$condicao;		
		$condicao++;
	} while($condicao <= 10);
	*/
	// for
	// for( inicialização da variável ; teste condicional ; incremento da variável) { código }
	// for( $i = 0 ; $i < 10 ; $i++){ código }
	/*
	for( $condicao = 0 ; $condicao <= 10 ; $condicao++ ){
		echo "<br/>".$condicao;	
	}
	*/

	// foreach 
	// foreach( array as variavel que irá receber os valores da iteração) { código }
	/*
	$array = ['banana', 'maça', 'pera', 'uva', 'goiaba'];
	
	foreach($array as $fruta){
		echo "<br/>".$fruta;
	}
	*/

	// instruções break e continue
	/*
	$array = ['banana', 'maça', 'pera', 'uva', 'goiaba'];
	
	foreach($array as $fruta){		
		if ($fruta == 'pera')
		{
			continue;
		}
		else
		{
			echo "<br/>".$fruta;
		}
	}
	*/

	// função
	// Função pode ou não retornar um valor;
	// Função pode ou não ter argumentos;
	// function identificador(){ código }
 	// function identificador(){ código; return retorna um valor }
        // function identificador( parametro ){ código }
 	// function identificador( parametro ){ código; return retorna um valor }
	
	function somaNumeros( $num1, $num2) 
	{
		return $num1 + $num2;
	}

	$resultado = somaNumeros(5,3);

	echo $resultado . "<br/>";

	$resultado = somaNumeros(25,33);

	echo $resultado . "<br/>";

	$resultado = somaNumeros(8,4);

	echo $resultado . "<br/>";

	function subtraiNumeros( $num1, $num2) 
	{
		echo($num1 - $num2);
	}

	subtraiNumeros(10,5);
	

?>