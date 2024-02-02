<?php

	$db = new PDO('sqlite:supertech.db');

	function inserirProdutos($db,$cod_produto, $nome, $descricao, $preco, $quantidade, $fornecedor){
		$sql = 'INSERT INTO produtos (cod_produto, nome, descricao, preco, quantidade, fornecedor) values (:cod_produto, :nome, :descricao, :preco, :quantidade, :fornecedor)';

		$stmt = $db->prepare($sql);

		$stmt->bindValue(':cod_produto',$cod_produto);
		$stmt->bindValue(':nome',$nome);
		$stmt->bindValue(':descricao',$descricao);
		$stmt->bindValue(':preco',$preco);
		$stmt->bindValue(':quantidade',$quantidade);
		$stmt->bindValue(':fornecedor',$fornecedor);

		$stmt->execute();

	}

	function recuperaTodosProdutos($db){
		$sql = 'SELECT * FROM produtos';

		$stmt = $db->prepare($sql);

		$stmt->execute();

		$resultados = $stmt->fetchAll();
		
		print_r($resultados);

	}

	function recuperaProduto($db,$cod_produto){
		$sql = 'SELECT * FROM produtos WHERE cod_produto = :cod_produto';

		$stmt = $db->prepare($sql);
	
		$stmt->bindValue(':cod_produto',$cod_produto);

		$stmt->execute();

		$resultado = $stmt->fetch();

		print_r($resultado);

	}

	function alteraProduto($db,$cod_produto, $nome, $descricao, $preco, $quantidade, $fornecedor){
		$sql = 'UPDATE PRODUTOS SET nome = :nome, descricao = :descricao, preco = :preco, quantidade = :quantidade, fornecedor = :fornecedor WHERE cod_produto = :cod_produto';

		$stmt = $db->prepare($sql);

		$stmt->bindValue(':nome',$nome);
		$stmt->bindValue(':descricao',$descricao);
		$stmt->bindValue(':preco',$preco);
		$stmt->bindValue(':quantidade',$quantidade);
		$stmt->bindValue(':fornecedor',$fornecedor);
		$stmt->bindValue(':cod_produto',$cod_produto);

		$stmt->execute();
		
	}

	

	//inserirProdutos($db,'001','Smart TV 55" Samsung 55CU7700','Smart TV 55" UHD 4K Samsung 55CU7700, Processador Crystal 4K, Samsung Gaming Hub, Visual Livre de Cabos, Tela sem limites, Alexa built in','R$ 2.592,55','3800','Samsung');

	recuperaTodosProdutos($db);

	//alteraProduto($db,'001','Smart TV 55" Samsung 55CU7700','Smart TV 55" UHD 4K Samsung 55CU7700, Processador Crystal 4K, Samsung Gaming Hub, Visual Livre de Cabos, Tela sem limites, Alexa built in','R$ 2.592,55','3790','Samsung');

	//recuperaProduto($db,'001');

?>