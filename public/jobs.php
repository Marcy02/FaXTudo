<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Jobs</title>

	<!-- link de arquivo css personalizado  -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- header section começa  -->

<header class="header">

	<section class="flex">
		<div id="menu-btn" class="fas fa-bars-staggered"></div>
		<a href="index.php" class="logo"><i class="fas fa-briefcase"></i> FaXtudo.</a>
		<nav class="navbar">
			<a href="index.php">inicio</a>
			<a href="about.php">sobre nós</a>
			<a href="jobs.php">Todos os trabalhos</a>
			<a href="contact.php">Contate-nos</a>
			<a href="login.php">conta</a>
		</nav>
		<a href="#" class="btn" style="margin-top: 0;">postar trabalho</a>
	</section>
</header>

<!-- header section termina -->

<!-- filtro de trabalhos section começa  -->

<section class="job-filter">
	<h1 class="heading">filtrar trabalhos</h1>
	<form action="" method="post">
		<div class="flex">
			<div class="box">
				<p>cargo<span>*</span></p>
				<input type="text" name="title" placeholder="palavra-chave, categoria ou empresa" required maxlength="20" class="input">
			</div>
			<div class="box">
				<p>Local de trabalho</p>
				<input type="text" name="location" placeholder="cidade, estado ou país" required maxlength="50" class="input">
			</div>
		</div>
		<div class="dropdown-container">
			<div class="dropdown">
				<input type="text" readonly placeholder="data de postagem" name="Data" maxlength="20" class="output">
				<div class="lists">
					<p class="items">today</p>
					<p class="items">3 dias atrás</p>
					<p class="items">7 dias atrás</p>
					<p class="items">10 dias atrás</p>
					<p class="items">15 dias atrás</p>
					<p class="items">30 dias atrás</p>
				</div>
			</div>
			<div class="dropdown">
				<input type="text" readonly name="date" placeholder="salário estimado" maxlength="20" class="output">
				<div class="lists">
					<p class="items">1 mil ou menos</p>
					<p class="items">1 mil - 5 mil</p>
					<p class="items">5 mil - 10 mil</p>
					<p class="items">10 mil - 20 mil</p>
				</div>
			</div>
			<div class="dropdown">
				<input type="text" readonly name="date" placeholder="tipo de emprego" maxlength="20" class="output">
				<div class="lists">
					<p class="items">tempo integral</p>
					<p class="items">tempo parcial</p>
					<p class="items">estágio</p>
					<p class="items">contrato</p>
					<p class="items">temporário</p>
					<p class="items">novato</p>
				</div>
			</div>
			<div class="dropdown">
				<input type="text" readonly name="date" placeholder="nível de educação" maxlength="20" class="output">
				<div class="lists">
					<p class="items">10ª passagem</p>
					<p class="items">12ª passagem</p>
					<p class="items">bacharelado</p>
					<p class="items">master's degree</p>
					<p class="items">diploma</p>
				</div>
			</div>
			<div class="dropdown">
				<input type="text" readonly name="date" placeholder="turnos de trabalho" maxlength="20" class="output">
				<div class="lists">
					<p class="items">turno diurno</p>
					<p class="items">turno da noite</p>
					<p class="items">turno flexível</p>
					<p class="items">turno fixo</p>
				</div>
			</div>
		</div>
	</form>
</section>


<!-- filtro de trabalhos section termina -->

<!-- Todos os trabalhos section começa  -->


