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
	

	// Metodos de manipulação de Arrays 

	print_r( 'o count deu : ' . count($frutas) );
	echo "<br/>";

	print_r( 'o sizeof deu : ' . sizeof($frutas) );
	echo "<br/>";
	

?>