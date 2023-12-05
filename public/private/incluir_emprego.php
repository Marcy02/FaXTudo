<?php
	include_once 'autenticacao.php';
	include_once 'banco.php';

	if (isset($_POST['btn-cadastrar'])) {
		//Remove todos caracteres, exceto números sinal de mais e menos.
		//$cnpj_cpf = filter_input(INPUT_POST,'cnpj_cpf',FILTER_SANITIZE_NUMBER_INT);

		//Tranforma caracteres especiais em HTML
		$cargo=filter_input(INPUT_POST,'cargo',FILTER_SANITIZE_SPECIAL_CHARS);

		//Remove todos caracteres, exceto letras, números e !#$%&'*+-=?^_`{|}~@.[].
		// $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

		$cat_cargo = $_POST['cat_cargo'];
		$desc_cargo = $_POST['desc_cargo'];
		$dt_cadastro = (new DateTime())->format('Y-m-d H:i:s');
		$salario = doubleval($_POST['salario']);
		$jornada = $_POST['jornada'];
		$turno = $_POST['turno'];
		$requerimentos = $_POST['requerimentos'];
		$qualificacao_min = $_POST['qualificacao_min'];
		$habilidades = $_POST['habilidades'];
		$n_vagas = $_POST['n_vagas'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$pais = $_POST['pais'];

		$sql="
			INSERT INTO emprego (
				cargo,
				cat_cargo,
				desc_cargo,
				dt_cadastro,
				salario,
				jornada,
				turno,
				requerimentos,
				qualificacao_min,
				habilidades,
				n_vagas,
				cep,
				bairro,
				cidade,
				uf,
				pais
			)
			VALUES (
				'$cargo',
				'$cat_cargo',
				'$desc_cargo',
				'$dt_cadastro',
				'$salario',
				'$jornada',
				'$turno',
				'$requerimentos',
				'$qualificacao_min',
				'$habilidades',
				$n_vagas,
				'$cep',
				'$bairro',
				'$cidade',
				'$uf',
				'$pais'
			);
		";
		if (mysqli_query($connect,$sql)) {
			$sqlPublica = "
				INSERT INTO publica (fk_EMPREGO_id_job, fk_USUARIO_id_user)
				VALUES (
					(
						SELECT MAX(e.id_job)
						FROM emprego e
					)
					, {$_SESSION['ID']}
				);
			";

			if (mysqli_query($connect, $sqlPublica)) {
				$_SESSION['mensagem'] = "Cadastro com sucesso!";
				header('Location: registro_emprego.php?sucesso');
			} else {
				$_SESSION['mensagem'] = "Erro ao cadastrar!";		
				header('Location: registro_emprego.php?erro');
			}
		} else {
			$_SESSION['mensagem'] = "Erro ao cadastrar!";		
			header('Location: registro_emprego.php?erro');
		}
	}