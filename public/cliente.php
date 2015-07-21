<?php
	require_once __DIR__ . '/../data/data.php';

	$key = $_GET['key'];

	$cliente = $clientes[$key];
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

		<h1><?php echo $cliente->getNome() ?></h1>

		<p>CPF: <?php echo $cliente->getCpf() ?></p>
		<p>Sexo: <?php echo $cliente->getSexo() ?></p>
		<p>Data Nasc.: <?php echo $cliente->getDataNascimento()->format('d/m/Y') ?></p>
		<p>Endereço: <ul><?php foreach ($cliente->getEndereco() as $endereco):?>
                    <li><?php echo $endereco;?></li>
                    <?php endforeach;?>
                   </ul>
                </p>
    
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>