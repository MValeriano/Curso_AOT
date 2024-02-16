<?php

	// conexão com o banco de dados 
	$bd = new PDO('sqlite:supertech.db');

	// Fazer nossa interação interface de frontend com nosso banco de dados 

	/// CRUD

	//insereProduto
	function insereProduto($bd, $cod_produto, $nome, $descricao, $preco ,$quantidade, $fornecedor){

		$sql = "INSERT INTO produtos (cod_produto, nome, descricao, preco, quantidade,fornecedor) values (:cod_produto, :nome, :descricao, :preco, :quantidade,:fornecedor)";

		$stmt = $bd->prepare($sql);

		$stmt->bindValue(":cod_produto", $cod_produto);
		$stmt->bindValue(":nome", $nome);
		$stmt->bindValue(":descricao", $descricao);
		$stmt->bindValue(":preco", $preco);
		$stmt->bindValue(":quantidade", $quantidade);
		$stmt->bindValue(":fornecedor", $fornecedor);

		$stmt->execute();
		
	}

	function retornaTodosProdutos($bd){
		$sql = "SELECT * FROM produtos";

		$stmt = $bd->prepare($sql);

		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function alterarProduto($bd, $cod_produto, $nome, $descricao, $preco ,$quantidade, $fornecedor){

		$sql = "UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco, quantidade = :quantidade, fornecedor = :fornecedor WHERE cod_produto = :cod_produto";

		$stmt = $bd->prepare($sql);

		$stmt->bindValue(":cod_produto", $cod_produto);
		$stmt->bindValue(":nome", $nome);
		$stmt->bindValue(":descricao", $descricao);
		$stmt->bindValue(":preco", $preco);
		$stmt->bindValue(":quantidade", $quantidade);
		$stmt->bindValue(":fornecedor", $fornecedor);

		$stmt->execute();
		
	}

	function retornaProduto($bd, $cod_produto){
		$sql = "SELECT * FROM produtos WHERE cod_produto = :cod_produto";

		$stmt = $bd->prepare($sql);

		$stmt->bindValue(":cod_produto", $cod_produto);

		$stmt->execute();
		
		return $stmt->fetch(PDO::FETCH_ASSOC);
		
	}

	function buscaProdutoNome($db,$nome){
		$sql = "SELECT * FROM produtos WHERE nome LIKE :nome";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":nome", $nome);
		
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);		
	}

	function excluirProduto($bd, $cod_produto){
		$sql = "DELETE FROM produtos WHERE cod_produto = :cod_produto";

		$stmt = $bd->prepare($sql);

		$stmt->bindValue(":cod_produto", $cod_produto);

		$stmt->execute();
	
	}

	
	//insereProduto($bd, 3, "Forno Microondas", "Forno Microondas Eletrolux 1400W",450.47,2385,"eletrolux");	

	//alterarProduto($bd, 2, "TV 32 polegadas", "Televisão de LED 32 polegadas com wifi e bluetooth",850.47,985,"samsung");	

	//retornaTodosProdutos($bd);		

	//excluirProduto($bd, 2);

	//echo "<pre>";
	
	//print_r(retornaTodosProdutos($bd));

	//echo "<hr />";

	//$produtos = buscaProdutoNome($bd,"Forno Microondas");
	//print_r($produtos);

	//echo "</pre>";

?>