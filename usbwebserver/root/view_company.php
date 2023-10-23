<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Company</title>

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

<!-- Detalhes da empresa section começa  -->

<section class="view-company">

   <h1 class="heading">Detalhes da Empresa</h1>

   <div class="details">

      <div class="info">
         <img src="images/icon-1.png" alt="">
         <h3>IT infosys co.</h3>
         <p><i class="fas fa-map-marker-alt"></i> Brasil, São Paulo</p>
      </div>

      <div class="description">
         <h3>Sobre a Empresa</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe omnis dolore sunt. Tempora voluptatem sit officia, deserunt quaerat eum quis quo quisquam magni placeat architecto repellat blanditiis ex neque hic.</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea rerum ullam culpa minima voluptates ex autem ducimus atque commodi voluptatum.</p>
      </div>

      <ul>
         <li>3 trabalhos postado</li>
         <li>estabelecido em 21-05-2004</li>
         <li>253 funcionarios trabalhado</li>
      </ul>

   </div>

</section>

<!-- Detalhes da empresa section termina -->

<!-- trabalhos section começa  -->

<section class="jobs-container">

   <h1 class="heading">jobs they offer</h1>

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
            <p><i class="fas fa-indian-rupee-sign"></i> <span>10 mil - 20 mil</span></p>
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
               <h3>IT infosys co.</h3>
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
            <a href="view_job.php" class="btn">view details</a>
            <button class="far fa-heart"></button>
         </div>
      </div>

      <div class="box">
         <div class="company">
            <img src="images/icon-3.png" alt="">
            <div>
               <h3>IT infosys co.</h3>
               <p>posted today</p>
            </div>
         </div>
         <h3 class="job-title">javascript desenvolvedor</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Brasil, São Paulo</span></p>
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

   </div>

</section>

<!-- trabalho section termina -->























<!-- footer section starts  -->

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

   
</body>
</html>
