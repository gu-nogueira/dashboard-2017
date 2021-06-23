<?php

	require('db.php');

	$nome = mysqli_real_escape_string($link, $_POST['nome']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$telefone = mysqli_real_escape_string($link, $_POST['telefone']);
	$escola = mysqli_real_escape_string($link, $_POST['escola']);
	$votacao = mysqli_real_escape_string($link, $_POST['votacao']);

	mysqli_query($link," INSERT INTO votacoes (nome,email,telefone,escola_id,projeto_id)
			  VALUES ('$nome','$email','$telefone','$escola','$votacao')
	");

	// REDIRECIONAMENTO
	header('Location: ../tela_votacao.php');

?>
