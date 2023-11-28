<?php include_once "header.php";?>
<?php include_once "private/banco.php"; ?>

<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['ID'])) {
        header('Location: ../index.php');
    }

    $error = null;

    if(isset($_POST['email']) || isset($_POST['senha'])) {
        $email = $connect->real_escape_string($_POST['email']);
        $senha = $connect->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

        $sql_query = $connect->query($sql_code) or die("Falha na execução do código SQL: " . $mconnect->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['ID'] = $usuario['id_user'];
            $_SESSION['NOME'] = $usuario['nome'];
            
            header("Location: ../private/painel.php");
        }

        $error = "Usuário ou senha inválidos";
    }
?>

<!-- conta section começa  -->

<div class="account-form-container">
   <section class="account-form">
        <form action="login.php" method="post">
            <h3>Bem-vindo!</h3>
            <!-- <input type="email" required name="email" maxlength="50" placeholder="Entre com seu email" class="input"> -->
            <?php if (!is_null($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <input type="text" name="email" class="form-control m-1" placeholder="Digite o seu e-mail" required>

            <!-- <input type="password" required name="pass" maxlength="20" placeholder="Entre com sua senha" class="input"> -->
            <input type="password" name="senha" class="form-control m-1" placeholder="Digite a senha" required>

            <p>Não possui uma conta? <a href="registro_usuario.php">Inscreva-se Agora</a></p>
            <input type="submit" value="Entrar" name="submit" class="btn">
        </form>
    </section>
</div>

<!-- conta section termina -->

<?php include_once 'footer.php';?>