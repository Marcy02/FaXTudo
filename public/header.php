<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

   <!-- Carregar Bootstrap para mostrar dados do Banco em uma tabela -->
   <?php include_once 'bootstrap.php';?>

   <meta charset="latin1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>faXtudo v3.0</title>

   <!-- link de arquivo css personalizado  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- header section começa  -->

<header class="header">

   <section class="flex">

      <div id="menu-btn" class="fas fa-bars-staggered"></div>

      <?php if (!is_null($_SESSION['ID'])){?>
         <div>
			   <img src="../logos/logo_375.png" alt="Logo" width="190" height="48">
		   </div>
         <div>
            <h6>Usuário:</h6>
            <h4><?php echo $_SESSION['NOME'];?></h4>
         </div>
      <?php } ?>
      
      
      <!-- <a href="index.php" class="logo" style="text-decoration:none"><i class="fas fa-briefcase"></i><?php //include_once 'random_logos.php';?></a> -->

      <nav class="navbar">
         <?php
            if (!is_null($_SESSION['ID'])){
               ?>
               <a href="/private/painel.php" style="text-decoration:none">Painel</a>
               <a href="/private/vagas.php" style="text-decoration:none">Propostas Abertas</a>
               <a href="/private/registro_emprego.php" style="text-decoration: none">Novo Projeto</a>
               <a href="/sobre.php" style="text-decoration:none">Sobre</a>
               <a href="/contato.php" style="text-decoration:none">Contato</a>
               <?php
            } else {
               ?>
               <img src="/logos/logo_1.png" alt="Logo" width="190" height="48">
               <a href="/index.php" style="text-decoration:none">Inicio</a>
               <a href="/sobre.php" style="text-decoration:none">Sobre</a>
               <a href="/contato.php" style="text-decoration:none">Contato</a>
               <?php
            }
         ?>
      </nav>
      
      <?php
            if (!is_null($_SESSION['ID'])){
               ?>
               <a href="/private/logout.php" class="btn-site" style="margin-top: 0; color: white" >Sair</a>
               <?php
            }else{
               ?>
               <a href="login.php" class="btn-site" style="margin-top: 0; color: white" >Login</a>
               <?php
            }
            ?>
   </section>

</header>