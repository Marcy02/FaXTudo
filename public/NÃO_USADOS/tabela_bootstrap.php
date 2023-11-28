<?php include_once 'private/banco.php'; ?>

<section>
<div class="m-0 ">
        <div class="fs-1 mb-0">
            <h1>Lista de Oportunidades</h1>
        </div>
        <div class="table-responsive">            
            <table class="table  table-hover table-striped fs-2">
                <thead>
                    <tr>
                        <th scope="col">CARGO</th>
                        <th scope="col">SALÁRIO</th>
                        <th scope="col">TURNO</th>
                        <th scope="col">JORNADA</th>
                        <th scope="col">QUALIFICAÇÃO</th>
                        <th scope="col">EMPREGADOR</th>
                        <th scope="col">VAGAS</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider fs-3">
                    <?php
                        $sql="SELECT * FROM emprego";
                        $resultado= mysqli_query($connect,$sql);
                        
                        if (mysqli_num_rows($resultado)>0):                            
                            //var_dump($resultado);                    
                            while($linha =mysqli_fetch_array($resultado)):
                    ?>                            
                        <tr>
                            <td> <?php echo $linha['cargo']; ?> </td>
                            <td> <?php echo $linha['salario']; ?> </td>
                            <td> <?php echo $linha['turno']; ?> </td>
                            <td> <?php echo $linha['jornada']; ?>  </td>
                            <td> <?php echo $linha['qualificacoes']; ?>  </td>  
                            <td> <?php echo $linha['FK_USUARIO_id']; ?>  </td>  
                            <td> <?php echo $linha['numero_candidatos']; ?>  </td>                              
                            <td>    
                                <a href='editar.php?id=<?php echo $linha['id'];?>'  class="btn btn-sm btn-primary"> 
                                    <i  class="bi bi-pencil"></i>
                                </a>
                                
                                <!-- O atributo  data-bs-toggle pode ser modal ou popover. -->
                                <a href='excluir.php?id=<?php echo $linha['id'];?>' class="btn btn-sm btn-danger"  data-bs-toggle='modal' data-bs-target="#exampleModal<?php echo $linha['id'];?>"> 
                                    <i class="bi bi-trash-fill"></i>
                                </a>                              
                            </td>
                        </tr>

                        <!--Modal-->
                        <div class='modal fade' id="exampleModal<?php echo $linha['id'];?>" tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>

                                    <div class='modal-header bg-danger text-white'>
                                        <h1 class='modal-title fs-5 ' id='exampleModalLabel'>ATENÇÃO!</h1>
                                        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>

                                    <div class='modal-body mb-3 mt-3'>
                                        Tem certeza que deseja <b>EXCLUIR</b> o usuario <?php echo $linha['nome'];?>?
                                    </div>

                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
                                        <a href="excluir.php?id=<?php echo $linha['id'];?>" type='button' class='btn btn-danger'>Sim, quero!</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  

                        
                                              
                    <?php 
                    endwhile; 
                else:?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    
                    
                    
                <?php
                endif;
                ?>                  
                </tbody> 
            </table>
        </div>

        <br>
        <a href="adicionarclientes.php" class="btn btn-info"> Adicionar cliente</a>
    </div>
</section>