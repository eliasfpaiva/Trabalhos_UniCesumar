<?php

if(count($_POST) == 0 and count($_FILES) == 0){
	header('location: index.php');
	exit;
}

$nome = $_POST["nome"];
if(empty($nome)) {
	header('location: index.php');
	exit;
}

$arquivo = $_FILES["arquivo"];

if($arquivo["type"]=="image/png"){
	$extensao=".png";
	$nome_arquivo = $nome . $extensao;
	$nome_completo = __DIR__ . "/../uploads/" . $nome_arquivo;
	
	move_uploaded_file($arquivo["tmp_name"], $nome_completo);

	header('location: index.php');
	exit;
}else if($arquivo["type"]=="image/jpeg"){
	$extensao=".jpeg";
	$nome_arquivo = $nome . $extensao;
	$nome_completo = __DIR__ . "/../uploads/" . $nome_arquivo;
	
	move_uploaded_file($arquivo["tmp_name"], $nome_completo);
	
	header('location: index.php');
	exit;
}else{
	header('location: index.php');
	exit;
}

?>