<section class="jobs-container">
	<h1 class="heading">Todos os trabalhos</h1>
	<div class="box-container">
		<div class="box">
			<div class="company">
				<img src="images/icon-1.png" alt="">
				<div>
					<h3>IT infosys co.</h3>
					<p>2 dias atrás</p>
				</div>
			</div>
			<h3 class="job-title">senior web desenvolvedor</h3>
			<p class="location"><i class="fas fa-map-marker-alt"></i> <span>Brasil, São Paulo</span></p>
			<div class="tags">
				<p><i class="fas fa-indian-rupee-sign"></i> <span>10k - 25k</span></p>
				<p><i class="fas fa-briefcase"></i> <span>tempo parcial</span></p>
				<p><i class="fas fa-clock"></i> <span>turno diurno</span></p>
			</div>
			<div class="flex-btn">
				<a href="view_job.php" class="btn">ver detalhes</a>
				<button type="submit" class="far fa-heart" name="save"></button>
			</div>
		</div>
		<div class="box">
			<div class="company">
				<img src="images/icon-2.png" alt="">
				<div>
					<h3>all media ltd</h3>
					<p>2 dias atrás</p>
				</div>
			</div>
			<h3 class="job-title">desenvolvedor qualificado</h3>
			<p class="location"><i class="fas fa-map-marker-alt"></i> <span>Brasil, Rio de Janeiro</span></p>
			<div class="tags">
				<p><i class="fas fa-indian-rupee-sign"></i> <span>9000</span></p>
				<p><i class="fas fa-briefcase"></i> <span>turno integral</span></p>
				<p><i class="fas fa-clock"></i> <span>turnos flexíveis</span></p>
			</div>
			<div class="flex-btn">
				<a href="view_job.php" class="btn">ver detalhes</a>
				<button class="far fa-heart"></button>
			</div>
		</div>
		<div class="box">
			<div class="company">
				<img src="images/icon-3.png" alt="">
				<div>
					<h3>software solutions</h3>
					<p>postado hoje</p>
				</div>
			</div>
			<h3 class="job-title">javascript developer</h3>
			<p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
			<div class="tags">
				<p><i class="fas fa-indian-rupee-sign"></i> <span>1 mil - 5 mil</span></p>
				<p><i class="fas fa-briefcase"></i> <span>estágio</span></p>
				<p><i class="fas fa-clock"></i> <span>turno da noite</span></p>
			</div>
			<div class="flex-btn">
				<a href="view_job.php" class="btn">ver detalhes</a>
				<button class="far fa-heart"></button>
			</div>
		</div>
		<div class="box">
			<div class="company">
				<img src="images/icon-4.png" alt="">
				<div>
					<h3>IT world</h3>
					<p>19 dias atrás</p>
				</div>
			</div>
			<h3 class="job-title">junior front-end</h3>
			<p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
			<div class="tags">
				<p><i class="fas fa-indian-rupee-sign"></i> <span>1 mil - 5 mil</span></p>
				<p><i class="fas fa-briefcase"></i> <span>contrato</span></p>
				<p><i class="fas fa-clock"></i> <span>turno fixo</span></p>
			</div>
			<div class="flex-btn">
				<a href="view_job.php" class="btn">ver detalhes</a>
				<button class="far fa-heart"></button>
			</div>
		</div>
		<div class="box">
			<div class="company">
				<img src="images/icon-5.png" alt="">
				<div>
					<h3>info statics</h3>
					<p>2 dias atrás</p>
				</div>
		</div>
		<h3 class="job-title">junior assistente</h3>
		<p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
		<div class="tags">
			<p><i class="fas fa-indian-rupee-sign"></i> <span>5000</span></p>
			<p><i class="fas fa-briefcase"></i> <span>temperary</span></p>
			<p><i class="fas fa-clock"></i> <span>turno flexíveis</span></p>
		</div>
		<div class="flex-btn">
			<a href="view_job.php" class="btn">ver detalhes</a>
			<button class="far fa-heart"></button>
		</div>
	</div>
	<div class="box">
		<div class="company">
			<img src="images/icon-6.png" alt="">
			<div>
				<h3>mass idea</h3>
				<p>2 dias atrás</p>
			</div>
		</div>
		<h3 class="job-title">PHP desenvolvedor</h3>
		<p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
		<div class="tags">
			<p><i class="fas fa-indian-rupee-sign"></i> <span>2mil - 5mil </span></p>
			<p><i class="fas fa-briefcase"></i> <span>novato</span></p>
			<p><i class="fas fa-clock"></i> <span>turno fixo</span></p>
		</div>
		<div class="flex-btn">
			<a href="view_job.php" class="btn">ver detalhes</a>
			<button class="far fa-heart"></button>
		</div>
	</div>
	<div class="box">
		<div class="company">
			<img src="images/icon-7.png" alt="">
			<div>
				<h3>info statics</h3>
				<p>2 dias atrás</p>
			</div>
		</div>
		<h3 class="job-title">junior assistente</h3>
		<p class="location"><i class="fas fa-map-marker-alt"></i> <span>Brasil, São Paulo</span></p>
		<div class="tags">
			<p><i class="fas fa-indian-rupee-sign"></i> <span>5000</span></p>
			<p><i class="fas fa-briefcase"></i> <span>temporário</span></p>
			<p><i class="fas fa-clock"></i> <span>turnos flexíveis</span></p>
		</div>
		<div class="flex-btn">
			<a href="view_job.php" class="btn">ver detalhes</a>
			<button class="far fa-heart"></button>
		</div>
	</div>
	<div class="box">
		<div class="company">
			<img src="images/icon-8.png" alt="">
			<div>
				<h3>software solutions</h3>
				<p>postado hoje</p>
			</div>
		</div>
		<h3 class="job-title">javascript desenvolvedor</h3>
		<p class="location"><i class="fas fa-map-marker-alt"></i> <span>Brasil, Espírito Santo</span></p>
		<div class="tags">
			<p><i class="fas fa-indian-rupee-sign"></i> <span>10 mil - 25 mil</span></p>
			<p><i class="fas fa-briefcase"></i> <span>contrato</span></p>
			<p><i class="fas fa-clock"></i> <span>turno da noite</span></p>
		</div>
		<div class="flex-btn">
			<a href="view_job.php" class="btn">ver detalhes</a>
			<button class="far fa-heart"></button>
		</div>
	</div>  
	<div class="box">
		<div class="company">
			<img src="images/icon-9.png" alt="">
			<div>
				<h3>IT infosys co.</h3>
				<p>2 dias atrás</p>
			</div>
		</div>
		<h3 class="job-title">senior web desenvolvedor</h3>
		<p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
		<div class="tags">
			<p><i class="fas fa-indian-rupee-sign"></i> <span>10 mil - 25 mil</span></p>
			<p><i class="fas fa-briefcase"></i> <span>tempo parcial</span></p>
			<p><i class="fas fa-clock"></i> <span>day shift</span></p>
		</div>
		<div class="flex-btn">
			<a href="view_job.php" class="btn">ver detalhes</a>
			<button class="far fa-heart"></button>
		</div>
	</div>
