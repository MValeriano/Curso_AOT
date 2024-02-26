<?php

	echo 'Página inicial';
	
	$uri = parse_url($_SERVER["REQUEST_URI"]);
	echo '<pre>';
	//print_r($_SERVER);
	//print_r(explode("/",$_SERVER["REQUEST_URI"]));
	print_r($uri);
	echo '</pre>';

	switch($_SERVER["REQUEST_URI"])
	{
		case "/" : 
			echo "Estou dentro de home";
			break;
		case "/clientes" : 
			//echo "Estou dentro de Clientes";
			//require_once, require, include, include_once
			include_once('clientes.php');
			break;
		case "/produtos" :
			echo "Estou dentro de Produtos";		
			break;
		case "/pedidos" : 
			echo "Estou dentro de Pedidos";
			break;
		case "/itenspedidos" :
			echo "Estou dentro de Itens de pedidos";
			break;
		default :
			echo "Erro 404 - Página não encontrada";
	}	

	// esqueleto do switch 
	/*
		switch()
		{
			case "valor à ser testado" : se o valor for verdadeiro faz isto;
			break;
			default: executa se todos os cases forem falso;
		}
	*/
?>