<?php

		// Conecta com o banco
		require('db.php');

		// Pega todos os projetos mais votados
		$queryProjetos = mysqli_query($link,"SELECT *, COUNT(projeto_id) from votacoes GROUP BY projeto_id ORDER BY COUNT(projeto_id) desc");

		// Laço de repetição pra tratar os dados
		while ($row = mysqli_fetch_assoc($queryProjetos)) {

			// Pega o id do projeto
			$id = $row['projeto_id'];

			// Pega dados do projeto equivalente ao id
			$queryNomeProjeto = mysqli_query($link,"SELECT * from projetos WHERE id = $id");
			$projeto  = mysqli_fetch_assoc($queryNomeProjeto);

			// Montando array legível com nome do projeto e total de votos de cada um
			$resultadoEncontrado = [
					"nome_do_projeto" => $projeto["nome"],
					"total_de_votos" => $row["COUNT(projeto_id)"]
			];

			// Cria um array para cada resultado
			$todosOsResultados[] = $resultadoEncontrado;
		}

		// Divide em 3 resultado apenas
		$todosOsResultados = array_slice($todosOsResultados, 0, 3);

		// Transforma em JSON para leitura no javascript
		echo json_encode($todosOsResultados);

?>
