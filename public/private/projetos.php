<?php
	include_once 'autenticacao.php';
	include_once 'banco.php';

	$mensagem = "";
	$error = false;

	if (isset($_POST['aprovado'])) {
		$aprovado = $_POST['aprovado'];
		$idEmprego = $_POST['idEmprego'];
		$idUsuario = $_POST['idUsuario'];

		$sqlVagasAbertas = "
			SELECT n_vagas - (
				SELECT COUNT(*)
				FROM candidata
				WHERE fk_EMPREGO_id_job = $idEmprego AND aprovado = 1
			)
			FROM emprego
			WHERE id_job = $idEmprego
		";

		if ($connect->query($sqlVagasAbertas)->fetch_column() > 0) {
			$sqlInsertCandidato = "
				UPDATE candidata
				SET aprovado = $aprovado
				WHERE fk_EMPREGO_id_job = $idEmprego AND fk_USUARIO_id_user = $idUsuario
			";

			if ($connect->query($sqlInsertCandidato)) {
				$mensagem = "Proposta processada com sucesso";
			} else {
				$error = true;
				$mensagem = "Falha ao processar proposta";
			}
		} else {
			$error = true;
			$mensagem = "Não há mais vagas disponíveis";
		}
	} else if (isset($_POST["alterar"])) {
		$idEmprego = $_POST['idEmprego'];
		$cargo = $_POST['cargo'];
		$salario = doubleval($_POST['salario']);
		$jornada = $_POST['jornada'] ;
		$requerimentos = $_POST['requerimentos'];

		$sqlUpdateProjeto = "
			UPDATE emprego
			SET cargo = '$cargo',
				salario = $salario,
				jornada = '$jornada',
				requerimentos = '$requerimentos'
			WHERE id_job = $idEmprego;
		";

		if ($connect->query($sqlUpdateProjeto)) {
			$mensagem = "Projeto alterado com sucesso";
		} else {
			$error = true;
			$mensagem = "Falha ao alterar o projeto";
		}

	} else if (isset($_POST["cancelar"])) {
		$idEmprego = $_POST['idEmprego'];
		$idUsuario = $_POST['idUsuario'];

		$sqlUpdateCandidato = "
			UPDATE candidata
			SET aprovado = NULL
			WHERE fk_EMPREGO_id_job = $idEmprego AND fk_USUARIO_id_user = $idUsuario
		";

		if ($connect->query($sqlUpdateCandidato)) {
			$mensagem = "Proposta cancelada com sucesso";
		} else {
			$error = true;
			$mensagem = "Falha ao processar proposta";
		}
	} else if (isset($_POST["remover"])) {
		$idEmprego = $_POST['idEmprego'];

		$sqlDelete = "
			DELETE FROM emprego
			WHERE id_job = $idEmprego;
		";

		if ($connect->query($sqlDelete)) {
			$mensagem = "Projeto removida com sucesso";
		} else {
			$error = true;
			$mensagem = "Falha ao remover projeto";
		}
	}

	$sql = "
		SELECT DISTINCT
			e.id_job,
			e.cargo,
			e.cat_cargo,
			e.requerimentos,
			e.n_vagas,
			e.salario,
			e.jornada,
			candidato.id_user,
			candidato.nome,
			candidato.especialidade,
			candidato.uf,
			(
				SELECT COUNT(*)
				FROM candidata
				WHERE fk_EMPREGO_id_job = e.id_job AND aprovado = 1
			) \"vagasOcupadas\",
			c.aprovado
		FROM emprego e 
		INNER JOIN publica p ON p.fk_EMPREGO_id_job = e.id_job 
		INNER JOIN usuario u ON u.id_user = p.fk_USUARIO_id_user
		LEFT JOIN candidata c ON c.fk_EMPREGO_id_job = e.id_job
		LEFT JOIN usuario candidato on candidato.id_user = c.fk_USUARIO_id_user
		WHERE 
			u.id_user = {$_SESSION['ID']};
	";

	$result = $connect->query($sql) or die("Falha na execução do código SQL: " . $connect->error);

	$cargos = [];
	foreach ($result as $row) {
		$cargos[$row["id_job"]][] = $row;
	}
?>

