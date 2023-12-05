<?php
	include_once "autenticacao.php";
	include_once "banco.php";

	$mensagem = "";
	$error = false;

	$sql = "
		SELECT
			nome,
			cnpj_cpf,
			tel,
			dt_nasc
		FROM usuario
		WHERE id_user = {$_SESSION['ID']}
	";

	if (isset($_POST['atualizar'])) {
		$nome = $_POST['nome'];
		$cnpjCPF = $_POST['cnpj_cpf'];
		$telefone = $_POST['tel'];
		$dtNasc = $_POST['dt_nasc'];

		$sqlUpdate = "
			UPDATE usuario
			SET nome     = '$nome',
				cnpj_cpf = '$cnpjCPF',
				tel      = '$telefone',
				dt_nasc  = '$dtNasc'
			WHERE id_user = {$_SESSION['ID']}
		";

		if ($connect->query($sqlUpdate)) {
			$mensagem = "Perfil atualizado com sucesso";
		} else {
			$error = true;
			$mensagem = "Falha ao atualizar o perfil";
		}
	}

	$erroExclusao = isset($_GET['error']) && $_GET['error'] == 'exclusao';

	$result = $connect->query($sql)->fetch_assoc() or die("Falha na execução do código SQL: " . $connect->error);
?>

<div class="container mt-3 fs-4">
	<?php
	if (!empty($mensagem)):
	?>
		<div class="row">
			<div class="alert alert-<?php echo $error ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
				<?php echo $mensagem; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	<?php
	endif;
	?>

	<?php
	if ($erroExclusao):
	?>
		<div class="row">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Erro ao excluir usuário
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	<?php
	endif;
	?>
		<div class="row">
			<form action="painel.php" method="POST" class="col-6 mt-5">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" class="form-control fs-4" value="<?php echo $result['nome']; ?>">
				</div>    
				<div class="form-group">
					<label for="cnpj_cpf">CNPJ ou CPF:</label>
					<input type="text" id="cnpj_cpf" name="cnpj_cpf" maxlength="14" class="form-control fs-4" value="<?php echo $result['cnpj_cpf']; ?>">
				</div>
				<div class="form-group">
					<label for="tel">Telefone:</label>
					<input type="tel" id="tel" name="tel" maxlength="13" class="form-control fs-4" value="<?php echo $result['tel']; ?>">
				</div>
				<div class="form-group">
					<label for="dt_nasc">Data de Nascimento:</label>
					<input type="date" id="dt_nasc" name="dt_nasc" class="form-control fs-4" value="<?php echo $result['dt_nasc']; ?>">
				</div>
				<button class="btn btn-primary btn-lg" type="submit" name="atualizar">Atualizar Perfil</button>
				<a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir seu perfil???'))location.href='excluir.php'"><button type="button" class="btn btn-danger btn-lg">Excluir</button></a>
			</form>
		</div>
</div>