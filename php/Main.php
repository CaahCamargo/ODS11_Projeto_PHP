<?php
    include("Cidade.php");
	
	// Cidades
    $c1 = new Cidade($_POST['nome'], $_POST['estado'], $_POST['habitantes'], $_POST['producaoLixo'], $_POST['criminalidade']);
	$c1->imprimir();
?>