<div class="container mt-3">
	<?php if (!empty($mensagem)): ?>
		<div class="row">
			<div class="alert alert-<?php echo $error ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
				<?php echo $mensagem; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	<?php endif; ?>

	<div class="row fs-4">
		<table class="table">
			<thead class="thead-dark">
				<tr>        
					<th scope="col">Projeto ID</th>
					<th scope="col">Vagas</th>
					<th scope="col">Nome do Projeto</th>
					<th scope="col">Candidatos</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($cargos) == 0): ?>
				<tr>
					<td colspan="4" class="text-center">Não há nenhum projeto cadastrado</td>
				</tr>
				<?php else: ?>
					<?php foreach ($cargos as $nome => $dados): ?>
						<tr>
							<td><?php echo $nome; ?></td>
							<td><?php echo intval($dados[0]['n_vagas']) - intval($dados[0]['vagasOcupadas']); ?></td>
							<td><?php echo $dados[0]['cargo']; ?></td>
							<td>
								<?php if (count($dados) == 1 && empty($dados[0]['nome'])): ?>
									Não há candidatos a esse projeto
								<?php else: ?>
								<?php foreach ($dados as $cargo): ?>
									<div class="d-inline-flex mb-3">
										<?php echo "{$cargo['nome']} ({$cargo['especialidade']})"; ?> 
											<?php if (!is_null($cargo['aprovado'])): ?>
												&nbsp;<strong><?php echo $cargo['aprovado'] == '0' ? 'Rejeitado' : 'Aprovado'; ?></strong>&nbsp;
												<form action="painel.php" method="POST" class="ml-1 mr-1">
													<input type="hidden" name="idUsuario" value="<?php echo $cargo['id_user']; ?>">
													<input type="hidden" name="idEmprego" value="<?php echo $cargo['id_job']; ?>">
													<input type="hidden" name="cancelar" value="1">
													<button type="submit" class="btn btn-danger btn-lg">Cancelar</button>
												</form>
											<?php else: ?>
												<form action="painel.php" method="POST" class="ml-1 mr-1">
													<input type="hidden" name="idUsuario" value="<?php echo $cargo['id_user']; ?>">
													<input type="hidden" name="idEmprego" value="<?php echo $cargo['id_job']; ?>">
													<input type="hidden" name="aprovado" value="1">
													<button type="submit" class="btn btn-primary btn-lg">Aceitar</button>
												</form>
												<form action="painel.php" method="POST">
													<input type="hidden" name="idUsuario" value="<?php echo $cargo['id_user']; ?>">
													<input type="hidden" name="idEmprego" value="<?php echo $cargo['id_job']; ?>">
													<input type="hidden" name="aprovado" value="0">
													<button type="submit" class="btn btn-danger btn-lg">Rejeitar</button>
												</form>
											<?php endif; ?> 
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</td>
							<td>
								<div class="d-inline-flex">
									<button type="button" class="btn btn-info mr-2 btn-lg" data-toggle="modal" data-target="#exampleModal" onclick="preencherModal('<?php echo implode(',', $dados[0]); ?>')">Alterar Projeto</button>
									<form action="painel.php" method="POST">
										<input type="hidden" name="idEmprego" value="<?php echo $dados[0]['id_job']; ?>">
										<input type="hidden" name="remover" value="1">
										<button type="submit" class="btn btn-danger mr-2 btn-lg">Remover Projeto</button>
									</form>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>                    
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleModal">Alterar Projeto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="painel.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="">Cargo:</label>
						<input type="text" name="cargo" id="cargoModal" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Salário:</label>
						<input type="text" name="salario" id="salarioModal" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Jornada:</label>
						<input type="text" name="jornada" id="jornadaModal" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Requerimentos:</label>
						<input type="text" name="requerimentos" id="requerimentosModal" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="idEmpregoModal" name="idEmprego">
					<input type="hidden" name="alterar" value="1">
					<button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Voltar</button>
					<button type="submit" class="btn btn-primary btn-lg">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	function preencherModal(projeto) {
		const dadosProjeto = projeto.split(",");
		document.querySelector("#idEmpregoModal").value = dadosProjeto[0];
		document.querySelector("#cargoModal").value = dadosProjeto[1];
		document.querySelector("#salarioModal").value = dadosProjeto[5];
		document.querySelector("#jornadaModal").value = dadosProjeto[6];
		document.querySelector("#requerimentosModal").value = dadosProjeto[2];
	}
</script>