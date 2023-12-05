<?php include_once '../header.php'; ?>
<?php include_once 'autenticacao.php'; ?>

<!-- Detalhes da empresa section começa  -->

<section class="view-company">
	<h1 class="heading">Painel do Usuário</h1>
	<div class="details h5">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Projetos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Propostas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="false">Perfil</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<?php include_once 'projetos.php'; ?>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<?php include_once 'propostas.php'; ?>
			</div>
			<div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
				<?php include_once 'perfil.php'; ?>
			</div>
		</div>
	</div>
</section>

<?php include_once '../footer.php';?>