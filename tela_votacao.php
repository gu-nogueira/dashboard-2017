<!DOCTYPE html>

<?php

	require('php/db.php');
	$escolas = 	mysqli_query($link,"SELECT * from escolas ORDER by id DESC");
	$projetos = 	mysqli_query($link,"SELECT * from projetos ORDER by nome ASC");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title> Votação </title>
		<head>
			<meta charset="utf-8">
			<title>Projeto Dashboard</title>

			<link rel="stylesheet" href="css/jquery.fullpage.min.css">
			<link rel="stylesheet" href="css/bootstrap.min.css">

			<!-- Instalar a fonte localmente pra nao precisar de internet //TO-DO -->
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

			<!-- Css personalizado -->
			<link rel="stylesheet" href="css/reset.css">
			<link rel="stylesheet" href="css/style.css">
		</head>
	<body background="wallpaper_dash_preto_ajustado.jpg" style='background-size:cover;'>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-10" align="center">

					<div class="formulario">
						<form class="form-horizontal" action="php/cadastro.php" method="post" align='center'>
							<div class="form-group">
								<label for="nome" class="col-sm-4 control-label font-title">Nome</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" style='width:28%;' required='true' name="nome" value="" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-4 control-label font-title">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" style='width:28%;' placeholder="OPCIONAL" name="email" value="" autocomplete="off" data-toggle="tooltip" title="Este campo é opcional!">
								</div>
							</div>
							<div class="form-group">
								<label for="telefone" class="col-sm-4 control-label font-title">Telefone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" style='width:17%;' placeholder="OPCIONAL" name="telefone" value="" autocomplete="off" data-toggle="tooltip" title="Este campo é opcional!">
								</div>
							</div>
							<div class="form-group">
								<label for="escola" class="col-sm-4 control-label font-title">Sua escola</label>
								<div class="col-sm-8">

									<select class="form-control" style='width:17%;' name="escola" required='true'>
										<option value="">Sua escola</option>
										<?php
										while ($row = mysqli_fetch_assoc($escolas)) {
											?>
											<option value="<?php echo $row['id'] ?>"> <?php echo $row['nome'] ?> </option>
											<?php
										}
										?>
									</select>

								</div>
							</div>
							<div class="form-group">
								<label for="votacao" class="col-sm-4 control-label font-title">Projeto que mais gostou</label>
								<div class="col-sm-8">
									<select class="form-control" class="form-control" style='width:17%;' name="votacao" required='true'>
										<option value="">Selecione um projeto</option>
										<?php
										while ($row = mysqli_fetch_assoc($projetos)) {
											?>
											<option value="<?php echo $row['id'] ?>"> <?php echo $row['nome'] ?> </option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-4" align="left">
									<input type="submit" name="" class="btn btn-warning btn-lg" value="Enviar">
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

		<!-- Referenciando Jquery  -->
		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- Referenciando Full Page Extensions Js  -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Referenciando Full Page Extensions Js  -->
		<script type="text/javascript" src="js/jquery.fullpage.extensions.min.js"></script>

		<!-- Referenciando Full Page Js  -->
		<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
		});
		</script>
	</body>
</html>
