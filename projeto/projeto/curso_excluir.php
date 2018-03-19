<?php

	include "../includes/conexao.php";

	$id = $_GET['id'];

	$semAlunos = true;
	
    $sql = "select * from usuario";
    $consulta = mysqli_query($conexao, $sql);
    while($linha = mysqli_fetch_array($consulta)){
    	if($linha['curso'] == $id) {
    		$semAlunos = false;
    	}
    } // fim do while

	if ($semAlunos) {
		$sql = "DELETE FROM curso where id = $id";

		$query = mysqli_query($conexao, $sql);

		if($query){
			header("location: curso.php?mensagem=sucesso");
		}else{
			header("location: curso.php?mensagem=erro");
		}
	}else{
			header("location: curso.php?mensagem=erro");
		}	
?>

