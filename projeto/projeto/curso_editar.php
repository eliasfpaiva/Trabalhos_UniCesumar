<?php

	include "../includes/conexao.php";

	$id = $_GET['id'];

	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];

	$sql = "UPDATE curso set
		nome = '$nome',
		descricao = '$descricao'

		WHERE id = $id
	";

	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: curso.php?mensagem=sucesso");
	}else{
		header("location: curso.php?mensagem=erro");
	}

