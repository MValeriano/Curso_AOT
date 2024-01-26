<?php 

	// Declaração de variáveis
	
	// para criação da variável 
	// $ cifrão + identificador 
	// $identificador 

	$minhaPrimeiraVariavel;
	
	$minhaPrimeiraVariavel = 'Hello World';

	echo $minhaPrimeiraVariavel;

	echo '<br/>'.gettype($minhaPrimeiraVariavel);

	$minhaPrimeiraVariavel = 10;

	echo '<br/>'.$minhaPrimeiraVariavel;

	echo '<br/>'.gettype($minhaPrimeiraVariavel);

	$minhaPrimeiraVariavel = 128.3;

	echo '<br/>'.$minhaPrimeiraVariavel;

	echo '<br/>'.gettype($minhaPrimeiraVariavel);

	$minhaPrimeiraVariavel = true;

	echo '<br/>'.$minhaPrimeiraVariavel;

	echo '<br/>'.gettype($minhaPrimeiraVariavel);

	// Tipos de dados
	/*
	boolean
	integer
	float
	string
	array
	object
	*/	

	// Operadores
	$numero1 = 5;
	$numero2 = 3;

	$soma = 5 + 3 + 8 + 16 + 4;
	$soma = $numero1 + $numero2;
	$soma = $numero1 + 3;

	$subtracao = 5 - 3;

	$multiplicacao = 5 * 3;

	$divisao = 5 / 3;

	echo '<br/>Divisao '.$divisao;

	$resto = 5 % 2;

	echo '<br/>Resto ' . $resto;

	// Exemplos práticos de operadores
		// Concatenação de strings
			// operador ( . )
			$nome = 'José';
			$sobrenome = 'Silva';
			$nomeCompleto = $nome . ' ' . $sobrenome;
			echo '<br/>' . $nomeCompleto;	

		// Array
			$meuArray = [1,2,3];

		// Adicionando elemento ao array
			$meuArray[] = 4;

	// Estruturas de controle
		// If
			// if( teste lógico )
			if( 5 < 3 ){
				echo '<br/> cinco é maior do que três';
			}
		// If else
			if( 5 > 3 ){
				echo '<br/> cinco é maior do que três';
			} else{
				echo '<br/> cinco é menor do que três';
			}
			$idade = 16;
	
			if ($idade >= 18){
				echo '<br/> Pode entrar no bordel';
			} else{
				echo '<br/> Sai fora daqui!!!';
			}

	// Switch
		switch($idade){
			case 16: echo '<br/> Já pode votar ';	
			break;		
			case 17: echo '<br/> Já pode votar e comprar bebida alcoolica';
			break;
			case 18: echo '<br/> Já pode ser preso';
			break;
			default: echo '<br/> qualquer idade !!!';	
		}

	// For
		// condição inicial  ( ponto de partida )
		// condição de parada	
		// um incremento 

		// $incremento++ abreviação disto $incremento = $incremento + 1; 
		// $incremento = $incremento + 2 abreviando $incremento += 2 
		for( $incremento = 0 ; $incremento <= 10 ; $incremento++)
		{
			echo '<br />'.$incremento;
		}
	// crie a tabuada de multiplicação do 5 
	echo '<br /> 5x1 = 5';
	echo '<br /> 5x2 = 10';
	echo '<br /> 5x3 = 15';
	echo '<br /> 5x4 = 20';
	echo '<br /> 5x5 = 25';
	echo '<br /> 5x6 = 30';
	echo '<br /> 5x7 = 35';
	echo '<br /> 5x8 = 40';
	echo '<br /> 5x9 = 45';

		for( $incremento = 1 ; $incremento <= 10 ; $incremento++)
		{
			echo '<br /> 5 x ' . $incremento . ' = ' . 5 * $incremento;
		}

	// While	
		// enquanto uma condição for verdadeira
		//while( condição )

	$quantidadeMarcacao = 0;
	$consultaEfetivada = false;

	while( $quantidadeMarcacao < 3 ){
		echo '<br /> Pode marcar !';
		$quantidadeMarcacao++;			
	}
	
	// Manipulação de Strings
//		$arrayDeCaracteres = ['M','a','r','c','e','l','o'];
		$valorNome = 'marcelo';
		echo '<br />'. strlen($valorNome);

	// Funções	
		
		// function identificador ( parametros = valores passados para dentro função)

		function validaCpf( $parametroCpf ){
			if(strlen($parametroCpf) == 11) {
				return 'continua valido!';
			}else{
				return 'continua inválido';
			}	
		}

		$cpf = '00011122233';

		validaCpf($cpf);

		$cpfMae = '00011122233';
		
		echo '<br/>'.validaCpf($cpfMae);

		$cpfPai = '0001112223';
		
		echo '<br/>'.validaCpf($cpfPai);

		$cpfdependente = '00011122233';
		
		echo '<br/>'.validaCpf($cpfdependente);



	// Formulário HTML e processamento no PHP

	// Trabalho com Data e Hora

	// Inclusão de Arquivos require, require_once, include, include_once 

	// Manipulação de Erros

	// Boas Práticas de Codificação
	// Use nomes de variáveis descritivos, mantenha uma boa indentação e adicione comentários quando necessário.

	// Conceitos Avançados (Orientação a Objetos)

?>
