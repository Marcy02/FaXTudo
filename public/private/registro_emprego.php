<?php include_once '../header.php';?>
<?php include_once 'autenticacao.php'; ?>

<!-- conta section começa  -->

<div class="account-form-container">

	<section class="account-form">
		<form action="incluir_emprego.php" method="post">
			<h3>Criar um Novo Projeto!</h3>
			<?php if (isset($_SESSION['mensagem'])): ?>
				<div class="row">
					<div class="alert alert-<?php echo isset($_GET['erro']) ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
						<?php echo $_SESSION['mensagem']; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<?php unset($_SESSION['mensagem']); ?>
			<?php endif; ?>
			<input type="text" required name="cargo" maxlength="200" placeholder="Cargo" class="input">
			<input type="text" required name="cat_cargo" maxlength="200" placeholder="Categoria" class="input">
			<input type="text" required name="desc_cargo" maxlength="200" placeholder="Descrição" class="input">
			<input type="text" required name="salario" maxlength="10" pattern="^\d*(\.\d{2}$)?" placeholder="Salário" class="input">
			<input type="text" required name="jornada" maxlength="200" placeholder="Jornada" class="input">
			<input type="text" required name="turno" maxlength="200" placeholder="Turno" class="input">
			<input type="text" required name="requerimentos" maxlength="200" placeholder="Requerimento" class="input">
			<input type="text" required name="qualificacao_min" maxlength="200" placeholder="Qualificação Mínima" class="input">
			<input type="text" required name="habilidades" maxlength="200" placeholder="Habilidades" class="input">
			<input type="number" required name="n_vagas" maxlength="8" placeholder="Número de Vagas" class="input">
			<input type="text" id="cep" required name="cep" maxlength="15" placeholder="CEP" class="input" value="" onblur="pesquisacep(this.value);">
			<input type="text" id="bairro" required name="bairro" maxlength="200" placeholder="Bairro" class="input">
			<input type="text" id="cidade" required name="cidade" maxlength="200" placeholder="Cidade" class="input">
			<input type="text" id="uf" required name="uf" maxlength="200" placeholder="UF" class="input">
			<input type="text" required name="pais" maxlength="50" placeholder="País" class="input">
			<input type="submit" value="Registrar" name="btn-cadastrar" class="btn-site">
		</form>
	</section>

</div>

<script>
	let callbackCalled = false;

	function limpa_formulário_cep() {
		//Limpa valores do formulário de cep.
		document.getElementById('bairro').value=("");
		document.getElementById('cidade').value=("");
		document.getElementById('uf').value=("");
	}

	function meu_callback(conteudo) {
		if (callbackCalled) {
			return;
		}

		callbackCalled = true;

		if (!("erro" in conteudo)) {
			//Atualiza os campos com os valores.
			document.getElementById('bairro').value=(conteudo.bairro);
			document.getElementById('cidade').value=(conteudo.localidade);
			document.getElementById('uf').value=(conteudo.uf);
		} //end if.
		else {
			//CEP não Encontrado.
			limpa_formulário_cep();
			alert("CEP não encontrado.");
		}
	}
        
	function pesquisacep(valor) {
		callbackCalled = false;

		//Nova variável "cep" somente com dígitos.
		var cep = valor.replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if(validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				document.getElementById('bairro').value="...";
				document.getElementById('cidade').value="...";
				document.getElementById('uf').value="...";

				//Cria um elemento javascript.
				var script = document.createElement('script');

				//Sincroniza com o callback.
				script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

				//Insere script no documento e carrega o conteúdo.
				document.body.appendChild(script);

			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	};

</script>
<!-- conta section termina -->

<?php include_once '../footer.php';?>