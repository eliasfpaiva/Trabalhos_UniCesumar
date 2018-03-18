<?php

	//var_dump($_POST);
	//exit;

	include "../includes/conexao.php";

	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];
	

	$sql = "INSERT INTO curso (nome, descricao) 
		VALUES ('$descricao', '$descricao')
	";


	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: curso.php?mensagem=sucesso");
	}else{
		header("location: curso.php?mensagem=erro");
	}

