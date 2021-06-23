<?php

	require('db.php');
	$votacoes = mysqli_query($link,"SELECT COUNT(*) from votacoes");

	$totalVotacoes = mysqli_fetch_assoc($votacoes);
	$totalVotacoes = $totalVotacoes['COUNT(*)'];

	echo $totalVotacoes;

?>
