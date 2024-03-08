<?php

require_once('Model.php');

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cod_cliente';
    protected $fillables = ['cod_cliente','nome','email','telefone','endereco'];
}

// 	//print_r($_SERVER);

// 	// Verifica o método da requisição (GET, POST, PUT, DELETE)
// 	switch ($_SERVER["REQUEST_METHOD"]) {
// 	    case "DELETE":
//         	// Se for uma requisição DELETE
// 	        // Captura o código do cliente da query string
// 	        $codCliente = explode("=", $_SERVER["QUERY_STRING"]);
// 	        // Chama a função para excluir o cliente
// 	        excluiCliente($db, $codCliente[1]);
// 	        break;
// 	    case "POST":
// 	        // Se for uma requisição POST
// 	        // Captura o corpo da requisição
// 	        $corpoRequisicao = file_get_contents('php://input');
// 	        // Decodifica o conteúdo (por exemplo, se estiver em formato JSON)
// 	        $dados = json_decode($corpoRequisicao, true);
// 	        // Exibe os dados recebidos, aqui você irá substituir pelo método para inserir os dados
// 		// olhando o método delete tente retornar se foi inserido com sucesso
// 	        print_r($dados);
// 		//inserirDadosNaTabelaCliente($db, 3,"Pedro","pedro@gmail.com","3877777","rua marechal floriano,64");
// 	        break;
// 	    case "GET":
// 	        // Se for uma requisição GET
// 	        // Chama a função para buscar todos os clientes
// 		// como exercício retire o print_r mas faça com que os dados sejam visualizados.
// 		// buscar a função de acordo com o que vier de pedido ( busca pelo nome, id, buscar todos)	
// 		echo '<pre>';
// 	        print_r(buscaTodosClientes($db));
// 		echo '</pre>';
// 		//print_r(buscaClienteNome($db, 'Jose'));
// 		//print_r(buscaCliente($db,1));
// 	        break;
// 	    case "PUT":
// 	        // Se for uma requisição PUT
// 	        // Captura o corpo da requisição
// 	        $corpoRequisicao = file_get_contents('php://input');
// 	        // Decodifica o conteúdo (por exemplo, se estiver em formato JSON)
// 	        $dados = json_decode($corpoRequisicao, true);
// 	        // Exibe os dados recebidos, aqui você irá substituir pelo método para alterar os dados
// 		// olhando o método delete tente retornar se foi inserido com sucesso
// 		//alteraCliente($db,1,"José das couves","ze@hotmail.com","215555555","rua dos ladrões,171");
// 	        print_r($dados);
// 	        break;
// 	    default:
// 	        // Se o método não for reconhecido
// 	        echo "Não entendi o que você quer.";
// 	}
// ?>

