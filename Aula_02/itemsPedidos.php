<?php 
/*

cod_itens_pedidos INTEGER "cod_itens_pedidos" INTEGER NOT NULL UNIQUE
cod_pedido INTEGER "cod_pedido" INTEGER NOT NULL
cod_produto INTEGER "cod_produto" INTEGER NOT NULL
quantidade INTEGER "quantidade" INTEGER NOT NULL
preco_unitario REAL "preco_unitario" REAL NOT NULL

*/

	$db = new PDO("sqlite:supertech.db");

	require_once("pedidos.php");
	require_once("produtos.php");

	function inserirItensPedidos($db, $cod_itens_pedidos, $cod_pedido, $nome_produto, $quantidade, $preco_unitario)
	{

		$arrayProduto = buscaProdutoNome($db, $nome_produto);		
		$cod_produto = $arrayProduto['cod_produto'];

		$sql = "INSERT INTO itens_pedidos (cod_itens_pedidos, cod_pedido, cod_produto, quantidade, preco_unitario) values (:cod_itens_pedidos, :cod_pedido, :cod_produto, :quantidade, :preco_unitario)";

		$stmt = $db->prepare($sql);
		
		$stmt->bindValue(':cod_itens_pedidos',$cod_itens_pedidos);
		$stmt->bindValue(':cod_pedido',$cod_pedido);
		$stmt->bindValue(':cod_produto',$cod_produto);
		$stmt->bindValue(':quantidade',$quantidade);
		$stmt->bindValue(':preco_unitario',$preco_unitario);

		$res = $stmt->execute();

		if($res){
			echo "Item de pedido inserido com sucesso.";
		}
		
	}

	function buscarTodosItensPedidos($db){
		$sql = "SELECT * FROM itens_pedidos";
		
		$stmt = $db->prepare($sql);

		$stmt->execute();

		$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $resultados;
	}

	
	function buscarItensPedidos($db, $cod_itens_pedidos){
		$sql = "SELECT * FROM itens_pedidos WHERE cod_itens_pedidos = :cod_itens_pedidos";
		
		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_itens_pedidos",$cod_itens_pedidos);

		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	function alterarItensPedidos($db,$cod_itens_pedidos,$cod_pedido, $nome_produto, $quantidade, $preco_unitario){

		$arrayProduto = buscaProdutoNome($db, $nome_produto);		
		$cod_produto = $arrayProduto['cod_produto'];

		$sql = "UPDATE itens_pedidos SET cod_pedido = :cod_pedido, cod_produto = :cod_produto, quantidade = :quantidade, preco_unitario = :preco_unitario WHERE cod_itens_pedidos = :cod_itens_pedidos ";
	
		$stmt = $db->prepare($sql);

		$stmt->bindValue("cod_itens_pedidos", $cod_itens_pedidos);
		$stmt->bindValue(':cod_pedido',$cod_pedido);
		$stmt->bindValue(':cod_produto',$cod_produto);
		$stmt->bindValue(':quantidade',$quantidade);
		$stmt->bindValue(':preco_unitario',$preco_unitario);

		$stmt->execute();
	}
	
	function excluirItensPedidos($db, $cod_itens_pedidos){
		$sql = "DELETE FROM itens_pedidos WHERE cod_itens_pedidos = :cod_itens_pedidos";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":cod_itens_pedidos", $cod_itens_pedidos);

		$stmt->execute();	
	}

	//inserirItensPedidos($db,1);
	//alterarItensPedidos($db, 2, 4, 'Forno Microondas', 255, 1.850);
	//excluirItensPedidos($db,1);
	
	echo '<pre>';
	//print_r(buscarTodosItensPedidos($db));
	//print_r(buscarItensPedidos($db, 2));
	echo '</p>';
?>