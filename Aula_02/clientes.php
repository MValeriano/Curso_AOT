<?php
	// conectando o PHP - com o sqlite, usando o PDO

	// êêêêêêêêêêêêêêêêêêêêê nossa primeira API

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

	function buscaCliente($db,$cod_cliente = null){
		$sql = "SELECT * FROM clientes WHERE cod_cliente = :cod_cliente";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_cliente", $cod_cliente);
		
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);		
	}

	function alteraCliente($db,$cod_cliente,$nome,$email,$telefone,$endereco){
		$sql = "UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco WHERE cod_cliente = :cod_cliente";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_cliente", $cod_cliente);
		$stmt->bindValue(":nome", $nome);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":telefone", $telefone);
		$stmt->bindValue(":endereco", $endereco);

		$stmt->execute(); 
	}

	function excluiCliente($instanciaBD, $codigo){
		$sql = "DELETE FROM clientes WHERE cod_cliente = :cod_cliente";

		$stmt = $instanciaBD->prepare($sql);

		$stmt->bindValue(":cod_cliente", $codigo);
		
		$stmt->execute();
	}
	
	//inserirDadosNaTabelaCliente($db, 21,"Maria","mariinha@gmail.com","3177777","rua das gaivotas,29");

	//print_r(buscaTodosClientes($db));

	//alteraCliente($db,1,"José das couves","ze@hotmail.com","215555555","rua dos ladrões,171");

	//excluiCliente($db, 1);

	//print_r(buscaTodosClientes($db));		
	
	//$resultadoBusca = buscaCliente($db,1);
	//print_r($resultadoBusca);
?>