</div>

</section>

<!-- all jobs section termina -->

<!-- footer section começa  -->

<footer class="footer">
	<section class="grid">
		<div class="box">
			<h3>Links Rápidos</h3>
			<a href="index.php"><i class="fas fa-angle-right"></i> inicio</a>
			<a href="about.php"><i class="fas fa-angle-right"></i> sobre nós</a>
			<a href="jobs.php"><i class="fas fa-angle-right"></i> Todos os trabalhos</a>
			<a href="contact.php"><i class="fas fa-angle-right"></i>Contate-nos</a>
			<a href="#"><i class="fas fa-angle-right"></i> Pesquisa de filtro</a>
		</div>
		<div class="box">
			<h3>links extras</h3>
			<a href="#"><i class="fas fa-angle-right"></i> Conta</a>
			<a href="login.php"><i class="fas fa-angle-right"></i> Login</a>
			<a href="register.php"><i class="fas fa-angle-right"></i> Registra</a>
			<a href="#"><i class="fas fa-angle-right"></i> Postar trabalho</a>
			<a href="#"><i class="fas fa-angle-right"></i> Painel</a>
		</div>
		<div class="box">
			<h3>Siga-nos</h3>
			<a href="https://www.facebook.com/faXtudo"><i class="fab fa-facebook-f"></i> facebook</a>
			<a href="https://twitter.com/faXtudo"><i class="fab fa-twitter"></i> twitter</a>
			<a href="https://www.instagram.com/faXtudo"><i class="fab fa-instagram"></i> instagram</a>
			<a href="https://br.linkedin.com/faXtudo"><i class="fab fa-linkedin"></i> linkedin</a>
			<a href="https://www.youtube.com/faXtudo"><i class="fab fa-youtube"></i> youtube</a>
		</div>
	</section>
	<div class="credit">&copy; copyright @ 2023 by <span>| todos os direitos reservado!</span></div>
</footer>

<!-- footer section termina -->

<!-- customização js file link  -->
<script src="js/script.js"></script>

<script>
	let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');
	dropdown_items.forEach(items =>{
		items.onclick = () =>{
			items_parent = items.parentElement.parentElement;
			let output = items_parent.querySelector('.output');
			output.value = items.innerText;
		}
	});
</script>

</body>

</html>