<?php
	require_once __DIR__ . '/../src/data.php';

	$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

	if ($order == 'desc') {
		krsort($clientes);
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header"></div>
	  </div>
	</nav>
    
	<div class="container">

		<h1>Clientes</h1>

		<table class="table table-hover">
			<tr>
				<th><a href="?order=<?php echo $order == 'desc' ? 'asc' : 'desc' ?>">Índice</a></th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Data Nasc.</th>
				<th>Sexo</th>
				<th>Endereço</th>
				<th>Ações</th>
			</tr>
			<?php foreach ($clientes as $key => $cliente) : ?>
				<tr>
					<td><?php echo $key ?></td>
					<td><?php echo $cliente->getNome() ?></td>
					<td><?php echo $cliente->getCpf() ?></td>
					<td><?php echo $cliente->getDataNascimento() ?></td>
					<td><?php echo $cliente->getSexo() ?></td>
					<td><?php echo $cliente->getEndereco() ?></td>
					<td><a href="cliente.php?key=<?php echo $key ?>" class="btn btn-success">visualizar</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>