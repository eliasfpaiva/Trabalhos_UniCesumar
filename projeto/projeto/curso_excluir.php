<?php

	include "../includes/conexao.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM curso where id = $id";

	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: curso.php?mensagem=sucesso");
	}else{
		header("location: curso.php?mensagem=erro");
	}

