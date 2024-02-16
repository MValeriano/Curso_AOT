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

	function buscaClienteNome($db,$nome = null){
		$sql = "SELECT * FROM clientes WHERE nome LIKE :nome";

		$stmt = $db->prepare($sql);

		$stmt->bindValue(":nome", $nome);
		
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);		
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
		
		if ($stmt->execute()) {
    			// A exclusão foi bem-sucedida
			// Número de linhas afetadas (deve ser 1 ou (TRUE) se o cliente foi encontrado)
    			$numLinhasAfetadas = $stmt->rowCount(); 
    
    			if ($numLinhasAfetadas > 0) {
				// se conseguiu achar o cliente então $numLinhasAfetadas será = 1 
				// ou seja achou um cliente para excluir
        			echo "Cliente excluído com sucesso!";
    			} else {
        			echo "Cliente não encontrado.";
    			}
		} else {
    		// Ocorreu um erro na execução da consulta
		// errorInfo() é uma função do PDO que retorna os possíveis erros.
    		echo "Erro ao excluir o cliente: " . $stmt->errorInfo()[2];
		}
	}
	
	print_r($_SERVER);
	// Verifica o método da requisição (GET, POST, PUT, DELETE)
	switch ($_SERVER["REQUEST_METHOD"]) {
	    case "DELETE":
        	// Se for uma requisição DELETE
	        // Captura o código do cliente da query string
	        $codCliente = explode("=", $_SERVER["QUERY_STRING"]);
	        // Chama a função para excluir o cliente
	        excluiCliente($db, $codCliente[1]);
	        break;
	    case "POST":
	        // Se for uma requisição POST
	        // Captura o corpo da requisição
	        $corpoRequisicao = file_get_contents('php://input');
	        // Decodifica o conteúdo (por exemplo, se estiver em formato JSON)
	        $dados = json_decode($corpoRequisicao, true);
	        // Exibe os dados recebidos, aqui você irá substituir pelo método para inserir os dados
		// olhando o método delete tente retornar se foi inserido com sucesso
	        print_r($dados);
	        break;
	    case "GET":
	        // Se for uma requisição GET
	        // Chama a função para buscar todos os clientes
		// como exercício retire o print_r mas faça com que os dados sejam visualizados.
	        print_r(buscaTodosClientes($db));
	        break;
	    case "PUT":
	        // Se for uma requisição PUT
	        // Captura o corpo da requisição
	        $corpoRequisicao = file_get_contents('php://input');
	        // Decodifica o conteúdo (por exemplo, se estiver em formato JSON)
	        $dados = json_decode($corpoRequisicao, true);
	        // Exibe os dados recebidos, aqui você irá substituir pelo método para alterar os dados
		// olhando o método delete tente retornar se foi inserido com sucesso
	        print_r($dados);
	        break;
	    default:
	        // Se o método não for reconhecido
	        echo "Não entendi o que você quer.";
	}

	//inserirDadosNaTabelaCliente($db, 3,"Pedro","pedro@gmail.com","3877777","rua marechal floriano,64");

	//print_r(buscaClienteNome($db, 'Jose'));

	//print_r(buscaTodosClientes($db));

	//alteraCliente($db,1,"José das couves","ze@hotmail.com","215555555","rua dos ladrões,171");
	
	//excluiCliente($db, 1);

	//print_r(buscaTodosClientes($db));
	
	//$resultadoBusca = buscaCliente($db,1);
	//print_r($resultadoBusca);
?>

