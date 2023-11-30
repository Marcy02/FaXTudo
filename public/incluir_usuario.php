<?php
//Iniciar  Sessão
	include_once 'private/banco.php';

	session_start();

	if (isset($_POST['btn-cadastrar'])) {
		//Remove todos caracteres, exceto números sinal de mais e menos.
		$cnpjCpf = filter_input(INPUT_POST,'cnpj_cpf',FILTER_SANITIZE_NUMBER_INT);
		
		//Tranforma caracteres especiais em HTML
		$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
		
		//Remove todos caracteres, exceto letras, números e !#$%&'*+-=?^_`{|}~@.[].
		$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

		$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
		$tel = $_POST['tel'];
		$dtNasc = $_POST['dt_nasc'];
		$especialidade = $_POST['especialidade'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$pais = $_POST['pais'];
		
		$dados = "SELECT COUNT(id_user) as valor FROM usuario WHERE cnpj_cpf = $cnpjCpf";
		$consulta = mysqli_query($connect, $dados);
		$resultado = mysqli_fetch_assoc($consulta);
		if($resultado["valor"] > 0){
			?>
			<script language="JavaScript">
				<!--
				alert("CNPJ ou CPF já Cadastrado!");
				history.go(-1);
				//window.location = '/registro_usuario.php';
				//-->
            </script>
			<?php
		} else {
				$sql="
					INSERT INTO usuario(
						cnpj_cpf, nome, email, senha, tel,
						dt_nasc, especialidade, cep, bairro,
						cidade, uf, pais
					)
					VALUES (
						'$cnpjCpf', '$nome', '$email', '$senha', '$tel',
						'$dtNasc', '$especialidade', '$cep', '$bairro',
						'$cidade', '$uf', '$pais'
					)
				";
		}	
		// echo $sql;
		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastro com sucesso!";
			//header('Location: index.php?sucesso');
			?>
            <script language="JavaScript">
				<!--
				alert("Usuario Registrado Sucesso!");
				window.location = '/index.php';
				//-->
            </script>
            <?php
		} else {
			$_SESSION['mensagem'] = "Erro ao cadastrar!";		
			header('Location: registro.php?erro');
		}
	}	

?>