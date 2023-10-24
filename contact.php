<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- link de arquivo css personalizado  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section começa  -->

<header class="header">

   <section class="flex">

      <div id="menu-btn" class="fas fa-bars-staggered"></div>

      <a href="index.php" class="logo"><i class="fas fa-briefcase"></i>FaXtudo.</a>

      <nav class="navbar">
         <a href="index.php">Inicio</a>
         <a href="about.php">Sobre Nós</a>
         <a href="jobs.php">Todos os Trabalhos</a>
         <a href="contact.php">Contate-nos</a>
         <a href="login.php">Conta</a>
      </nav>

      <a href="#" class="btn" style="margin-top: 0;">Postar Trabalho</a>

   </section>

</header>

<!-- header section termina -->

<!-- Contate-nos section começa  -->

<div class="section-title">Contate-nos</div>

<section class="contact">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <a href="tel:1234567890">(27) 99999-9999</a>
         <a href="tel:1112223333">(27) 3320-5500</a>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <a href="mailto:faxtudo.pi@gmail.com">faxtudo.pi@gmail.com</a>
         <a href="mailto:contac@faxtudo.com.br">contac@faxtudo.com.br</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <a href="#">Flat nº 1, Rua A-1, Ed. Jardins, Brasil, Serra/ES - 29150-00</a>
      </div>

   </div>

   <form action="" method="post">
      <h3>Deixe sua mensagem</h3>
      <div class="flex">
         <div class="box">
            <p>Nome <span>*</span></p>
            <input type="text" name="name" required maxlength="20" placeholder="Seu Nome" class="input">
         </div>
         <div class="box">
            <p>E-mail <span>*</span></p>
            <input type="email" name="email" required maxlength="50" placeholder="Seu email" class="input">
         </div>
         <div class="box">
            <p>Numero <span>*</span></p>
            <input type="number" name="number" required min="0" max="9999999999" maxlength="20" placeholder="Seu número" class="input">
         </div>
         <div class="box">
            <p>Seu cargo <span>*</span></p>
            <select name="role" required class="input">
               <option value="employee">Candidato a Emprego (Empregado)</option>
               <option value="employeer">Provedor de Emprego (Empregador)</option>
            </select>
         </div>
      </div>
      <p>Mensagem <span>*</span></p>
      <textarea name="message" class="input" required maxlength="1000" placeholder="Deixe sua mensagem" cols="30" rows="10"></textarea>
      <input type="submit" value="Enviar mensagem" name="send" class="btn">
   </form>

</section>

<!-- Contate-nos section termino -->


















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
