<?php

	//var_dump($_POST);
	//exit;

	include "../includes/conexao.php";

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assuntos = $_POST["assuntos"];
	$assuntos_string = implode(", ", $assuntos);
	$curso = $_POST["curso"];

	$sql = "INSERT INTO usuario (nome, email, assuntos, curso) 
		VALUES ('$nome', '$email', '$assuntos_string', '$curso')
	";


	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: usuario.php?mensagem=sucesso");
	}else{
		header("location: usuario.php?mensagem=erro");
	}
?>
