<?php

	/*
	cod_pedido INTEGER "cod_pedido" INTEGER NOT NULL UNIQUE
	data_pedido TEXT "data_pedido" TEXT NOT NULL
	cod_cliente INTEGER "cod_cliente" INTEGER NOT NULL
	status INTEGER "status" INTEGER NOT NULL
	*/

	// require, require_once, include, include_once

	// require ''; / require('');

	include_once 'clientes.php';

	$db = new PDO('sqlite:supertech.db');

	//$arrayClientes = buscaClienteNome($db, 'Pedro');
	
	//arrays ( coleção de dados indexada, ou seja possui indices que remontaram os dados nela) 
	//array = lista -> para acessar os dados desta lista usamos operadores de membro;

	//$codigoCliente = $arrayClientes['cod_cliente'];
	
	function inserirPedido($db,$cod_pedido,$data_pedido,$status,$nomeCliente ){

		$arrayClientes = buscaClienteNome($db, $nomeCliente);
		$cod_cliente = $arrayClientes['cod_cliente'];

		$sql = "INSERT INTO pedidos (cod_pedido,data_pedido,cod_cliente,status) values (:cod_pedido,:data_pedido,:cod_cliente,:status)";
	
		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_pedido", $cod_pedido);
		$stmt->bindValue(":data_pedido", $data_pedido);
		$stmt->bindValue(":cod_cliente", $cod_cliente);
		$stmt->bindValue(":status", $status);

		$stmt->execute();		
	}

	function buscarTodosPedidos($db){
		$sql = "SELECT * FROM pedidos";
		
		$stmt = $db->prepare($sql);

		$stmt->execute();

		$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $resultados;
	}

	
	function buscarPedido($db, $cod_pedido){
		$sql = "SELECT * FROM pedidos WHERE cod_pedido = :cod_pedido";
		
		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_pedido",$cod_pedido);

		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	function alterarPedido($db,$cod_pedido,$data_pedido,$status,$nomeCliente ){

		$arrayClientes = buscaClienteNome($db, $nomeCliente);
		$cod_cliente = $arrayClientes['cod_cliente'];

		$sql = "UPDATE pedidos SET data_pedido = :data_pedido, cod_cliente = :cod_cliente, status = :status WHERE cod_pedido = :cod_pedido ";
	
		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_pedido", $cod_pedido);
		$stmt->bindValue(":data_pedido", $data_pedido);
		$stmt->bindValue(":cod_cliente", $cod_cliente);
		$stmt->bindValue(":status", $status);

		$stmt->execute();

	}
	
	function excluirPedido($db, $cod_pedido){
		$sql = "DELETE FROM pedidos WHERE cod_pedido = :cod_pedido";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_pedido", $cod_pedido);

		$stmt->execute();	
	}

	//inserirPedido($db,5,'07/02/2024',2,'Maria');
	//alterarPedido($db,5,'01/01/2023',1,'Beatriz');
	//excluirPedido($db,10);
	
	echo '<pre>';
	//print_r(buscarTodosPedidos($db));
	//print_r(buscarPedido($db, 3));
	//print_r(buscaTodosClientes($db));
	echo '</pre>';
?>