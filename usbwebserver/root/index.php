<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

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

<!-- home section começa  -->

<div class="home-container">

   <section class="home">

      <form action="" method="post">
         <h3>Encontre seu próximo emprego</h3>
         <p>Cargo <span>*</span></p>
         <input type="text" name="title" placeholder="palavra-chave, categoria ou empresa" required maxlength="20" class="input">
         <p>Local de trabalho</p>
         <input type="text" name="location" placeholder="cidade, estado ou país" required maxlength="50" class="input">
         <input type="submit" value="procurar emprego" name="search" class="btn">
      </form>

   </section>

</div>

<!-- home section termina -->

<!-- category section comeca  -->

<section class="category">

   <h1 class="heading">categorias de trabalho</h1>

   <div class="box-container">

      <a href="#" class="box">
         <i class="fas fa-code"></i>
         <div>
            <h3>development</h3>
            <span>2200 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-pen"></i>
         <div>
            <h3>designer</h3>
            <span>500 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>teacher</h3>
            <span>1500 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-bullhorn"></i>
         <div>
            <h3>marketing</h3>
            <span>1200 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-headset"></i>
         <div>
            <h3>service</h3>
            <span>3100 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-wrench"></i>
         <div>
            <h3>engineer</h3>
            <span>400 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-hand-holding-dollar"></i>
         <div>
            <h3>finance</h3>
            <span>1000 empregos</span>
         </div>
      </a>

      <a href="#" class="box">
         <i class="fas fa-person-digging"></i>
         <div>
            <h3>labour</h3>
            <span>4000 empregos</span>
         </div>
      </a>

   </div>

</section>

<!-- categoria section termina -->

<!-- empregos section comeca  -->

<section class="jobs-container">

   <h1 class="heading">últimos empregos</h1>

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
         <p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
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
         <p class="location"><i class="fas fa-map-marker-alt"></i> <span>mumbai, india</span></p>
         <div class="tags">
            <p><i class="fas fa-indian-rupee-sign"></i> <span>9000</span></p>
            <p><i class="fas fa-briefcase"></i> <span>tempo integral</span></p>
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
         <h3 class="job-title">javascript desenvolvedor</h3>
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
            <p><i class="fas fa-briefcase"></i> <span>temporário</span></p>
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
            <p><i class="fas fa-indian-rupee-sign"></i> <span>30k - 1 lakh</span></p>
            <p><i class="fas fa-briefcase"></i> <span>novato</span></p>
            <p><i class="fas fa-clock"></i> <span>turno fixo</span></p>
         </div>
         <div class="flex-btn">
            <a href="view_job.php" class="btn">ver detalhes</a>
            <button class="far fa-heart"></button>
         </div>
      </div>

   </div>

   <div style="text-align: center; margin-top: 2rem;">
      <a href="jobs.php" class="btn">ver detalhes</a>
   </div>

</section>

<!-- emprego section termina -->










<!-- footer section começa  -->

<footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>Links Rápidos</h3>
         <a href="index.php"><i class="fas fa-angle-right"></i> Inicio</a>
         <a href="about.php"><i class="fas fa-angle-right"></i> Sobre nós</a>
         <a href="jobs.php"><i class="fas fa-angle-right"></i> Todos os trabalhos</a>
         <a href="contact.php"><i class="fas fa-angle-right"></i>Contate-nos</a>
         <a href="#"><i class="fas fa-angle-right"></i> Pesquisa de filtro</a>
      </div>

      <div class="box">
         <h3>links extra </h3>
         <a href="#"><i class="fas fa-angle-right"></i> Conta</a>
         <a href="login.php"><i class="fas fa-angle-right"></i> Login</a>
         <a href="register.php"><i class="fas fa-angle-right"></i> Registra</a>
         <a href="#"><i class="fas fa-angle-right"></i> Postar trabalho</a>
         <a href="#"><i class="fas fa-angle-right"></i> Painel</a>
      </div>

      <div class="box">
         <h3>Siga-nos</h3>
         <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"><i class="fab fa-twitter"></i> twitter</a>
         <a href="#"><i class="fab fa-instagram"></i> instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
         <a href="#"><i class="fab fa-youtube"></i> youtube</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ 2023 by <span>| todos os direitos reservado!</span></div>

</footer>

<!-- footer section termina -->



<!-- customização js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>
