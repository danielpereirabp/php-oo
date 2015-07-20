<?php

	header('Content-Type: text/html; charset=utf-8');

	require_once __DIR__ . '/../src/Cliente.php';

	$clientes = [
		new Cliente('Jimi Hendrix', '123.456.789-00', '27/11/1942', 'M', 'R. Qualquer, 123'),
		new Cliente('Brian Johnson', '001.002.003.45', '05/10/1947', 'M', 'R. Qualquer, 456'),
		new Cliente('Bon Scott', '111.222.333-44', '09/07/1946', 'M', 'R. Qualquer, 789'),
		new Cliente('Bruce Dickinson', '100.200.300-40', '07/08/1958', 'M', 'R. Qualquer, 666'),
		new Cliente('Ian Gillan', '123.456.789-00', '19/08/1945', 'M', 'R. Qualquer, 100'),
		new Cliente('Robert Plant', '123.456.789-00', '20/08/1948', 'M', 'R. Qualquer, 200'),
		new Cliente('Ozzy Osbourne', '123.456.789-00', '03/12/1948', 'M', 'R. Qualquer, 300'),
		new Cliente('Ronnie James Dio', '123.456.789-00', '10/07/1942', 'M', 'R. Qualquer, 400'),
		new Cliente('Dave Mustaine', '123.456.789-00', '13/09/1961', 'M', 'R. Qualquer, 500'),
		new Cliente('Phil Anselmo', '123.456.789-00', '30/06/1968', 'M', 'R. Qualquer, 600'),
	];