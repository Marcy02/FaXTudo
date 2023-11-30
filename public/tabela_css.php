<?php include_once 'private/banco.php';?>
<h1 class="heading">Todos os trabalhos</h1>

<section class="jobs-container">

<!-- // Pega dados da Tabela e prepara Paginação: -->
<?php
	if ($totalItens > 0):
		$resultado = mysqli_query($connect,$sql);

		$anterior = $offset - 1;
		$anterior = $anterior > 1 ? $anterior : null;
		$proximo = ($offset + 1)*$limit < $totalItens ? $offset + 1 : null;

		while($linha = mysqli_fetch_array($resultado)):		
?>  

	<!-- Box de Vaga: -->
	<div class="box-container m-4">
		<div class="box">
			<div class="company">
				<div>
					<h5 class="h5_color">Empregador:</h5>
					<h3><?php echo $linha['nome']?></h3>
					<?php
						$today = date("Y-m-d"); 
						$date1 = date_create($today);
						$date2 = date_create($linha['dt_cadastro']);
						$interval = date_diff($date1, $date2);
						$tempo_d = "Tempo Decorrido : " . $interval->y . " anos, " . $interval->m." meses, ".$interval->d." dias ";
					?>
					<h3><?php $tempo_d ?></h3>
				</div>
			</div>
			<h5 class="h5_color">Cargo:</h5>
			<h3 class="job-title"><?php echo  $linha['cargo']; ?></h3><br>
			<h5 class="h5_color">Local:</h5>
			<p class="location"><i class="fas fa-map-marker-alt"></i> <span><?php echo  $linha['uf']; ?>, <?php echo  $linha['pais']; ?></span></p>
		
			<div class="tags">
				<h5 class="h5_color">Salario:</h5>
				<p><i class="fas fa-dollar-sign"><span></i><?php echo  $linha['salario']; ?></pan></p><br>
				<h5 class="h5_color">Jornada:</h5>
				<p><i class="fas fa-stopwatch"></i> <span><?php echo  $linha['jornada']; ?></span></p><br>
				<h5 class="h5_color">Turno:</h5>
				<p><i class="fas fa-clock"></i> <span><?php echo  $linha['turno']; ?></span></p>
			</div>
			<div class="flex-btn">
				<a href="detalha_job.php?subject=<?php echo  $linha['id_job'];?>" class="btn-site">Ver Detalhes</a>
			</div>
		</div>
	</div>

	<?php endwhile; ?>

<!-- // Paginação:	 -->
<div class="container">
	<div class="row">
		<div class="d-flex justify-content-center align-self-center">
			<button <?php echo $anterior ?? 'disabled' ?> class="m-2 <?php $offset == 1 ? 'current-page' : '' ?> btn-lg" onclick="redirect('<?php echo $search; ?>', <?php echo $limit;?>, <?php echo $anterior;?>)">Anterior</button>
		<?php for($i = $offset - 4; $i <= $offset; $i++): ?>
			<?php if ($i < 1) { continue; } ?>
			<button class="m-2 <?php $offset == $i ? 'current-page' : '' ?> btn-lg" onclick="redirect('<?php echo $search; ?>', <?php echo $limit;?>, <?php echo $i;?>)"><?php echo ($i) ?></button>
		<?php endfor; ?>
		<?php for($i = $offset + 1; $i < $offset + 5; $i++): ?>
			<?php if ($i > $totalPaginas) { break; } ?>
			<button class="m-2 btn-lg" onclick="redirect('<?php echo $search; ?>', <?php echo $limit;?>, <?php echo $i;?>)"><?php echo ($i) ?></button>
		<?php endfor; ?>
			<button <?php echo $proximo ?? 'disabled' ?> class="m-2 <?php $offset == $totalPaginas ? 'current-page' : '' ?> btn-lg" onclick="redirect('<?php echo $search; ?>', <?php echo $limit;?>, <?php echo $proximo;?>)">Próxima</button>
		</div>
	</div>
</div>

<?php else: ?>
	<?php if ($totalPaginas == 0): ?>
		<h1> Não há registros para a consulta! </h1>
	<?php endif; ?>
<?php endif; ?>

</section>
<br>
<br>

<script>
	function redirect(search, limit, offset) {
		window.location = `<?php echo $host; ?>?search=${search}&limit=${limit}&offset=${offset}`; 
	}
</script>