<?php

	require_once('Produtos.php');
	require_once('Clientes.php');

	$produto = new Produtos('supertech.db');
	
	echo "<pre>";
	//print_r($produto->all());
	print_r($produto->get(2));
	echo "</pre>";

	$cliente = new Clientes('supertech.db');
	
	echo "<pre>";
	//print_r($cliente->all());
	print_r($cliente->get(1));
	echo "</pre>";
	
// 	$uri = parse_url($_SERVER["REQUEST_URI"]);
// 	echo '<pre>';
// 	//print_r($_SERVER);
// 	//print_r(explode("/",$_SERVER["REQUEST_URI"]));
// 	print_r($uri);
// 	echo '</pre>';
	
// 	switch($_SERVER["REQUEST_URI"])
// 	{
// 		case "/" : 
// 			echo "Estou dentro de home";
// 			break;
// 		case "/clientes" : 
// 			//echo "Estou dentro de Clientes";
// 			//require_once, require, include, include_once
// 			include_once('clientes.php');
// 			break;
// 		case "/produtos" :
// 			echo "Estou dentro de Produtos";		
// 			break;
// 		case "/pedidos" : 
// 			echo "Estou dentro de Pedidos";
// 			break;
// 		case "/itenspedidos" :
// 			echo "Estou dentro de Itens de pedidos";
// 			break;
// 		default :
// 			echo "Erro 404 - Página não encontrada";
// 	}	

// 	// esqueleto do switch 
// 	/*
// 		switch()
// 		{
// 			case "valor à ser testado" : se o valor for verdadeiro faz isto;
// 			break;
// 			default: executa se todos os cases forem falso;
// 		}
// 	*/
// ?>