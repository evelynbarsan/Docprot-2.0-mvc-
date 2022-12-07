<?php
	$db_servername = 'localhost';
	$db_user = 'root';
	$db_pass = 'Evelyn@19';
	$db_name = 'docprot';
	$db_table = 'user';
	$con = mysqli_connect($db_servername, $db_user, $db_pass, $db_name) or die(mysqli_errno());
	//envio de dados
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$sql='INSERT INTO user (nome, sobrenome, email, senha) VALUES("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$senha.'")';
	$resul = mysqli_query($con,$sql);
?>