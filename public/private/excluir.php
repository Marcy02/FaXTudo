<?php
	include_once "autenticacao.php";
	include_once "banco.php";

	$sqlExcluir = "
		DELETE FROM usuario
		WHERE id_user = {$_SESSION['ID']}
	";

	if (!$connect->query($sqlExcluir)) {
		header("Location: /painel.php?error=exclusao");
	}

	session_destroy();
    
	header("Location: /index.php");