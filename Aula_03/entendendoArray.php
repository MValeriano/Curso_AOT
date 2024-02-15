<?php

	// Entendo Arrays
	// Criar um array em PHP 

	$frutas = array( "Maça" , "Banana" , "Abacate", "Manga" );

	$cores = [ "Azul" , "Amarelo" , "Roxo" , "Verde" ];

	$intervaloNumero = range(1,5);

	print_r( $intervaloNumero );
	echo "<br/>";

	$arrayNumerico = array(1,2,3,10,50);
	$arrayFloat = array(10.5,15.44,98.50);

	var_dump( $arrayNumerico ,  $arrayFloat );
	echo "<br/>";
	

	// array associativo, associar um valor à um identificador

	$pessoa = array( "nome" => "Maria" , "idade" => 18 , "salário" => 1850.33 );
	
	echo "<pre>";
	print_r( $pessoa );
	echo "</pre>";
	echo "<br/>";

	print_r($pessoa["nome"]);
	echo "<br/>";

	// arrays multidimensionais ( array de array )
	
	$alunos = array(
		array("nome" => "Maria" , "idade" => 18 , "salário" => 1850.33) ,
		array("nome" => "João" , "idade" => 17 , "salário" => 1350.33) ,
		array("nome" => "Gilson" , "idade" => 19 , "salário" => 2950.33) ,
	);

	echo "<pre>";
	print_r( $alunos );
	echo "</pre>";
	echo "<br/>";

	// echo e print só imprimem na tela Strings.
	// para imprimir Arrays usa-se o var_dump e o print_r.

	//para acessar um membro do array usa-se os colchetes "[]"

	print_r( $frutas[1] );
	echo "<br/>";

	print_r( $cores[1] );
	echo "<br/>";

	// para inserir um novo valor ao nosso array usamos os colchetes "[]"

	$frutas[] = "Abacaxi";

	$cores[] = "Cinza";

	print_r($frutas);
	echo "<br/>";


	print_r($cores);
	echo "<br/>";
	//podemos alterar um valor dentro do array usamos os colchetes "[]"
	
	$frutas[2] = "Laranja";
	
	$cores[2] = "Lilás";

	print_r($frutas);
	echo "<br/>";

	print_r($cores);
	echo "<br/>";
	
	echo "<hr/>";

	echo "<br/>";

	// Metodos de manipulação de Arrays 

	echo "Manipulação Básica";
	
	echo "<br/>";
	echo "count : ".count($pessoa);
	echo "<br/>";
	echo "sizeof : ".sizeof($pessoa);
	echo "<br/>";

//	$arrayTeste = array( 1, 2, 3, 4, 5 );
	$arrayTeste = [1, 2, 3, 4, 5];
	
	print_r($arrayTeste);
	echo "<br/>";
	$arrayTeste[] = 6;

	print_r($arrayTeste);
	echo "<br/>";

	array_push($arrayTeste,7,"outro valor");

	print_r($arrayTeste);
	echo "<br/>";

	array_unshift($arrayTeste,-1,"primeiro valor");

	print_r($arrayTeste);
	echo "<br/>";

	array_pop($arrayTeste);

	print_r($arrayTeste);
	echo "<br/>";

	array_pop($arrayTeste);

	print_r($arrayTeste);
	echo "<br/>";
	
	array_shift($arrayTeste);

	print_r($arrayTeste);
	echo "<br/>";

	array_shift($arrayTeste);

	print_r($arrayTeste);
	echo "<br/>";

	
	echo "<pre>";
	print_r( array_keys($pessoa) );
	echo "</pre>";
	echo "<br/>";
	
	echo "<pre>";
	print_r( array_values($pessoa) );
	echo "</pre>";
	echo "<br/>";
	
	$arrayInvertido = array_reverse($arrayTeste);

	print_r($arrayTeste);
	echo "<br/>";
	print_r($arrayInvertido);
	echo "<br/>";

	echo "Buscas e verificações";
	echo "<br/>";

	$existe = in_array(3, $arrayTeste);
	
	if($existe)
	{
		echo "Existe o número no array";
	}
	else
	{
		echo "Não existe o número no array";
	}

	echo "<br/>";

	$existe = array_search("João", $pessoa);

	echo $existe;

	echo '<br/>';

	if($existe)
	{
		echo "Existe o valor no array";
	}
	else
	{
		echo "Não existe o valor no array";
	}	

	echo "<br/>";

	$existe = array_key_exists("nome", $pessoa);

	echo $existe;

	echo '<br/>';

	if($existe)
	{
		echo "Existe a chave no array";
	}
	else
	{
		echo "Não existe a chave no array";
	}

	echo "<br/>";

	echo "Ordenação";

	
	$testeOrdenacao = [5,19,2,126,980,4,0,32];

	print_r($testeOrdenacao);
	echo '<br/>';

	sort($testeOrdenacao);

	print_r($testeOrdenacao);
	echo '<br/>';

	rsort($testeOrdenacao);

	print_r($testeOrdenacao);
	echo '<br/>';

	asort($pessoa);
	echo "<pre>";
	print_r( $pessoa );
	echo "</pre>";
	echo "<br/>";

	arsort($pessoa);
	echo "<pre>";
	print_r( $pessoa );
	echo "</pre>";
	echo "<br/>";

	ksort($pessoa);
	echo "<pre>";
	print_r( $pessoa );
	echo "</pre>";
	echo "<br/>";

	krsort($pessoa);
	echo "<pre>";
	print_r( $pessoa );
	echo "</pre>";
	echo "<br/>";


?>