<?php

	include "../includes/conexao.php";

	$id = $_GET['id'];

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assuntos = $_POST["assuntos"];
	$assuntos_string = implode(", ", $assuntos);
	$curso = (int) $_POST["curso"];

	$sql = "UPDATE usuario set
		nome = '$nome',
		email = '$email',
		assuntos = '$assuntos_string',
		curso = '$curso'

		WHERE id = $id
	";

	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: usuario.php?mensagem=sucesso");
	}else{
		header("location: usuario.php?mensagem=erro");
	}

