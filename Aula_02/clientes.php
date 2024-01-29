<?php
	// conectando o PHP - com o sqlite, usando o PDO

	$db = new PDO("sqlite:supertech.db");


	function inserirDadosNaTabelaCliente($db,$cod_cliente,$nome,$email,$telefone,$endereco)
	{
	// Insert 
	// insert into tabela (campos da tabela separados por virgula) values (valores à ser inseridos separados por virgula);
	// este comando SQL irá inserir dados na nossa tabela

	$sql = "INSERT INTO clientes (cod_cliente,nome,email,telefone,endereco) values (:cod_cliente,:nome,:email,:telefone,:endereco)";

	
	$stmt = $db->prepare($sql);

	$stmt->bindValue(":cod_cliente", $cod_cliente);
	$stmt->bindValue(":nome", $nome);
	$stmt->bindValue(":email", $email);
	$stmt->bindValue(":telefone", $telefone);
	$stmt->bindValue(":endereco", $endereco);

	$stmt->execute();
	}

	function buscaTodosClientes($db){
		$sql = "SELECT * FROM clientes";
		
		$stmt = $db->prepare($sql);

		$stmt->execute();

		$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $resultados;
		
	}

	//inserirDadosNaTabelaCliente($db, 21,"Maria","mariinha@gmail.com","3177777","rua das gaivotas,29");

	print_r buscaTodosClientes($db);
	
?>

