<?php include_once "../header.php"?>

<?php
    include_once "autenticacao.php";
    include_once "banco.php";

    $mensagem = "";
    $error = false;

    if (!is_null($_SESSION['ID']) && !is_null($_POST['idVaga'])) {
        $idVaga = $_POST['idVaga'];

        $sqlInsert = "
            INSERT INTO candidata (fk_EMPREGO_id_job, fk_USUARIO_id_user)
            VALUES ($idVaga, " . $_SESSION['ID'] . ");
        ";

        if ($connect->query($sqlInsert)) {
            $mensagem = "Pedido processado com sucesso";
        } else {
            $error = true;
            $mensagem = "Falha ao processar pedido";
        }
    }

    $sqlVagasAbertas = "
        SELECT *
        FROM emprego e 
            INNER JOIN publica p ON p.fk_EMPREGO_id_job = e.id_job
            INNER JOIN usuario u ON u.id_user = p.fk_USUARIO_id_user
        WHERE 
            p.fk_USUARIO_id_user <> {$_SESSION['ID']}
            AND NOT EXISTS (
                SELECT * 
                FROM candidata
                WHERE 
                    fk_EMPREGO_id_job = e.id_job 
                    AND fk_USUARIO_id_user = {$_SESSION['ID']} 
            );
    ";

    $result = $connect->query($sqlVagasAbertas) or die("Falha na execução do código SQL: " . $connect->error);
?>

<section>
    <div class="container h4">
        <?php if (!empty($mensagem)): ?>
            <div class="row">
                <div class="alert alert-<?php echo $error ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
                    <?php echo $mensagem; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Vagas Abertas</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cargo</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Salário</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows == 0): ?>
                            <tr>
                                <td colspan="4" class="text-center">Nenhuma vaga aberta</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach($result->fetch_all() as $vaga): ?>
                                <tr>
                                    <td><?php print_r($vaga[1]); ?></td>
                                    <td><?php print_r($vaga[21]); ?></td>
                                    <td>R$ <?php print_r($vaga[5]); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-secundary btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="preencherModal('<?php echo implode(',', $vaga); ?>')">Visualizar</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Vaga Aberta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cargo: <p id="cargoModal"></p>
        Categoria: <p id="categoriaModal"></p>
        CEP: <p id="cepModal"></p>
        Cidade: <p id="cidadeModal"></p>
        Descrição do Cargo: <p id="descCargoModal"></p>
        Data de Cadastro: <p id="dtCadastroModal"></p>
        Habilidades: <p id="habilidadesModal"></p>
        Jornada: <p id="jornadaModal"></p>
        Número de Vagas: <p id="numVagaModal"></p>
        Pais: <p id="paisModal"></p>
        Qualificação Mínima: <p id="qualificacaoMinModal"></p>
        Requerimentos: <p id="requerimentoModal"></p>
        Salário: <p id="salarioModal"></p>
        Turno: <p id="turnoModal"></p>
        UF: <p id="ufModal"></p>
        Empregador: <p id="empregadorModal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <form action="vagas.php" method="POST">
            <input type="hidden" id="idVagaModal" name="idVaga">
            <button type="submit" class="btn btn-primary">Candidatar-se</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once "../footer.php"?>

<script>
    function preencherModal(vaga) {
        const dadosVaga = vaga.split(",");

        document.querySelector("#idVagaModal").value = dadosVaga[0];
        document.querySelector("#cargoModal").textContent = dadosVaga[1];
        document.querySelector("#categoriaModal").textContent = dadosVaga[2];
        document.querySelector("#cepModal").textContent = dadosVaga[12];
        document.querySelector("#cidadeModal").textContent = dadosVaga[14];
        document.querySelector("#descCargoModal").textContent = dadosVaga[3];
        document.querySelector("#dtCadastroModal").textContent = dadosVaga[4];
        document.querySelector("#habilidadesModal").textContent = dadosVaga[10];
        document.querySelector("#jornadaModal").textContent = dadosVaga[6];
        document.querySelector("#numVagaModal").textContent = dadosVaga[12];
        document.querySelector("#paisModal").textContent = dadosVaga[16];
        document.querySelector("#qualificacaoMinModal").textContent = dadosVaga[9];
        document.querySelector("#requerimentoModal").textContent = dadosVaga[8];
        document.querySelector("#salarioModal").textContent = dadosVaga[5];
        document.querySelector("#turnoModal").textContent = dadosVaga[7];
        document.querySelector("#ufModal").textContent = dadosVaga[15];
        document.querySelector("#empregadorModal").textContent = dadosVaga[21];
    }
</script>
