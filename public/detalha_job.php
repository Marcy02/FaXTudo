<?php include_once 'private/banco.php';?>
<?php include_once 'header.php';?>

<!-- vizualizar trabalhos section começa  -->

<?php
   $id = $_GET['subject'];
   //echo "id = "  . $id;
	$sql = "SELECT * FROM emprego WHERE id_job = $id";
   //echo "resultado = " . $sql;
	$resultado = mysqli_query($connect,$sql);
   //echo "resultado = " . $resultado;
   $linha = mysqli_fetch_array($resultado);
?>  


<section class="job-details">

   <h1 class="heading">Detralhes do trabalho</h1>

   <div class="details">
      <div class="job-info">
         <h3><?php echo  $linha['cargo'];?></h3>
         <o><?php echo $linha['nome']?></p>
         <p><i class="fas fa-map-marker-alt"></i><?php echo  $linha['uf'];?>, <?php echo  $linha['uf'];?>, <?php echo  $linha['pais'];?></p>
      </div>
      <div class="basic-details">

         <h3>Categoria da Vaga:</h3>
         <p><?php echo  $linha['cat_cargo'];?></p>

         <h3>Salário:</h3>
         <p><?php echo  $linha['salario'];?></p>
         
         <h3>Jornada:</h3>
         <p><?php echo  $linha['jornada'];?></p>
         
         <h3>Turno:</h3>
         <p><?php echo  $linha['turno'];?></p>
      </div>
      <ul>
         <h3>Requirementos:</h3>
         <li><?php echo  $linha['requerimentos'];?><span></span></li>
      </ul>
      <ul>
         <h3>qualificação</h3>
         <li><?php echo  $linha['qualificacao_min'];?></li>
      </ul>
      <ul>
         <h3>Habilidades:</h3>
         <li><?php echo  $linha['habilidades'];?></li>
      </ul>
      <div class="description">
         <h3>Descrição da Vaga</h3>
         <p><?php echo  $linha['desc_cargo'];?></p>
         <ul>
            <li>Número de Vaga Cadastradas:</li>
            <li><?php echo  $linha['n_vagas'];?></li>
         </ul>
      </div>
      <!-- <form action="" method="post" class="flex-btn">
         <input type="submit" value="Candidata-se" name="aplicar" class="btn">
      </form> -->
      <a class="btn btn-outline-primary" href="index.php" role="button">Voltar</a>
   </div>

</section>

<!-- view job section termina -->

<?php include_once 'footer.php';?>
