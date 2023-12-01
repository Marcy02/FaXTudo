<?php 
	include_once 'autenticacao.php';
	include_once 'banco.php';

	$mensagem = "";
	$error = false;

	if (isset($_POST['idEmprego'])) {
		$idEmprego = $_POST['idEmprego'];

		$sqlDelete = "
			DELETE FROM candidata
			WHERE fk_EMPREGO_id_job = $idEmprego AND fk_USUARIO_id_user = {$_SESSION['ID']};
		";

		if ($connect->query($sqlDelete)) {
			$mensagem = "Proposta cancelada com sucesso";
		} else {
			$error = true;
			$mensagem = "Falha ao processar o cancelamento";
		}
	}

	$sql = "
		SELECT
			e.id_job,
			e.cargo,
			d.nome,
			e.salario,
			c.aprovado
		FROM emprego e
			INNER JOIN candidata c ON c.fk_EMPREGO_id_job = e.id_job
			INNER JOIN usuario u ON u.id_user = c.fk_USUARIO_id_user
			INNER JOIN publica p ON p.fk_EMPREGO_id_job = e.id_job
			INNER JOIN usuario d ON d.id_user = p.fk_USUARIO_id_user
		WHERE
			u.id_user = {$_SESSION['ID']};
	";

	$result = $connect->query($sql) or die("Falha na execução do código SQL: " . $connect->error);
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

	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>        
					<th scope="col">Projeto</th>
					<th scope="col">Dono do Projeto</th>
					<th scope="col">Salário</th>
					<th scope="col">Status</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
			<?php if ($result->num_rows == 0): ?>
					<tr>
						<td colspan="4" class="text-center">Não há nenhum proposta realizada</td>
					</tr>
				<?php else: ?>
					<?php while ($proposta = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $proposta['cargo']; ?></td>
							<td><?php echo $proposta['nome']; ?></td>
							<td>R$ <?php echo $proposta['salario']; ?></td>
							<td><?php echo is_null($proposta['aprovado']) ? "Aguardando" : ($proposta['aprovado'] == '0' ? 'Rejeitado' : 'Aprovado'); ?></td> 
							<td>
								<form action="painel.php" method="POST">
									<input type="hidden" name="idEmprego" value="<?php echo $proposta['id_job'] ?>">
									<button type="submit" class="btn btn-danger">Desinscrever-se</button>
								</form>
							</td>
						</tr>
					<?php endwhile; ?>                    
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>