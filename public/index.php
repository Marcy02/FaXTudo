<?php include_once 'header.php';?>
<?php include_once 'private/banco.php';?>

<!-- filtro de trabalhos section começa  -->

<?php
	$protocol = str_contains('HTTPS', $_SERVER['SERVER_PROTOCOL']) ? "https://" : "http://"; 
	$host = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
	$search = $_GET['search'] ?? null;
	$limit = $_GET['limit'] ?? 10;
	$offset = $_GET['offset'] ?? 1;

	$sql = "
		SELECT *
		FROM emprego e
		INNER JOIN publica p ON p.fk_EMPREGO_id_job = e.id_job
		INNER JOIN usuario u ON u.id_user = p.fk_USUARIO_id_user
	";

	if (!empty($search)) {
		$sql .= " 
			WHERE 
			e.cargo LIKE '%$search%' 
			OR e.cat_cargo LIKE '%$search%' 
			OR e.desc_cargo LIKE '%$search%' 
			OR e.dt_cadastro LIKE '%$search%' 
			OR e.salario LIKE '%$search%' 
			OR e.jornada LIKE '%$search%' 
			OR e.requerimentos LIKE '%$search%' 
			OR e.qualificacao_min LIKE '%$search%' 
			OR e.habilidades LIKE '%$search%' 
			OR e.n_vagas LIKE '%$search%' 
			OR e.cep LIKE '%$search%' 
			OR e.bairro LIKE '%$search%' 
			OR e.cidade LIKE '%$search%' 
			OR e.uf LIKE '%$search%' 
			OR e.pais LIKE '%$search%'  
			OR u.nome LIKE '%$search%'
			OR u.email LIKE '%$search%'
		";
	}

	$totalItens = mysqli_num_rows(mysqli_query($connect, $sql));
	$totalPaginas = ceil($totalItens / $limit);
	$offset = $offset <= $totalPaginas ? $offset : $totalPaginas;

	if (
		is_numeric($limit) && 
		$limit > 0 &&
		is_numeric($offset) &&
		$offset > 0 &&
		$offset < $totalPaginas
	) {
		$sql .= " LIMIT $offset, $limit ";
	} else {
		$sql .= " LIMIT 0, 10 ";
	}
?>

<style>
	.box-search{
		display: flex;
		justify-content: center;
		gap: .3%
	}
</style>

<section class="job-filter">
	<h1 class="heading">Filtrar Oportunidades</h1>
	<div class="box-search" display="flex">
		<input type="search" class="form-control w-50 fs-3" placeholder="Pesquisar" id="pesquisar">
		<button onclick="searchData()" class="btn btn-primary btn-lg">
			<i class="bi bi-search"></i>
		</button>
	</div>
</section>

<!-- filtro de trabalhos section termina -->

<!-- Todos os trabalhos section começa  -->

<?php include_once 'tabela_css.php';?>

<!-- all jobs section termina -->

<!-- footer section começa  -->

<?php include_once 'footer.php';?>