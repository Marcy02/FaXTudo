<?php include_once 'header.php';?>

<!-- conta section começa  -->

<div class="account-form-container">

   <section class="account-form">

      <form action="incluir_usuario.php" method="post">
         <h3>Criar uma nova conta!</h3>
         <input type="text" required name="cnpj_cpf" maxlength="14" placeholder="CNPJ/CPF" class="input">
         <input type="text" required name="nome" maxlength="100" placeholder="Nome" class="input">
         <input type="email" required name="email" maxlength="100" placeholder="Email" class="input">
         <input type="password" required name="senha" maxlength="512" placeholder="Senha" class="input">
         <input type="tel" required name="tel" maxlength="13" placeholder="Telefone" class="input">
         <input type="date" required name="dt_nasc" maxlength="10" class="input">
         <input type="text" required name="especialidade" maxlength="80" placeholder="Especialidade" class="input">
         <input type="number" id="cep" required name="cep" maxlength="8" placeholder="CEP" class="input" value="" onblur="pesquisacep(this.value);">
         <input type="text" id="bairro" required name="bairro" maxlength="50" placeholder="Bairro" class="input">
         <input type="text" id="cidade" required name="cidade" maxlength="50" placeholder="Cidade" class="input">
         <input type="text" id="uf" required name="uf" maxlength="50" placeholder="UF" class="input">
         <input type="text" required name="pais" maxlength="50" placeholder="País" class="input">
         <p>já tenho uma conta? <a href="login.php"> Fazer login agora!</a></p>
         <input type="submit" value="Registrar" name="btn-cadastrar" class="btn-site">
      </form>
   
   </section>

</div>

<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
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

<?php include_once 'footer.php';?>