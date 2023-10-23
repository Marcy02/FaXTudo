<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

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

<!-- conta section começa  -->

<div class="account-form-container">

   <section class="account-form">

      <form action="" method="post">
         <h3>Bem vindo de volta!</h3>
         <input type="email" required name="email" maxlength="50" placeholder="Entre com seu email" class="input">
         <input type="password" required name="pass" maxlength="20" placeholder="Entre com sua senha" class="input">
         <p>Não possuo uma conta? <a href="register.php">Registrar agora!</a></p>
         <input type="submit" value="Entrar" name="submit" class="btn">
      </form>
   
   </section>

</div>

<!-- conta section termina -->












<!-- footer section starts  -->

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
         <a href="https://www.facebook.com/faXtudo"><i class="fab fa-facebook-f"></i> facebook</a>
         <a href="https://twitter.com/faXtudo"><i class="fab fa-twitter"></i> twitter</a>
         <a href="https://www.instagram.com/faXtudo"><i class="fab fa-instagram"></i> instagram</a>
         <a href="https://br.linkedin.com/faXtudo"><i class="fab fa-linkedin"></i> linkedin</a>
         <a href="https://www.youtube.com/faXtudo"><i class="fab fa-youtube"></i> youtube</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ 2023 by <span>| all rights reserved!</span></div>

</footer>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>
