<?php include_once 'private/banco.php';?>
<?php include_once 'header.php';?>

<?php
	$id = $_GET['subject'];
	$sql = "SELECT * FROM emprego
		INNER JOIN publica ON (emprego.id_job = publica.fk_EMPREGO_id_job)
		INNER JOIN usuario ON (publica.fk_USUARIO_id_user = usuario.id_user)
		WHERE id_job = $id";
	$resultado = mysqli_query($connect,$sql);
	$linha = mysqli_fetch_assoc($resultado);
?>

<section class="job-details">
	<h1 class="heading">Detralhes do Projeto</h1>
	<div class="details">
		<div class="job-info">
			<h1><?php echo  $linha['cargo'];?></h1><br>
			<h5>Empreendedor:</h5>
			<h2><?php echo  $linha['nome'];?></h2><br>
			<h5>Local:</h5>
			<h3>
				<i class="fas fa-map-marker-alt"></i>
				<?php echo  $linha['bairro'];?>, 
				<?php echo  $linha['uf'];?> / 
				<?php echo  $linha['pais'];?>
			</h3><br>
			<h5>Categoria do Cargo:</h5>
			<h3><?php echo  $linha['cat_cargo'];?></h3><br>
			<h5>Salário:</h5>
			<h3><?php echo  $linha['salario'];?></h3><br>
			<h5>Jornada:</h5>
			<h3><?php echo  $linha['jornada'];?></h3><br>
			<h5>Turno:</h5>
			<h3><?php echo  $linha['turno'];?></h3><br>
			<h5>Requirementos:</h5>
			<h3><?php echo  $linha['requerimentos'];?></h3><br>
			<h5>Qualificação Mínima:</h5>
			<h3><?php echo  $linha['qualificacao_min'];?></h3><br>
			<h5>Habilidades:</h5>
			<h3><?php echo  $linha['habilidades'];?></h3><br>
			<h5>Descrição do Cargo</h5>
			<h3><?php echo  $linha['desc_cargo'];?></h3><br>
			<h5>Número de Vaga Cadastradas:</h5>
			<h3><?php echo  $linha['n_vagas'];?></h3>
		</div>
		<a href="index.php" class="btn-site" role="button" aria-pressed="true">Voltar</a>
	</div>
</section>

<?php include_once 'footer.php';?>
