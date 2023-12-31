<?php include_once "header.php";?>
<?php include_once "private/banco.php"; ?>

<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	if (isset($_SESSION['ID'])) {
		header('Location: ../index.php');
	}

	$error = null;

	if (isset($_POST['cnpj_cpf']) && isset($_POST['senha'])) {
		$cnpj_cpf = $connect->real_escape_string($_POST['cnpj_cpf']);
		$senha = $connect->real_escape_string($_POST['senha']);

		//faz a consulta no banco de dados
		$sql_d = "
			SELECT
				id_user,
				nome,
				senha
			FROM usuario
			WHERE 
				cnpj_cpf = '$cnpj_cpf'
		";
		$usuario = $connect->query($sql_d)->fetch_assoc() or die("Falha na execução do código SQL: " . $connect->error);

		//Testa se o SENHA esta correta
		if (password_verify($_POST['senha'], $usuario['senha']) == true) {
			if (!isset($_SESSION)) {
				session_start();
			}
			$_SESSION['ID'] = $usuario['id_user'];
			$_SESSION['NOME'] = $usuario['nome'];
			header("Location: ./private/painel.php");
		} else {
			$error = "Usuário ou senha inválidos";
		}
	}
?>

<!-- conta section começa  -->

<div class="account-form-container">
	<section class="account-form">
		<form action="login.php" method="post">
			<h3>Bem-vindo!</h3>
			<?php if (!is_null($error)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>
			<input type="text" name="cnpj_cpf" class="form-control m-1 fs-3" placeholder="Digite o seu CNPJ/CPF" maxlength="14" required>
			<input type="password" name="senha" class="form-control m-1 fs-3" placeholder="Digite a senha" required>
			<p>Não possui uma conta? <a href="registro_usuario.php">Inscreva-se Agora</a></p>
			<input type="submit" value="Entrar" name="submit" class="btn-site">
		</form>
	</section>
</div>

<!-- conta section termina -->

<?php include_once 'footer.php';?>