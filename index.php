<?php

	require('php/db.php');
	$escolas = 	mysqli_query($link,"SELECT COUNT(*) from escolas");

	$totalEscolas = mysqli_fetch_assoc($escolas);
	$totalEscolas = $totalEscolas['COUNT(*)'];

	$projetos = 	mysqli_query($link,"SELECT * from projetos");
?>
<html>
	<head>

		<meta charset="utf-8">
		<title>Projeto Dashboard</title>

		<link rel="stylesheet" href="css/jquery.pagepiling.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Css personalizado -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

		<div id="pagepiling">

			<div class="section slide1">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="title"> Feira de Ciências 2017 </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4" align="center">
							<span class="statistic-title"> Nº total de projetos </span>
							<span class="statistic-number"> 63 </span>
							<!-- ?php echo $dados['total_projects'] ? -->
						</div>
						<div class="col-xs-4" align="center">
							<span class="statistic-title"> Nº de alunos participantes </span>
							<span class="statistic-number"> 386 </span>
							<!-- ?php echo $dados['total_students'] ? -->
						</div>
						<div class="col-xs-4" align="center">
							<span class="statistic-title"> Quantidade de orientadores </span>
							<span class="statistic-number"> 17 </span>
							<!-- ?php echo $dados['total_teachers'] ? -->
						</div>
					</div>
				</div>
			</div>

			<div class="section slide2">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="title"> Feira de Ciências 2017 </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6" align="center">
							<span class="statistic-title"> Quantidade de escolas </span>
							<span class="statistic-number"> <?php echo $totalEscolas; ?></span>
						</div>
						<div class="col-xs-6" align="center">
							<span class="statistic-title"> Total de visitantes </span>
							<span class="statistic-number totalVotacoes"> 0 </span>
						</div>
					</div>
				</div>
			</div>

			<div class="section slide3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="title"> Projetos mais votados </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4" align="center">
							<span class="top-project-title">1º - </span>
							<span class="top-project-title top0"> A DEFINIR</span>
						</div>
						<div class="col-xs-4" align="center" >
							<span class="top-project-title">2º - </span>
							<span class="top-project-title top1"> A DEFINIR</span>
						</div>
						<div class="col-xs-4" align="center">
							<span class="top-project-title">3º - </span>
							<span class="top-project-title top2"> A DEFINIR</span>
						</div>
					</div>
				</div>
			</div>

			<div class="section slide4">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="title"> Feira de Ciências 2017 </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6" align="center">
							<span class="statistic-title2"> Orientador Mais Influente </span>
							<span class="statistic-word"> ROSELI </span>
							<!-- ?php echo $dados['total_projects'] ? -->
						</div>
						<div class="col-xs-6" align="center">
							<span class="statistic-title2"> Maior Disciplina *</span>
							<span class="statistic-word"> <p> <p> <p> QUÍMICA</span>
							<!-- ?php echo $dados['total_students'] ? -->
						</div>
					</div>
					<br> <br> <br>
					<div class="row">
						<div class="col-xs-6" align="center">
							<span class="statistic-title2"> Turma Com Mais Projetos </span>
							<span class="statistic-word"> 3°B Info. </span>
							<!-- ?php echo $dados['total_teachers'] ? -->
						</div>
						<div class="col-xs-6" align="center">
							<span class="statistic-title2"> Escola Mais Presente </span>
							<span class="statistic-word escola_presente"> A DEFINIR</span>
							<!-- ?php echo $dados['total_teachers'] ? -->
						</div>
					<div class='row'>
						<div class='col-xs-12' align ="center">
							<br><br><br><br><br>
						 	 <span class="statistic-subtitle" style='border-top: 200px;'> * Estão sendo apresentados na feira 16 projetos de TCC </span>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="section slide5">
				<div class="container">
					<div class="row"  style="margin-top: 90px;">
							<div class="titleprojects"> Projetos Apresentados </div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							 <div class="smartmarquee example">
							   <ul class="container">
									 <?php
									 		while ($row = mysqli_fetch_assoc($projetos)) {
									 			echo "<li> {$row['nome']} </li>";
									 		}
									 ?>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Referenciando Jquery  -->
		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- Referenciando Full Page Extensions Js  -->
		<script type="text/javascript" src="js/jquery.smartmarquee.js"></script>

		<!-- Referenciando Scrollbox  -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Slider  -->
		<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>

		<script type="text/javascript">

			$(document).ready(function() {

				var totalVotacoes;
				var projetosMaisVotados;
				var escola_presente;


			  $(".example").smartmarquee({
				  duration: 1000,
				  loop : true,
				  interval : 0,
				  axis : "vertical",
			  });

				$('#pagepiling').pagepiling({
				    sectionsColor: ['#6af441', '#4198f4', '#f44167', '#f4af41', '#f44341'],
				 	direction: 'horizontal',
					loopBottom: true,
					loopTop: true,
					navigation: false
				});

				$.fn.pegaTotalVotacoes = function() {
					$.get("php/total_votacoes.php", function(data, status){
						totalVotacoes = data;
						$('.totalVotacoes').html(totalVotacoes);
				    });
				}
				$.fn.pegaEscolaPresente = function(){
					$.get('php/escola_presente.php', function(data, status){
						escola_presente = data;
						console.log(escola_presente);
						$('.escola_presente').html(escola_presente);
					});
				}

				// Função para pegar projetos mais votdos
				$.fn.pegaMaisVotados = function() {
					// Ajax para lógica com resultados
					$.get("php/projetos_mais_votados.php", function(data, status){
						projetosMaisVotados = JSON.parse(data);
						for (var i = 0; i < 3; i++) {
							$('.top' + i).html(projetosMaisVotados[i]['nome_do_projeto']);
						}
				    });
				}

				setInterval(function(){ $.fn.pegaEscolaPresente() }, 1000);
				setInterval(function(){ $.fn.pegaTotalVotacoes() }, 2000);
				setInterval(function(){ $.fn.pegaMaisVotados() }, 2000);
				setInterval(function(){ $.fn.pagepiling.moveSectionDown() }, 15000);

			});
	</script>
	</body>
</html>
