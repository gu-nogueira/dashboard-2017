<?php

		require ('db.php');

			$query = mysqli_query ($link, "SELECT escola_id, COUNT(escola_id) FROM votacoes GROUP BY escola_id ORDER BY COUNT(escola_id) desc");

			$escola = mysqli_fetch_assoc($query);

			$escola_id = $escola['escola_id'];

			if (!empty($escola_id)) {
				$query = mysqli_query ($link, "SELECT nome FROM escolas WHERE id = $escola_id");
				$escola = mysqli_fetch_assoc($query);

				$escola = $escola['nome'];

				echo $escola;
			} else {
				echo 'A definir';
			}


?>
